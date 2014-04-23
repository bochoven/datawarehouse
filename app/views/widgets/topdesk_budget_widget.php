		<div class="col-sm-6">

			<div class="panel panel-default">

				<div class="panel-heading">

					<h3 class="panel-title"><i class="fa fa-clock-o"></i> Topdesk objecten/orgeen</h3>
				
				</div>

				<ul class="list-group scroll-box">
					

					<?$sql = "SELECT ref_finbudgethouder, COUNT(*) AS count
								FROM topdesk
								GROUP BY ref_finbudgethouder
								ORDER BY count DESC";
					$topdesk = new Topdesk();?>
					<?foreach($topdesk->query($sql) as $obj):?>

					<li class="list-group-item"><?=$obj->ref_finbudgethouder?> <span class="badge"><?=$obj->count?></span></li>

					<?endforeach?>

				</ul>

			</div><!-- /panel -->

		</div><!-- /col-sm-6 -->