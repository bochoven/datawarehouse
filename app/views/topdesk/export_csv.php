<?
	$filename = sprintf('Topdesk_%s_%s.csv', $filename, date("Ymd_Hi"));

	header( 'Content-Type: text/csv' );
	header( 'Content-Disposition: attachment;filename='.$filename);
	
	$fp = fopen('php://output', 'w');

	$fixed = new Fixed();

	$stmt = $fixed->prepare( $sql );
	$fixed->execute( $stmt );
	$header = FALSE;
	while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) )
	{
		if(! $header)
		{
			fputcsv($fp, array_keys($row), ';', '"');
			$header = TRUE;
		}
		fputcsv($fp, $row, ';', '"');
	}

	fclose($fp);


