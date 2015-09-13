<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new Fixed;
?>

<div class="container">

  <div class="row">

  	<div class="col-lg-12">

		<h3>Hardware correcties 
			<span id="total-count" class='label label-primary'>…</span>
			<a href="<?=url('admin/dump_csv/hardware_update')?>" class="btn btn-default">
				<i class="fa fa-cloud-download"></i> Create short export
			</a>
		</h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
                <th data-colname='fixed.dw_checked'>Check</th>
                <th data-colname='fixed.naam'>Naam</th>
                <th data-colname='topdesk.soortid_naam'>Soort</th>
                <th data-colname='topdesk.merkid_naam'>Merk</th>
                <th data-colname='topdesk.objecttype'>Type</th>
                <th data-colname='topdesk.serienummer'>Serienummer</th>
                
                <th data-colname='topdesk.budgethouderid_naam'>Faculteit-Dienst</th>
                <th data-hide="1" data-colname='fixed.budgethouderid_naam'>Faculteit-Dienst</th>

                <th data-colname='topdesk.leverancierid_naam'>Leverancier</th>
                <th data-colname='topdesk.aanschafdatum'>Aanschafdatum</th>
                <th data-colname='topdesk.aankoopbedrag'>Aankoopbedrag</th>

                <th data-colname='topdesk.vrijegetal1'>Abonnementsprijs</th>
                <th data-hide="1" data-colname='fixed.vrijegetal1'>Abonnementsprijs</th>

                <th data-colname='topdesk.vestigingid_naam'>Gebouw</th>
                
                <th data-colname='topdesk.lokatieid_naam'>Kamer</th>
                <th data-hide="1" data-colname='fixed.lokatieid_naam'>Kamer</th>

                <th data-colname='topdesk.statusid_naam'>Status</th>
                <th data-colname='topdesk.attentieid_naam'>Attentie</th>

                <th data-colname='topdesk.hostnaam'>Hostnaam</th>
                <th data-colname='topdesk.ipadres'>IP adres</th>
                
                <th data-colname='topdesk.macadres'>MAC adres</th>
                <th data-hide="1" data-colname='fixed.macadres'>MAC adres</th>

                <th data-colname='topdesk.vrijeopzoek2_naam'>Kostenplaats</th>
                <th data-hide="1" data-colname='fixed.vrijeopzoek2_naam'>Kostenplaats</th>

                <th data-colname='topdesk.vrijetekst1'>Walloutlet</th>
                <th data-hide="1" data-colname='fixed.vrijetekst1'>Walloutlet</th>
                
                <th data-colname='fixed.timestamp'>Gewijzigd</th>

		      </tr>
		    </thead>
		    <tbody>
		    	<tr>
					<td colspan="9" class="dataTables_empty">Loading data from server</td>
				</tr>
		    </tbody>
		  </table>
    </div> <!-- /span 12 -->
  </div> <!-- /row -->
</div>  <!-- /container -->

<script type="text/javascript">

