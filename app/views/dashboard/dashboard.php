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
			
			<?$fco = new Fco(); $sql = "SELECT COUNT(1) as count, omschrijving FROM fco GROUP BY omschrijving"?>
			
			<table class="table table-striped">
				
			<thead>
				<tr>
					<th>Omschrijving</th>
					<th>Aantal</th>
				</tr>
			</thead>
			
			<?foreach($fco->query($sql) AS $obj):?>
				<tr>
					<td><?=$obj->omschrijving?></td>
					<td><?=$obj->count?></td>
				</tr>
			<?endforeach?>
			
			</table>
			
		</div>
		
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

					<td><?=$obj->functieplaats?></td>
					<td><?=$obj->deurcode?></td>
					<td><?=$obj->omschrijving?></td>
					<td><?=$obj->activiteitcode?></td>
					<td><?=$obj->klantnaam?></td>
					<td><?=$obj->debiteur?></td>
					<td><?=$obj->gebruikerstatus?></td>
					<td><?=$obj->lokale_info?></td>
					<td><?=$obj->in_gebruik_van?></td>
					<td><?=$obj->hoofd_deb_code?></td>

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
