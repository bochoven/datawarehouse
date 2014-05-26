<?$this->view('partials/head')?>

<div class="container">

	<?$topdesk = new Topdesk;
	switch($identifier)
	{
		case 'topdesk_id':
			$where = 'naam=?';
			break;

		default:
			$where = 'naam=?';
	}
	?>

	

	<div class="row">

		<h1 class="col-lg-12">Hardware info for <?=$value?></h1>

		<div class="col-sm-6">

			<h2>TOPdesk</h2>

			<?if($topdesk->retrieve_one($where, $value)):?>

			<pre><?print_r($topdesk->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6">

			<h2>AD</h2>

			<?$ad = new AD_computer()?>

			<?if($ad->retrieve_one('name=?', $topdesk->hostnaam)):?>

			<pre><?print_r($ad->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6">

			<h2>DHCP</h2>

			<?$dhcp = new Dhcp()?>

			<?if($dhcp->retrieve_one('mac=?', $topdesk->macadres)):?>

			<pre><?print_r($dhcp->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6">

			<h2>DHCP log</h2>

			<?$dhcp = new Dhcp_log()?>

			<?if($dhcp->retrieve_one('mac=?', $topdesk->macadres)):?>

			<pre><?print_r($dhcp->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6">

			<h2>FCO</h2>

			<?$fco = new Fco()?>

			<?if($fco->retrieve_one('functieplaats=?', $topdesk->ref_lokatie)):?>

			<pre><?print_r($fco->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6">

			<h2>Network</h2>

			<?$nbd = new Nbd()?>

			<?if($nbd->retrieve_one('mac_address=?', $topdesk->macadres)):?>

			<pre><?print_r($nbd->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6">

			<h2>Orgeen</h2>

			<?$orgeen = new Orgeen()?>

			<?if($orgeen->retrieve_one('org_code=?', $topdesk->vrijeopzoek2_naam)):?>

			<pre><?print_r($orgeen->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6">

			<h2>Outlet</h2>

			<?$outlet_room = new Outlet_room()?>

			<?if($outlet_room->retrieve_one('datacom=?', $topdesk->vrijetekst1)):?>

			<pre><?print_r($outlet_room->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6">

			<h2>Prijs</h2>

			<?$prijs = new Prijs()?>

			<?if($prijs->retrieve_one('soort=?', $topdesk->ref_soort)):?>

			<pre><?print_r($prijs->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6">

			<h2>Ruimte correctie</h2>

			<?$ruimte_correctie = new Ruimte_correctie()?>

			<?if($ruimte_correctie->retrieve_one('ruimte_special=?', $topdesk->ref_lokatie)):?>

			<pre><?print_r($ruimte_correctie->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		<div class="col-sm-6">

			<h2>Gebruiker</h2>

			<?$users = new Users()?>

			<?if($users->retrieve_one('uid=?', $topdesk->persoonid_loginnaamnetwerk)):?>

			<pre><?print_r($users->rs)?></pre>

			<?else:?>

			No data

			<?endif?>

		</div> <!-- /col-sm-6 -->

		

	</div> <!-- /row -->

	


</div>	<!-- /container -->



<?$this->view('partials/foot')?>
