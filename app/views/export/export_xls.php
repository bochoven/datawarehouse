<?
	$filename = sprintf('%s_Topdesk_%s.xls', date("Ymd_Hi"), $filename);

	$fixed = new Fixed();

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
