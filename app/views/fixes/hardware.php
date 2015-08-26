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
				var mySort = [], // Initial sort
					hideThese = [], // Hidden columns
					col = 0; // Column counter
                    columnDefs = [{ visible: false, targets: hideThese }]; //Column Definitions

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
                        url: "<?=url('datatables/data')?>"
                    },
			        order: mySort,
			        columnDefs: columnDefs,
			        createdRow: function( nRow, aData, iDataIndex ) {

                        var name=$('td:eq(0)', nRow).html();
			        	var options = {}
			        	options["<?=url('admin/topdesk_view/')?>"+name] = 'View in TOPdesk';
			        	options["<?=url('admin/topdesk_fix/')?>"+name] = 'Fix & view';
			        	options["<?=url('admin/topdesk_fix/')?>"+name+'/save'] = 'Fix & save';

			        	var link = get_topdesk_link(name, "<?=url('/show/item/topdesk_id/')?>" + name, options)
			        	$('td:eq(0)', nRow).html(link);

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

		<h3>Hardware correcties 
			<span id="total-count" class='label label-primary'>…</span>
			<a href="<?=url('admin/dump_csv/hardware_update')?>" class="btn btn-default">
				<i class="fa fa-cloud-download"></i> Create short export
			</a>
		</h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
                <th data-colname='fixed.naam'>Naam</th>
                <th data-colname='topdesk.soortid_naam'>Soort</th>
                <th data-colname='topdesk.merkid_naam'>Merk</th>
                <th data-colname='topdesk.objecttype'>Type</th>
                <th data-colname='topdesk.rm_specification'>Specificatie</th>
                <th data-colname='topdesk.serienummer'>Serienummer</th>
                <th data-colname='fixed.budgethouderid_naam'>Faculteit-Dienst</th>
                <th data-colname='topdesk.budgethouderid_naam'>Faculteit-Dienst</th>
                
                <th data-colname='topdesk.leverancierid_naam'>Leverancier</th>
                <th data-colname='topdesk.aanschafdatum'>Aanschafdatum</th>
                <th data-colname='topdesk.aankoopbedrag'>Aankoopbedrag</th>

                <th data-colname='topdesk.vrijegetal1'>Abonnementsprijs</th>
                <th data-hide="1" data-colname='fixed.vrijegetal1'>Abonnementsprijs</th>

                <th data-colname='topdesk.vestigingid_naam'>Gebouw</th>
                <th data-colname='fixed.lokatieid_naam'>Kamer</th>

                <th data-colname='topdesk.statusid_naam'>Status</th>
                <th data-colname='topdesk.attentieid_naam'>Attentie</th>

                <th data-colname='topdesk.hostnaam'>Hostnaam</th>
                <th data-colname='topdesk.ipadres'>IP adres</th>
                <th data-colname='topdesk.macadres'>MAC adres</th>
                <th data-colname='fixed.macadres'>MAC adres</th>

                <th data-colname='fixed.vrijeopzoek1_naam'>Eigenaar</th>
                <th data-colname='fixed.vrijeopzoek2_naam'>Kostenplaats</th>
                <th data-colname='fixed.vrijetekst1'>Walloutlet</th>
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


<?$this->view('partials/foot')?>