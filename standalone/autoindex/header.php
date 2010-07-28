<?php
	define('BASE_URL', dirname($_SERVER["SCRIPT_NAME"]));
		
	function getPath() {
    	return dirname($_SERVER["REQUEST_URI"] . '/.');
	}
	
	function createFilePath() {
		$dir = getPath();
		$result = $current = "";
		$folders = explode('/', $dir);
				
		foreach($folders as $folder) {
			if($folder != "" && $folder[0] != "?") {
				$result .= '<a href="'.str_replace(' ', '+', $current.'/'.$folder).'">/' . str_replace('%20', ' ', $folder) . '</a>';
				$current .= '/' . $folder;
			}
		}
			
		return $result;
	}	
?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
	<head>
		<title><?php echo getPath(); ?></title>
		<link rel="stylesheet" href="<?php print BASE_URL ?>/reset.css" />
		<link rel="stylesheet" href="<?php print BASE_URL ?>/main.css" />
	</head>
	<body>
		<div id="page">
			<div class="pathline"><a href="/"><img src="<?php print BASE_URL ?>/icons/home.png"></a> <?php print createFilePath();?></div>
			
			<div id="dirlist">
