<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new Topdesk;
?>

<div class="container">

  <div class="row">

  	<div class="col-lg-12">

		  <h3>TopDesk report <span id="total-count" class='label label-primary'>…</span></h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
		      	<th data-colname='topdesk.naam'>Naam</th>
		      	<th data-colname='topdesk.serienummer'>Serienummer</th>
		      	<th data-colname='topdesk.soortid_naam'>Soort</th>
		      	<th data-colname='topdesk.merkid_naam'>Merk</th>
		      	<th data-colname='topdesk.macadres'>MAC adres</th>
		      	<th data-colname='topdesk.hostnaam'>Hostnaam</th>
		      	<th data-colname='topdesk.aankoopbedrag'>Aankoopbedrag</th>
		      	<th data-colname='topdesk.attentieid_naam'>Attentie</th>
		      	<th data-colname='topdesk.statusid_naam'>Status</th>
		      	<th data-colname='topdesk.persoonid_loginnaamnetwerk'>Vunet-id</th>
		      	<th data-colname='topdesk.budgethouderid_naam'>Budget</th>
		      	<th data-colname='topdesk.vrijeopzoek2_naam'>Budgetnr</th>
		      	<th data-colname='topdesk.lokatieid_naam'>Lokatie</th>

		    	<th data-colname='topdesk.datwijzig'>Gewijzigd</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<tr>
					<td colspan="14" class="dataTables_empty">Loading data from server</td>
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
            
            // Create topdesk link
            var name=$('td:eq(0)', nRow).html();
            var options = {}
            options["<?=url('admin/topdesk_view/')?>"+name] = 'View in TOPdesk';			        	var link = get_topdesk_link(name, "<?=url('/show/item/topdesk_id/')?>" + name, options)
            $('td:eq(0)', nRow).html(link);

            // Format date
            var date = new Date($('td:last', nRow).html() * 1000);
            $('td:last', nRow).html(moment(date).fromNow());

            }
        });

        // Use hash as searchquery
        if(window.location.hash.substring(1))
        {
            oTable.fnFilter( decodeURIComponent(window.location.hash.substring(1)) );
        }

});
</script>

<?$this->view('partials/foot')?>