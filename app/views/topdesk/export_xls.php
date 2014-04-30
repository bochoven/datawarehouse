<?
	$filename = sprintf('Topdesk_fixed_%s.xls', date("Ymd_Hi"));	

	$fixed = new Fixed();
	$sql = 
	"SELECT naam,
		persoonid_loginnaamnetwerk AS koppelid5,
		hostnaam,
		ref_finbudgethouder AS budgethouderid,
		ref_soort AS soortid, ref_merk AS merkid,
		objecttype AS objecttype, specificatie, 
		serienummer, macadres,
		'' AS aanspreekpuntid, '' AS ordernummer,
		ref_leverancier AS leverancierid,
		aanschafdatum, statusid_naam AS statusid,
		attentieid_naam AS 'Type attentie',
		opmerking AS 'Opmerking bij attentie',
		vrijetekst1 AS 'Wall outlet',
		vrijeopzoek1_naam AS Eigenaar,
		vrijeopzoek2_naam AS Kostenplaats,
		'' AS 'netwerkslot 1',
		'' AS 'netwerkslot 2',
		'' AS 'netwerkslot 3',
		'' AS 'vrijegetal1',
		'' AS 'vrijegetal2',
		'' AS 'vrijegetal3',
		'' AS 'vrijedatum1',
		'' AS 'vrijedatum2',
		'' AS 'vrijedatum3',
		'' AS 'heeft attentie?',
		'' AS 'vrijelogisch2',
		'' AS 'vrijelogisch3',
		'' AS 'vrijememo1',
		'' AS 'Geheugen',
		'' AS 'Besturingssysteem'
		FROM fixed";

	require_once conf('application_path') . 'lib/PHPExcel/PHPExcel.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	// Get sheet
	$sheet = $objPHPExcel->getActiveSheet();

	$stmt = $fixed->prepare( $sql );
	$fixed->execute( $stmt );
	$header = FALSE;
	$tablerow = 1; // 1-based index
	while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) )
	{
	    $tablecol = 0;
		if(! $header)
		{
			foreach(array_keys($row) AS $value)
			{
				$sheet->setCellValueByColumnAndRow($tablecol, $tablerow, $value);
				$tablecol++;
			}
			$tablerow++;
			$tablecol = 0;
			$header = TRUE;
		}
		foreach($row AS $value)
		{
			$sheet->setCellValueExplicitByColumnAndRow($tablecol, $tablerow, $value, PHPExcel_Cell_DataType::TYPE_STRING);
			$tablecol++;
		}
		$tablerow++;
	}

	// Write to output 
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="'.$filename.'"');
	header('Cache-Control: max-age=0');
	// If you're serving to IE 9, then the following may be needed
	header('Cache-Control: max-age=1');

	// If you're serving to IE over SSL, then the following may be needed
	header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	header ('Pragma: public'); // HTTP/1.0

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');



