<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new Fixed;
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

			        	var name=$('td:eq(0)', nRow).html();
			        	var options = {}
			        	options["<?=url('admin/topdesk_view/')?>"+name] = 'View in TOPdesk';
			        	options["<?=url('admin/topdesk_fix/')?>"+name] = 'Fix & view';
			        	options["<?=url('admin/topdesk_fix/')?>"+name+'/save'] = 'Fix & save';

			        	var link = get_topdesk_link(name, "<?=url('/show/item/topdesk_id/')?>" + name, options)
			        	$('td:eq(0)', nRow).html(link);

			        	// Format date
			        	var date = moment($('td:eq(12)', nRow).html(), 'YYYY-MM-DD HH:mm:ss');
			        	$('td:eq(12)', nRow).html(moment(date).fromNow());

				    },
				    "fnServerParams": function ( aoData ) {

				      	// Hook in serverparams to change search
				      	aoData.push( { "name": "xWhere", "value": "persoonid_loginnaamnetwerk = ''" } );
				    }
				   
			    } );

			    // Use hash as searchquery
			    if(window.location.hash.substring(1))
			    {
					oTable.fnFilter( decodeURIComponent(window.location.hash.substring(1)) );
			    }

			} );
		</script>

		<h3>Hardware lokatie correcties 
			<span id="total-count" class='label label-primary'>…</span>
			<a href="<?=url('admin/dump_csv/hardware_lokatie')?>" class="btn btn-default">
				<i class="fa fa-cloud-download"></i> Create lokatie export
			</a>
		</h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
		      	<th data-colname='fixed#naam'>Naam</th>
		      	<th data-colname='fixed#serienummer'>Serienummer</th>
		      	<th data-colname='fixed#soortid_naam'>Soort</th>
		      	<th data-colname='fixed#ref_merk'>Merk</th>
		      	<th data-colname='fixed#ref_lokatie'>Lokatie</th>
		      	<th data-colname='fixed#macadres'>MAC adres</th>
		      	<th data-colname='fixed#hostnaam'>Hostnaam</th>
		      	<th data-colname='fixed#attentieid_naam'>Attentie</th>
		      	<th data-colname='fixed#statusid_naam'>Status</th>
		      	<th data-colname='fixed#persoonid_loginnaamnetwerk'>Vunet-id</th>
		      	<th data-colname='fixed#ref_finbudgethouder'>Budget</th>
		      	<th data-colname='fixed#vrijeopzoek2_naam'>Budgetnr</th>
		    	<th data-colname='fixed#datwijzig'>Gewijzigd</th>
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