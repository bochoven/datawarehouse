<?
	$filename = sprintf('Topdesk_%s_%s.csv', $filename, date("Ymd_Hi"));

	header( 'Content-Type: text/csv' );
	header( 'Content-Disposition: attachment;filename='.$filename);

	// filter class that applies CRLF line endings
	class crlf_filter extends php_user_filter
	{
	    function filter($in, $out, &$consumed, $closing)
	    {
	        while ($bucket = stream_bucket_make_writeable($in)) {
	            // make sure the line endings aren't already CRLF
	            $bucket->data = preg_replace("/(?<!\r)\n/", "\r\n", $bucket->data);
	            $consumed += $bucket->datalen;
	            stream_bucket_append($out, $bucket);
	        }
	        return PSFS_PASS_ON;
	    }
	}
	// register the filter
	stream_filter_register('crlf', 'crlf_filter');
	
	$fp = fopen('php://output', 'w');

	// Attach stream filter that converts lf to crlf
	stream_filter_append($fp, 'crlf');

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


