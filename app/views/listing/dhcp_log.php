<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new Dhcp_log;
?>

<div class="container">

  <div class="row">

  	<div class="col-lg-12">

		  <h3>DHCP Log report <span id="total-count" class='label label-primary'>…</span>
        <?php if( $authorized_for_download ):?>
          <a class="btn btn-default" href="<?=url('manager/dump_csv/dhcp_log')?>">Download CSV</a
        <?php endif?>
      </h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
		      	<th data-colname='dhcp_log.host'>Hostname</th>
		      	<th data-colname='dhcp_log.mac'>MAC Address</th>
		      	<th data-colname='dhcp_log.ip'>IP Address</th>
		    	<th data-colname='dhcp_log.timestamp'>Last seen</th>
		    	<th data-colname='dhcp_log.building_block'>Building</th>
		    	<th data-colname='dhcp_log.client_class'>Client Class</th>
		    	<th data-colname='dhcp_log.usergroup'>Usergroup</th>
		    	<th data-colname='dhcp_log.count'>Count</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<tr>
					<td colspan="4" class="dataTables_empty">Loading data from server</td>
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
                var date = new Date($('td:eq(3)', nRow).html() * 1000);
                $('td:eq(3)', nRow).html(moment(date).fromNow());

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
