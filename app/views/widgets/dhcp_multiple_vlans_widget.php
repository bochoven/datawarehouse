		<div class="col-sm-6">

			<div class="panel panel-default">

				<div class="panel-heading">

					<h3 class="panel-title"><i class="fa fa-clock-o"></i> Hosts with multiple vlans</h3>
				
				</div>

				<div class="list-group scroll-box">
					

					<?$sql = "SELECT host, COUNT(1) as count
								FROM dhcp 
								GROUP BY host
								HAVING count > 1
								ORDER BY host DESC";
					$dhcp = new Dhcp();?>
					<?foreach($dhcp->query($sql) as $obj):?>

					<a href="<?=url('show/listing/dhcp/#'.$obj->host)?>" class="list-group-item">
						<?=$obj->host?$obj->host:'-'?>
						<span class="badge"><?=$obj->count?></span>
					</a>

					<?endforeach?>

				</div>

			</div><!-- /panel -->

		</div><!-- /col-sm-6 -->
