<?$this->view('partials/head')?>

<? //Initialize models needed for the table
new Topdesk; new Users; new Orgeen;
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

		  <h3>Orgeen report <span id="total-count" class='label label-primary'>…</span> <a href="<?=url('admin/fix/orgeencode')?>" class="btn btn-default ajax">Fix Orgeencode</a></h3>

		  <table class="table table-striped table-condensed table-bordered">
		    <thead>
		      <tr>
		      	<th>naam</th>
		      	<th>hostnaam</th>
		      	<th>Soort</th>
		      	<th>Vunet-id</th>
		      	<th>Comment</th>
		        <th>Dept (topdesk)</th>
		        <th>Dept (LDAP)</th>
		        <th>Org code (LDAP)</th>
		        <th>Org code (topdesk)</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<? $model = new Users;
		    	// Lijst van machines die op vunetid staan
		    	// en waarvan het vunetid maar 1 orgeencode heeft
		    	// en department matcht, maar orgeen is niet ingevuld
		    	$sql = conf('queries')['orgeen_fix'];
		    	?>

		    	<?foreach ($model->query($sql) as $obj):?>

		    	<tr>
		    		<td><?=$obj->naam?></td>
		    		<td><?=$obj->hostnaam?></td>
		    		<td><?=$obj->ref_soort?></td>
		    		<td><?=$obj->persoonid_loginnaamnetwerk?></td>
		    		<td><?=$obj->comment?></td>
		    		<td><?=$obj->ref_finbudgethouder?></td>
		    		<td><?=$obj->afkorting?></td>
		    		<td><?=$obj->departmentnumber?></td>
		    		<td><?=$obj->vrijeopzoek2_naam?></td>
		    	</tr>
		    	<?endforeach?>
		    </tbody>
		  </table>
    </div> <!-- /span 12 -->
  </div> <!-- /row -->
</div>  <!-- /container -->

<script>
	// Make ajax buttons
	$(document).ready(function() {
		$('a.ajax').click(function(e){
			// store ref to button
			var me = this
			e.preventDefault();
			$.getJSON( this.href, function() {
				// JSON request sent
			})
			  .done(function(data) {
			    alert( data.info);
			    $(me).addClass('btn-success');
			  })
			  .fail(function() {
			    alert( "error" );
			  })
			  .always(function() {
			    // Run always when done
			  });
		});
	});

</script>

<?$this->view('partials/foot')?>