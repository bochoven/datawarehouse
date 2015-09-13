// Global functions

// Set fixed column for item with name
// Used for bulk operations
function set_fixed_check(name, state){
	var url = appUrl + '/admin/set_check_state/' + name + '/' + +state;
	$.getJSON(url)
		.always(function() {
			var oTable = $('.table').DataTable();
			oTable.ajax.reload();
			return;
		});
}

// Fix common search glitches
function datatables_search_fix(d){
	// Trim whitespace
	d.search.value = d.search.value.trim();
	
	// Look for mac adress containing hyphens
	if(d.search.value.match(/([0-9a-fA-F]{2}[-]){5}([0-9a-fA-F]{2})/)){
		d.search.value = d.search.value.replace(/-/g, ':');
	}
}

function upload(fileInputId, fileIndex)
{
	// take the file from the input
	var file = document.getElementById(fileInputId).files[fileIndex]; 
	var reader = new FileReader();
	reader.readAsBinaryString(file); // alternatively you can use readAsDataURL
	reader.onloadend  = function(evt)
	{
			// create XHR instance
			xhr = new XMLHttpRequest();
			 
			// send the file through POST
			xhr.open("POST", 'upload.php', true);
 
			// make sure we have the sendAsBinary method on all browsers
			XMLHttpRequest.prototype.mySendAsBinary = function(text){
				var data = new ArrayBuffer(text.length);
				var ui8a = new Uint8Array(data, 0);
				for (var i = 0; i < text.length; i++) ui8a[i] = (text.charCodeAt(i) & 0xff);
	 
				if(typeof window.Blob == "function")
				{
					 var blob = new Blob([data]);
				}else{
					 var bb = new (window.MozBlobBuilder || window.WebKitBlobBuilder || window.BlobBuilder)();
					 bb.append(data);
					 var blob = bb.getBlob();
				}
 
				this.send(blob);
			}
			 
			// let's track upload progress
			var eventSource = xhr.upload || xhr;
			eventSource.addEventListener("progress", function(e) {
				// get percentage of how much of the current file has been sent
				var position = e.position || e.loaded;
				var total = e.totalSize || e.total;
				var percentage = Math.round((position/total)*100);
				 
				// here you should write your own code how you wish to proces this
			});
			 
			// state change observer - we need to know when and if the file was successfully uploaded
			xhr.onreadystatechange = function()
			{
				if(xhr.readyState == 4)
				{
					if(xhr.status == 200)
					{
						// process success
					}else{
						// process error
					}
				}
			};
			 
			// start sending
			xhr.mySendAsBinary(evt.target.result);
	};
}

// Get topdesk link
function get_topdesk_link(name, url, options)
{
	var dropdown = '';

	if (jQuery.isPlainObject( options ))
	{
		//Loop through options
		for(var prop in options){
		    
		    dropdown = dropdown + '<li><a target="_blank" href="'+prop+'">'+options[prop]+'</a></li>';
		}
		
	}

	if(dropdown == '') // Just return a lookup link
	{
		return '<a class="btn btn-xs btn-default" href="' + url + '">' + name + '</a>';
	}
	else // return a button group
	{
		return '<div class="btn-group" style="width: 80px">' +
  '<a class="btn btn-xs btn-default" href="' + url + '">' + name + '</a>' +
  '<button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">' +
    '<span class="caret"></span>' +
    '<span class="sr-only">Toggle Dropdown</span>' +
  '</button>' +
  '<ul class="dropdown-menu" role="menu">' +
    dropdown +
  '</ul>' +
'</div>';
	}

}

// Dropdowns are hidden on a responsive table due to overflow
// Make room in bottom of the table for dropdowns
function responsive_dropdown()
{
	var height = 34; // Row height
	var lines = 3 // Number of lines in the dropdown

	// Third to last row
	$('.table-responsive .btn-group').eq(-3).on('show.bs.dropdown', function () {
		$('.table-responsive').css('padding-bottom', height * (lines -2))
	});

	// Second to last row
	$('.table-responsive .btn-group').eq(-2).on('show.bs.dropdown', function () {
		$('.table-responsive').css('padding-bottom', height * (lines - 1))
	});

	// Last row
	$('.table-responsive .btn-group').last().on('show.bs.dropdown', function () {
		$('.table-responsive').css('padding-bottom', height * lines)
	});

	// Reset last two rows
	$('.table-responsive .btn-group').slice(-3).on('hide.bs.dropdown', function () {
		$('.table-responsive').css('padding-bottom', '0px')
	});
}

// Update time in <time> tags
function update_time()
{
	$( "time" ).each(function( index ) {
		var date = new Date($(this).attr('datetime') * 1000);
		$(this).html(moment(date).fromNow());
	});
}



// Set/retrieve state data in localStorage
// This function is used by datatables
function state(id, data)
{
	// Create unique id for this page
	path = location.pathname + location.search

	// Strip host information and index.php
	path = path.replace(/.*index\.php\??/, '')

	// Strip serial number from detail page, we don't want to store
	// sorting information for every unique client
	path = path.replace(/(.*\/clients\/detail\/).+$/, '$1')

	// Strip inventory item from page, no unique sort per item
	path = path.replace(/(.*\/inventory\/items\/).+$/, '$1')

	// Append id to page path
	id = path + id

	if( data == undefined)
	{
	  // Get data
	  return JSON.parse( localStorage.getItem(id) );

	}
	else
	{
	  // Set data
	  localStorage.setItem( id, JSON.stringify(data) );
	}
}

// Debug function to dump js objects
function dumpj(obj)
  {
	type = typeof(obj)
	if(type == 'object')
	{
	  var out = {}
	  for (var key in obj) {
		type = typeof(obj[key])
		if ( type == 'object')
		{
		  out[key] = 'object'
		}
		else{
		  out[key] = obj[key];
		}
	  }
	}
	else{
	  out = obj
	}
	alert(JSON.stringify(out));
  }

// Filesize formatter
function fileSize(size, decimals) {
	if(decimals == undefined){decimals = 0};
	var i = Math.floor( Math.log(size) / Math.log(1024) );
	return ( size / Math.pow(1024, i) ).toFixed(decimals) * 1 + ' ' + ['', 'K', 'M', 'G', 'T', 'P', 'E'][i] + 'B';
}

// Plural formatter
String.prototype.pluralize = function(count, plural)
{
  if (plural == null)
	plural = this + 's';

  return (count == 1 ? this : plural) 
}

