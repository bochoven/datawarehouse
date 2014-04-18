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

				<ul class="list-group">
					
					<?foreach(array('fco', 'nbd', 'outlet_room') AS $tbl):?>

					<?$sql = "SELECT '$tbl' AS tbl, MAX(timestamp) as timestamp FROM $tbl";
					$dbh = getdbh(); $stmt = $dbh->query($sql);?>
					<?if($obj = $stmt->fetch(PDO::FETCH_OBJ)):?>

					<li class="list-group-item"><?=$obj->tbl?> <span class="pull-right"><time datetime="<?=$obj->timestamp?>">...</time></span></li>

					<?endif?>

					<?endforeach?>

				</ul>

			</div><!-- /panel -->

		</div><!-- /col-sm-6 -->

		<div class="col-sm-6">

			<div class="panel panel-default">

				<div class="panel-heading">

					<h3 class="panel-title"><i class="fa fa-clock-o"></i> Data integrity</h3>
				
				</div>

				
				<ul class="list-group">


				<?$sql = "SELECT count(1) AS count
							FROM nbd n 
							LEFT JOIN outlet_room o ON (n.port = o.datacom)
							WHERE o.datacom IS NULL";
				$dbh = getdbh(); $stmt = $dbh->query($sql);?>
				<?if($obj = $stmt->fetch(PDO::FETCH_OBJ)):?>

				<li class="list-group-item">NBD Ports not in FCO table: <span class="badge"><?=$obj->count?></span></li>

				<?endif?>

				<?$sql = "SELECT COUNT(*) AS count
							 FROM (
								SELECT datacom, COUNT(*) AS count
								FROM outlet_room o
								GROUP BY datacom
								HAVING count > 1
							)  AS T2";
				$dbh = getdbh(); $stmt = $dbh->query($sql);?>
				<?if($obj = $stmt->fetch(PDO::FETCH_OBJ)):?>

				<li class="list-group-item">Duplicate outlets in outlet_room: <span class="badge"><?=$obj->count?></span></li>

				<?endif?>

				</ul>


			</div><!-- /panel -->

		</div><!-- /col-sm-6 -->

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
