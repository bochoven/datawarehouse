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
