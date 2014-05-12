<?$this->view('partials/head')?>

<div class="container">


	<div class="row">

		<?$this->view("widgets/topdesk_soort_widget")?>
		<?$this->view("widgets/topdesk_status_widget")?>
		<?$this->view("widgets/topdesk_budget_widget")?>

		

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
