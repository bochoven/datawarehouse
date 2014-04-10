<?$this->view('partials/head')?>

<div class="container">

	<?foreach(conf('dashboard_layout', array()) AS $row):?>

	<div class="row">

		<?foreach($row as $item):?>

		<?$this->view("widgets/${item}_widget")?>

		<?endforeach?>

	</div> <!-- /row -->

	<?endforeach?>
	
	<div class="row">
		
		<div class="col-lg-12">
			
			<?$fco = new Fco();?>

			<table class="table table-striped">
				
				<thead>
					<tr>
						<th>Functieplaats</th>
						<th>Deurcode</th>
						<th>Omschrijving</th>
						<th>Activiteitcode</th>
						<th>Klantnaam</th>
						<th>Debiteur</th>
						<th>Gebruikersstatus</th>
						<th>Lokale Info</th>
						<th>In gebruik van</th>
						<th>Hoofd deb code</th>
					</tr>
				</thead>

				<?foreach($fco->retrieve_many() as $obj):?>

				<tr>

					<td><?print_r($obj->functieplaats)?></td>
					<td><?print_r($obj->deurcode)?></td>
					<td><?print_r($obj->omschrijving)?></td>
					<td><?print_r($obj->activiteitcode)?></td>
					<td><?print_r($obj->klantnaam)?></td>
					<td><?print_r($obj->debiteur)?></td>
					<td><?print_r($obj->gebruikerstatus)?></td>
					<td><?print_r($obj->lokale_info)?></td>
					<td><?print_r($obj->in_gebruik_van)?></td>
					<td><?print_r($obj->hoofd_deb_code)?></td>

				</tr>

				<?endforeach?>

			</table>
			
			
		</div>
		
	</div> <!-- /row -->


</div>	<!-- /container -->


<script>
	// Add tooltips
	$(document).ready(function() {
		$('[title]').tooltip();
		 $('table').dataTable();
	});
</script>



<?$this->view('partials/foot')?>
