<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new Topdesk;
?>

<div class="container">

  <div class="row">

  	<div class="col-lg-12">
		<script type="text/javascript">

		$(document).ready(function() {

				// Get modifiers from data attribute
				var myCols = [], // Colnames
					mySort = [], // Initial sort
					hideThese = [], // Hidden columns
					col = 0; // Column counter

				$('.table th').map(function(){

					  myCols.push({'mData' : $(this).data('colname')});

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
			        "bProcessing": true,
			        "bServerSide": true,
			        "sAjaxSource": "<?=url('datatables/data')?>",
			        "aaSorting": mySort,
			        "aoColumns": myCols,
			        "aoColumnDefs": [
			        	{ 'bVisible': false, "aTargets": hideThese }
					],
			        "fnCreatedRow": function( nRow, aData, iDataIndex ) {

			        	// Format date
			        	var date = moment($('td:eq(11)', nRow).html(), 'YYYY-MM-DD HH:mm:ss');
			        	$('td:eq(11)', nRow).html(moment(date).fromNow());

				    },
				    "fnServerParams": function ( aoData ) {

				      	// Hook in serverparams to change search
				      	// Convert array to dict
				      	var out = {}
						for (var i = 0; i < aoData.length; i++) {
							out[aoData[i]['name']] =  aoData[i]['value']
						}

						// Look for 'between' statement todo: make generic
						if(out.sSearch.match(/^\d+ percentage \d+$/))
						{
							// Clear global search
							aoData.push( { "name": "sSearch", "value": "" } );

							// Add column specific search
							aoData.push( { "name": "sSearch_5", "value": out.sSearch.replace(/(\d+) percentage (\d+)/, 'BETWEEN $1 AND $2') } );
							//dumpj(out)
						}

						// Look for a bigger/smaller/equal statement
						if(out.sSearch.match(/^percentage [<>=] \d+$/))
						{
							// Clear global search
							aoData.push( { "name": "sSearch", "value": "" } );

							// Add column specific search
							aoData.push( { "name": "sSearch_5", "value": out.sSearch.replace(/.*([<>=] \d+)$/, '$1') } );
							//dumpj(out)
						}
				    }
			    } );

			    // Use hash as searchquery
			    if(window.location.hash.substring(1))
			    {
					oTable.fnFilter( decodeURIComponent(window.location.hash.substring(1)) );
			    }

			} );
		</script>

		  <h3>TopDesk report <span id="total-count" class='label label-primary'>…</span></h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
		      	<th data-colname='topdesk#naam'>Naam</th>
		      	<th data-colname='topdesk#serienummer'>Serienummer</th>
		      	<th data-colname='topdesk#ref_soort'>Soort</th>
		      	<th data-colname='topdesk#ref_merk'>Merk</th>
		      	<th data-colname='topdesk#macadres'>MAC adres</th>
		      	<th data-colname='topdesk#hostnaam'>Hostnaam</th>
		      	<th data-colname='topdesk#attentieid_naam'>Attentie</th>
		      	<th data-colname='topdesk#statusid_naam'>Status</th>
		      	<th data-colname='topdesk#persoonid_loginnaamnetwerk'>Vunet-id</th>
		      	<th data-colname='topdesk#ref_finbudgethouder'>Budget</th>
		      	<th data-colname='topdesk#vrijeopzoek2_naam'>Budgetnr</th>

		    	<th data-colname='topdesk#datwijzig'>Gewijzigd</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<tr>
					<td colspan="12" class="dataTables_empty">Loading data from server</td>
				</tr>
		    </tbody>
		  </table>
    </div> <!-- /span 12 -->
  </div> <!-- /row -->
</div>  <!-- /container -->

<?$this->view('partials/foot')?>