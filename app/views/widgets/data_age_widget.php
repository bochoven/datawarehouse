		<div class="col-sm-6">

			<div class="panel panel-default">

				<div class="panel-heading">

					<h3 class="panel-title"><i class="fa fa-clock-o"></i> Data age</h3>
				
				</div>

				<ul class="list-group">
					
					<?foreach(array('fco', 'nbd', 'outlet_room', 'topdesk') AS $tbl):?>

					<?new $tbl?>

					<?$sql = "SELECT '$tbl' AS tbl, MAX(timestamp) as timestamp FROM $tbl";
					$dbh = getdbh(); $stmt = $dbh->query($sql);?>
					<?if($obj = $stmt->fetch(PDO::FETCH_OBJ)):?>

					<li class="list-group-item"><?=$obj->tbl?> <span class="pull-right"><time datetime="<?=$obj->timestamp?>">...</time></span></li>

					<?endif?>

					<?endforeach?>

				</ul>

			</div><!-- /panel -->

		</div><!-- /col-sm-6 -->
