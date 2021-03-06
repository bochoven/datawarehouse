<?
	$filename = sprintf('%s_%s.csv', date("Ymd_Hi"), $filename);

	header( 'Content-Type: text/csv' );
	header( 'Content-Disposition: attachment;filename='.$filename);

	$fp = fopen('php://output', 'w');

	$fixed = new Fixed();

	// No quoting allowed around values, so a simple implode
	// will be enough

	$stmt = $fixed->prepare( $sql );
	$fixed->execute( $stmt );
	$header = FALSE;
	while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) )
	{
		if(! $header)
		{
			fwrite($fp, implode(';', array_keys($row))."\r\n");
			$header = TRUE;
		}
		fwrite($fp, implode(';', str_replace(';', ',', $row))."\r\n");
	}

	fclose($fp);
