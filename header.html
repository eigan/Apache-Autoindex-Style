<?php
	define('BASE_URL', "/autoindex");

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title><?php echo getPath(); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="<?php print BASE_URL ?>/css/reset.css" />
		<link rel="stylesheet" href="<?php print BASE_URL ?>/css/autoindex_simple.css" />
	</head>
	<body>
		<div id="page">
			<div class="pathline"><a href="/"><img src="<?php print BASE_URL ?>/icons/home.png" alt="" /></a> <?php print createFilePath();?></div>
			
			<div id="dirlist">