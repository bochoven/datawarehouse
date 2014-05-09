<?$this->view('partials/head')?>

<div class="container">


	<div class="row">

		<?$this->view("widgets/dhcp_vlans_widget")?>
		<?$this->view("widgets/dhcp_multiple_vlans_widget")?>

		

	</div> <!-- /row -->


</div>	<!-- /container -->


<script>
	// Add tooltips
	$(document).ready(function() {
		$('[title]').tooltip();
		update_time();
	});

</script>



<?$this->view('partials/foot')?>
