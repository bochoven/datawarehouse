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
		
<div class="col-sm-6">

	<div class="panel panel-default">

		<div class="panel-heading">

			<h3 class="panel-title"><i class="fa fa-clock-o"></i> Data age</h3>
		
		</div>

		<div class="panel-body">
			
			<table class="table">

			<?foreach(array('fco', 'nbd', 'outlet_room') AS $tbl):?>

			<?$sql = "SELECT '$tbl' AS tbl, MAX(timestamp) as timestamp FROM $tbl";
			$dbh = getdbh(); $stmt = $dbh->query($sql);?>
			<?if($obj = $stmt->fetch(PDO::FETCH_OBJ)):?>

			<tr>
				<td><?=$obj->tbl?></td><td><time datetime="<?=$obj->timestamp?>">...</time></td>
			</tr>

			<?endif?>

			<?endforeach?>
			</table>
		</div>

	</div><!-- /panel -->

</div><!-- /col-lg-4 -->		
		<div class="col-lg-12">
			
			
		</div>
		
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
