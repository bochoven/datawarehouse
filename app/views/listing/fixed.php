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

			        	// Format date
			        	var date = moment($('td:eq(11)', nRow).html(), 'YYYY-MM-DD HH:mm:ss');
			        	$('td:eq(11)', nRow).html(moment(date).fromNow());

				    }
				   
			    } );

			    // Use hash as searchquery
			    if(window.location.hash.substring(1))
			    {
					oTable.fnFilter( decodeURIComponent(window.location.hash.substring(1)) );
			    }

			} );
		</script>

		  <h3>Fixed entries report <span id="total-count" class='label label-primary'>…</span> <a href="<?=url('admin/dump')?>" class="btn btn-default">Create export</a></h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
		      	<th data-colname='fixed#naam'>Naam</th>
		      	<th data-colname='fixed#serienummer'>Serienummer</th>
		      	<th data-colname='fixed#ref_soort'>Soort</th>
		      	<th data-colname='fixed#ref_merk'>Merk</th>
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