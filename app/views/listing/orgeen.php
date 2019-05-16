<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new Orgeen;
?>

<div class="container">

  <div class="row">

  	<div class="col-lg-12">

		  <h3>Orgeen report <span id="total-count" class='label label-primary'>…</span></h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
		      	<th data-colname='orgeen.org_code'>Org code</th>
		      	<th data-colname='orgeen.parentcode'>Dept code</th>
		        <th data-colname='orgeen.SAPHR'>SAP</th>
		        <th data-colname='orgeen.naam_organisatie'>Naam</th>
		        <th data-colname='orgeen.afkorting'>Afkorting</th>
		        <th data-colname='orgeen.begindatum'>Begindatum</th>
		        <th data-colname='orgeen.einddatum'>Einddatum</th>
		        <th data-colname='orgeen.ind_mail'>Ind Mail</th>
		        <th data-colname='orgeen.domein_empl'>Medew Domein</th>
		    	<th data-colname='orgeen.domein_student'>Stud Domein</th>
		    	<th data-colname='orgeen.timestamp'>Timestamp</th>
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
