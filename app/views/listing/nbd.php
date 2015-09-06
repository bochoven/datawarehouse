<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new Nbd;
?>

<div class="container">

  <div class="row">

  	<div class="col-lg-12">

		  <h3>NBD report <span id="total-count" class='label label-primary'>…</span> <a class="btn btn-default" href="<?=url('admin/dump_csv/nbd')?>">Download CSV</a></h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
		      	<th data-colname='nbd.port'>Port</th>
		        <th data-colname='nbd.vlan'>vlan</th>
		        <th data-colname='nbd.speed'>Speed</th>
		        <th data-colname='nbd.status'>Status</th>
		        <th data-colname='nbd.ip_address'>IP Adress</th>
		        <th data-sort='desc' data-colname='nbd.hostname'>Hostname</th>
		        <th data-colname='nbd.mac_address'>MAC Address</th>
		        <th data-colname='nbd.room'>Room</th>
		    	<th data-colname='nbd.out_mb'>Out (MB)</th>
		    	<th data-colname='nbd.in_mb'>In (MB)</th>
		    	<th data-colname='nbd.timestamp'>Timestamp</th>
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
            url: "<?=url('datatables/data')?>",
            data: datatables_search_fix
        },
        order: mySort,
        columnDefs: columnDefs,
        createdRow: function( nRow, aData, iDataIndex ) {

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