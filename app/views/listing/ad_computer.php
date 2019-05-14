<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new ad_computer;
?>

<div class="container">

  <div class="row">

  	<div class="col-lg-12">

		  <h3>AD Computer report <span id="total-count" class='label label-primary'>…</span> <a class="btn btn-default" href="<?=url('manager/dump_csv/ad_computer')?>">Download CSV</a></h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
		      	<th data-colname='ad_computer.name'>Name</th>
		      	<th data-colname='ad_computer.dn'>DN</th>
		      	<th data-colname='ad_computer.description'>Description</th>
		      	<th data-colname='ad_computer.operatingsystem'>OS</th>
		      	<th data-colname='ad_computer.lastlogon'>Lastlogon</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<tr>
					<td colspan="5" class="dataTables_empty">Loading data from server</td>
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