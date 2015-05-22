		<div class="col-sm-6">

			<div class="panel panel-default">

				<div class="panel-heading">

					<h3 class="panel-title"><i class="fa fa-clock-o"></i> Topdesk objecten/orgeen</h3>
				
				</div>

				<ul class="list-group scroll-box">
					

					<?$sql = "SELECT budgethouderid_naam, COUNT(*) AS count
								FROM topdesk
								GROUP BY budgethouderid_naam
								ORDER BY count DESC";
					$topdesk = new Topdesk();?>
					<?foreach($topdesk->query($sql) as $obj):?>

					<li class="list-group-item"><?=$obj->budgethouderid_naam?> <span class="badge"><?=$obj->count?></span></li>

					<?endforeach?>

				</ul>

			</div><!-- /panel -->

		</div><!-- /col-sm-6 -->
