		<div class="col-sm-6">

			<div class="panel panel-default">

				<div class="panel-heading">

					<h3 class="panel-title"><i class="fa fa-clock-o"></i> DHCP vlans</h3>
				
				</div>

				<div class="list-group scroll-box">
					

					<?$sql = "SELECT vlan, COUNT(1) as count
								FROM dhcp GROUP BY vlan
								ORDER BY count DESC";
					$dhcp = new Dhcp();?>
					<?foreach($dhcp->query($sql) as $obj):?>

					<a href="<?=url('show/listing/dhcp/#'.$obj->vlan)?>" class="list-group-item">
						<?=$obj->vlan?$obj->vlan:'-'?>
						<span class="badge"><?=$obj->count?></span>
					</a>

					<?endforeach?>

				</div>

			</div><!-- /panel -->

		</div><!-- /col-sm-6 -->
