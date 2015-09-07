<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new ad_computer;
?>

<div class="container">

  <div class="row">

  	<div class="col-lg-12">

		  <h3>Munki clients report <span id="total-count" class='label label-primary'>…</span> <a class="btn btn-default" href="<?=url('admin/dump_csv/munki_reporting')?>">Download CSV</a></h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
                  <th data-colname='munki_clients.serial_number'>Serial number</th>
                  <th data-colname='munki_clients.hardware_model'>Type</th>
                  <th data-colname='munki_clients.hostname'>Hostname</th>
                  <th data-colname='munki_clients.ip_address'>IP Address</th>
                  <th data-colname='munki_clients.maintenance_type'>Maintenance Type</th>
                  <th data-colname='munki_clients.os_version'>OS Version</th>
                  <th data-colname='munki_clients.last_user'>Last user</th>
                  <th data-colname='munki_clients.purchase_date'>Purchase Date</th>
                  <th data-colname='munki_clients.last_seen'>Last Seen</th>
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

            // Format date
            $('td:last', nRow).html(moment($('td:last', nRow).html()).fromNow());

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