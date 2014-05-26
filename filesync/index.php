<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>FileSync log parser</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="../assets/css/dataTables-bootstrap.css" />
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">

	<script src="../assets/js/jquery.js"></script>


</head>

<body>

<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="">FileSync Log Parser</a>
		</div>
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			<ul class="nav navbar-nav">


			</ul>
		</nav>
	</div>
</header>

<div class="container">
			<div class="row">

				<div class = "col-lg-12">

										<form id="uploadForm" class="well" action="" enctype="multipart/form-data"  method="post" accept-charset="utf-8">

						<p><b>Upload Log File</b></p>
						<p><input type="file" name="file"></p>

						<p class="uploadbutton"><button class="btn btn-primary" type="submit"><i class="icon-upload-alt"></i> Upload</button></p>

					</form>      


				</div>
			</div><!--/row-->

		<?if($_FILES):?>

			<?if( ! isset($_FILES['file']) OR $_FILES['file']['error'] != 0):?>

			Error: <?=$_FILES['file']['error']?>

			<?else:?>

			<?
			function logline($handle, &$matches)
			{
				if(($data = fgets($handle)) !== FALSE)
				{
					// REmove cr line endings
					if ($cr = stripos($data, "\x0D"))
					{
						$data = substr($data, 0, $cr);
					}
					preg_match("%^(<.+>)? ?(\d+::) \[(\d{2}\/\d{2}\/\d{2} \d{2}:\d{2}:\d{2}\.\d{3})\](.*)$%", $data, $matches);
					return TRUE;
				}
				
				return FALSE;
			}
			?>

				<?//Read first line to detect filetype
				ini_set("auto_detect_line_endings", true);

				if (($handle = fopen($_FILES['file']['tmp_name'], "r")) === FALSE)
				{
					throw new Exception("Cannot read ".$_FILES['file']['tmp_name'], 1);
				}?>

				<div class="row">

					<div class = "col-lg-12">

						<pre>
				<?
				$cnt = 0;
				$block  = '';
				$kind = '';
				$block_array = array(
					'Network Home Unreachable' => array(
						'Peer "network" is unable to sync'),
					'Network Delete: %d items' => array(
						'<OK>  network: DELETE'),
					'Local Delete : %d items' => array(
						'<OK>    local: DELETE'),
					'local_hoard' => array(
						'local: HOARD'),
					'Network modify : %d items' => array(
						'network: MODIFY', 'network: PACKAGE MODIFY'),
					'Local modify : %d items' => array(
						'local: MODIFY'),
					'Local add: %d items' => array(
						'<OK>    local: ADD', '...<OK>      : ADD'),
					'Cancel Job' => array(
						'CANCEL: JOB:'),
					'Network Update Versions : %d items' => array(
						'network: UPDATE VERSIONS'),
					'Network Add : %d items' => array(
						'network: ADD', 'network: PACKAGE ADD'),
					'Network Update Versions : %d items' => array(
						'network: UPDATE VERSIONS'),
					'======= Sync Run =======' => array(
						'Sync jobs for peer network'),
					'------- Start Prepare for Sync' => array(
						'Store "PHD-R-ia0Offj62l5-mtr200" started prepareForSync'),
					'------- Finished Prepare for Sync' => array(
						'Store "PHD-R-ia0Offj62l5-mtr200" finished prepareForSync')
					);
				$skipthese = array(
					'<GO>  network:',
					'EXCEPTION: Object deleted',
					'-[SStoreFileOperator_FS delete]');

				while (logline($handle, $matches))
				{
					// Prefix
					$prefix = trim(htmlspecialchars($matches[1]));

					// Process
					$process = $matches[2];

					// Skip Agent log lines
					if($process == '0::') continue;

					// Logdate
					$logdate = substr($matches[3], 0, -7);

					// Log string
					$logstr = trim($matches[4]);

					// Skip non informative lines defined in skipthese
					$skip = FALSE;
					foreach($skipthese AS $str)
						{
							if(strpos($logstr, $str) === 0)
							{
								$skip = TRUE;
								break;
							}
						}
					if($skip)
					{
						continue;
					}
					
					if($kind != $prefix)
					{
						if($prefix)
						{
							echo "****** $logdate $prefix ******\n";
						}
						//print_r($matches);
						$kind = $prefix;
					}

					if( array_key_exists($block, $block_array))
					{
						$found = FALSE;
						foreach($block_array[$block] AS $pos => $str)
						{
							if(strpos($logstr, $str) === 0)
							{
								$cnt += 1;
								$found = TRUE;
							}
						}
						if(! $found) // Reset block
						{
									$block = sprintf($block, $cnt);
									printf("%s %s\n", $logdate, $block);
									$block = '';
									$cnt = 0;
						}
					}
					
					// No block found, search for a new block
					if( ! $block)
					{
						foreach($block_array AS $key => $string_arr)
						{
							foreach($string_arr AS $pos => $str)
							{
								if(strpos($logstr, $str) === 0)
								{
									$cnt += $pos ? 0 : 1;
									$block = $key;
								}
							}
						}
					}
					
				}
				?>

					</pre>

					</div>

					

				</div>

			<?endif?>

		<?endif?>


</body>
</html>