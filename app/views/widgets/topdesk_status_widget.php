		<div class="col-sm-6">

			<div class="panel panel-default">

				<div class="panel-heading">

					<h3 class="panel-title"><i class="fa fa-clock-o"></i> Topdesk status</h3>
				
				</div>

				<div class="list-group scroll-box">
					

					<?$sql = "SELECT statusid_naam, COUNT(*) AS count
								FROM topdesk
								GROUP BY statusid_naam
								ORDER BY count DESC";
					$topdesk = new Topdesk();?>
					<?foreach($topdesk->query($sql) as $obj):?>

					<a href="<?=url('show/listing/topdesk/#'.$obj->statusid_naam)?>" class="list-group-item">
						<?=$obj->statusid_naam?$obj->statusid_naam:'-'?>
						<span class="badge"><?=$obj->count?></span>
					</a>

					<?endforeach?>

				</div>

			</div><!-- /panel -->

		</div><!-- /col-sm-6 -->