$(document).ready(function() {

        // Get modifiers from data attribute
        var mySort = [], // Initial sort
            hideThese = [], // Hidden columns
            col = 0, // Column counter
            columnDefs = [{ visible: false, targets: hideThese }], //Column Definitions
            fix = function(aData, col1, where, nRow){
                // Add warning class and add popover to column that is followed
                // by an invisible fixed column
                if(aData[col1+1] !== '' && aData[col1+1] !== aData[col1]){
                    var original = aData[col1] || 'Leeg';
                    $(where, nRow)
                        .addClass('success')
                        .attr('title', 'Original: '+ original)
                        .html(aData[col1+1])
                        .tooltip({container: 'body'});
                }
            }
        $('.table th').map(function(){

              columnDefs.push({name: $(this).data('colname'), targets: col})

              if($(this).data('sort'))
              {
                mySort.push([col, $(this).data('sort')])
              }

              if($(this).data('hide'))
              {
                hideThese.push(col);
              }

              col++
        });
        

        
        oTable = $('.table').dataTable( {
            processing: true,
            stateSave: false,
            serverSide: true,
            ajax: {
                url: "<?=url('datatables/data')?>",
                data: datatables_search_fix
            },
            order: mySort,
            columnDefs: columnDefs,
            initComplete: function(oSettings, json) {

    		  // Wrap table in responsive div
    		  $(this).wrap('<div class="table-responsive" />'); 

    		  // Customize search box (add clear search field button)
    		  $('.dataTables_filter label').addClass('input-group').contents().filter(function(){
    		    return this.nodeType === 3;
    		  }).remove();
    		  $('.dataTables_filter input').addClass('form-control input-sm')
    		  	.attr('placeholder', 'Search')
    		  	.after($('<span style="cursor: pointer; color: #999" class="input-group-addon"><i class="fa fa-times"></i></span>')
    		  	.click(function(e){
    		  		
    		  		// Clear hash
    		  		var loc = window.location;
    		  		if ("replaceState" in history)
    			        history.replaceState("", document.title, loc.pathname + loc.search);
    			    else {
    			  		window.location.hash = ''
    			  	}

    		  		// Trigger datatables filter
    		  		$('.dataTables_filter input').val('').keyup();

    		  	}));

                // Customize select
                $('select').addClass('form-control input-sm');

                // Initialize responsive dropdown
                responsive_dropdown();
                
                var state = 0
                var button = $('<button>')
                    .addClass('btn btn-default btn-sm')
                    .click(function(){
                        state = ! state;
                        set_fixed_check('all', state)
                        // reload table
                    })
                    .append($('<span>')
                        .addClass('fa fa-check-square-o'));
                
                $('#DataTables_Table_0_length')
                    .parent()
                    .prepend($('<div>')
                        .addClass('pull-left')
                        .css('width', '50px')
                        .append(button));



    		},
            createdRow: function( nRow, aData, iDataIndex ) {

                //console.log(aData)
                                
                // Create topdesk link
                var name=$('td:eq(1)', nRow).html();
                var options = {}
                options["<?=url('admin/topdesk_view/')?>"+name] = 'View in TOPdesk';
                options["<?=url('admin/topdesk_fix/')?>"+name] = 'Fix & view';
                options["<?=url('admin/topdesk_fix/')?>"+name+'/save'] = 'Fix & save';
                var link = get_topdesk_link(name, "<?=url('/show/item/topdesk_id/')?>" + name, options)
                $('td:eq(1)', nRow).html(link);
                
                // Render checkbox
                var check=$('td:eq(0)', nRow).text();
                $('td:eq(0)', nRow).html(function(){
                    var checked = "";
                    if(check == 1){
                        checked = 'checked';
                    }
                    return $('<input type="checkbox" '+checked+'></input>')
                                .change(function(){
                                    // Update database
                                    set_fixed_check(name, $(this).is(':checked'))
                                    // reload table?
                                });
                });
                
                // col 6 is topdesk.budgethouderid_naam
                fix(aData, 6, 'td:eq(6)', nRow);
                
                // col 11 is Abonnementsprijs
                fix(aData, 11, 'td:eq(10)', nRow);
                
                // col 14 is Kamer
                fix(aData, 14, 'td:eq(12)', nRow);
                
                // col 20 is Mac Adres
                fix(aData, 20, 'td:eq(17)', nRow);
                
                // col 22 is Kostenplaats
                fix(aData, 22, 'td:eq(18)', nRow);
                
                // col 24 is Walloutlet
                fix(aData, 24, 'td:eq(19)', nRow);
                
                // Format date
                var date = moment($('td:last', nRow).html(), 'X');
                $('td:last', nRow).html(moment(date).fromNow());

            }
        } );

        // Use hash as searchquery
        if(window.location.hash.substring(1))
        {
            oTable.fnFilter( decodeURIComponent(window.location.hash.substring(1)) );
        }

    } );
</script>


<?$this->view('partials/foot')?>