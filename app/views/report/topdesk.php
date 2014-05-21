<?$this->view('partials/head')?>

<div class="container">

	<div class="row">

		<h1 class="col-lg-12">Dit kost geld</h1>

		<?$this->view("widgets/topdesk_status_nobudget_widget")?>

	</div>

	<div class="row">

		<h1 class="col-lg-12">Info</h1>

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
