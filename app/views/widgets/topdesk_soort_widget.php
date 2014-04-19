		<div class="col-sm-6">

			<div class="panel panel-default">

				<div class="panel-heading">

					<h3 class="panel-title"><i class="fa fa-clock-o"></i> Topdesk soort objecten</h3>
				
				</div>

				<ul class="list-group scroll-box">
					

					<?$sql = "SELECT ref_soort, COUNT(*) AS count
								FROM topdesk
								GROUP BY ref_soort
								ORDER BY count DESC";
					$topdesk = new Topdesk();?>
					<?foreach($topdesk->query($sql) as $obj):?>

					<li class="list-group-item">
						<?=$obj->ref_soort?$obj->ref_soort:'LEEG VELD'?>
						<span class="badge"><?=$obj->count?></span>
					</li>

					<?endforeach?>

				</ul>

			</div><!-- /panel -->

		</div><!-- /col-sm-6 -->
