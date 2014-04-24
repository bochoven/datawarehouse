<?
	$filename = sprintf('Topdesk_fixed_%s.csv', date("Ymd_Hi"));

	header( 'Content-Type: text/csv' );
	header( 'Content-Disposition: attachment;filename='.$filename);
	
	$fp = fopen('php://output', 'w');

	$fixed = new Fixed();
	$sql = 
	"SELECT naam AS ObjectID, ref_soort AS Soort, ref_merk AS Merk,
	 objecttype AS Type, specificatie AS Specificatie, 
	 serienummer AS Serienummer, serienummer AS Serial, 
	 ref_finbudgethouder AS Klant_gebruik, ref_leverancier AS Leverancier,
	 aanschafdatum AS Aanschafdatum, 
	 garantiedatum AS Garantie_tot, 
	 aankoopbedrag AS Aankoopbedrag, 
	 afschrijftermijn AS Afschrijftermijn, 
	 ref_vestiging AS Gebouw, ref_lokatie AS Kamer, statusid_naam AS Status, 
	 onderhoudsoortid_tekst AS Soort_onderhoud, 
	 onderhoudtot AS Onderhoud_tot, 
	 attentieid_naam AS Attentie_soort, opmerking AS Attentie_opmerking, 
	 hostnaam AS Hostname, ipadres AS IP_adres, macadres AS MAC_adres, 
	 macadres AS MAC, vrijeopzoek1_naam AS Eigenaar, 
	 vrijeopzoek2_naam AS Kostenplaats, vrijetekst1 AS Wall_Outlet, 
	 persoonid_loginnaamnetwerk AS Persoon, persoonid_naam AS Persoon_afdeling, 
	 datwijzig AS Datum_wijziging, uidwijzig_naam AS Wijziger_kaart, 
	 dataanmk AS Datum_aanmaak, uidaanmk_naam AS Aanmaker_kaart 
	 FROM fixed";

	$stmt = $fixed->prepare( $sql );
	$fixed->execute( $stmt );
	while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) )
	{
		fputcsv($fp, $row, ';', '"');
	}

	fclose($fp);


