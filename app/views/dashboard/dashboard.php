<?$this->view('partials/head')?>

<div class="container">

	<?foreach(conf('dashboard_layout', array()) AS $row):?>

	<div class="row">

		<?foreach($row as $item):?>

		<?$this->view("widgets/${item}_widget")?>

		<?endforeach?>

	</div> <!-- /row -->

	<?endforeach?>

	<?$fco = new Fco();?>

	<?foreach($fco->retrieve_many() as $obj):?>

		<?print_r($obj->functieplaats)?>

	<?endforeach?>

</div>	<!-- /container -->


<script>
	// Add tooltips
	$(document).ready(function() {
		$('[title]').tooltip();
	});
</script>



<?$this->view('partials/foot')?>
