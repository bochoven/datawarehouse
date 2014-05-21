		<div class="col-sm-6">

			<div class="panel panel-danger">

				<div class="panel-heading">

					<h3 class="panel-title"><i class="fa fa-exclamation-triangle "></i> Data integrity</h3>
				
				</div>

				
				<div class="list-group">


				<?$sql = "SELECT count(1) AS count
							FROM nbd n 
							LEFT JOIN outlet_room o ON (n.port = o.datacom)
							WHERE o.datacom IS NULL
							AND n.port != '-'";
				$dbh = getdbh(); $stmt = $dbh->query($sql);?>
				<?if($obj = $stmt->fetch(PDO::FETCH_OBJ)):?>

				<a href="<?=url('admin/dump_xls/missing_walloutlets_ruimte_tbl')?>" title="Exporteer als .xls bestand" class="list-group-item">NBD Ports not in FCO table: <span class="badge"><?=$obj->count?></span></a>

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

				<a href="<?=url('admin/dump_xls/duplicate_walloutlets')?>" title="Exporteer als .xls bestand" class="list-group-item">Duplicate outlets in outlet_room: <span class="badge"><?=$obj->count?></span></a>

				<?endif?>

				</div>


			</div><!-- /panel -->

		</div><!-- /col-sm-6 -->

