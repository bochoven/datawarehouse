<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new fco;
?>

<div class="container">

  <div class="row">

  	<div class="col-lg-12">
		<script type="text/javascript">

		$(document).ready(function() {

			    oTable = $('.table').dataTable( {
			        
			       	"fnCreatedRow": function( nRow, aData, iDataIndex ) {

			        	// Format date
			        	var date = new Date($('td:eq(10)', nRow).html() * 1000);
			        	$('td:eq(10)', nRow).html(moment(date).fromNow());

				    }
				    
			    } );

			    // Use hash as searchquery
			    if(window.location.hash.substring(1))
			    {
					oTable.fnFilter( decodeURIComponent(window.location.hash.substring(1)) );
			    }

			} );
		</script>

		  <h3>FCO report <span id="total-count" class='label label-primary'>…</span></h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
		      	<th>naam</th>
		      	<th>hostnaam</th>
		      	<th>Vunet-id</th>
		      	<th>Comment</th>
		        <th>Dept (topdesk)</th>
		        <th>Org code (topdesk)</th>
		        <th>Dept (LDAP)</th>
		        <th>Org code (LDAP)</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<? $model = new Users;
		    	$sql = 
		    	"SELECT naam, hostnaam, persoonid_loginnaamnetwerk, comment,
		    		ref_finbudgethouder, vrijeopzoek2_naam, departmentnumber, 
		    		o.afkorting 
		    	FROM topdesk t 
		    	LEFT JOIN users u ON (t.persoonid_loginnaamnetwerk = u.uid)
		    	LEFT JOIN orgeen o ON (u.departmentnumber = o.org_code) 
		    	WHERE t.persoonid_loginnaamnetwerk != ''";
		    	?>

		    	<?foreach ($model->query($sql) as $obj):?>

		    	<tr>
		    		<td><?=$obj->naam?></td>
		    		<td><?=$obj->hostnaam?></td>
		    		<td><?=$obj->persoonid_loginnaamnetwerk?></td>
		    		<td><?=$obj->comment?></td>
		    		<td><?=$obj->ref_finbudgethouder?></td>
		    		<td><?=$obj->vrijeopzoek2_naam?></td>
		    		<td><?=$obj->departmentnumber?></td>
		    		<td><?=$obj->afkorting?></td>
		    	</tr>
		    	<?endforeach?>
		    </tbody>
		  </table>
    </div> <!-- /span 12 -->
  </div> <!-- /row -->
</div>  <!-- /container -->

<?$this->view('partials/foot')?>