<?php 
session_start();
if($_GET['la']){
	$_SESSION['la'] = $_GET['la'];
	header('Location:'.$_SERVER['PHP_SELF']);
	exit();
}

switch($_SESSION['la']){
 	case "eng":
		require('lang/eng.php');		
	break;
	case "ar":
		require('lang/ar.php');
	break;
	default:
		require('lang/eng.php');		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $lang['index-title'];?></title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="langSelect">
		<a href="index.php?la=eng"><img src="flags/eng.png" alt="<?=$lang['lang-eng'];?>" title="<?=$lang['lang-eng'];?>" /></a> 
		<a href="index.php?la=ar"><img src="flags/ar.png" alt="<?=$lang['lang-ar'];?>" title="<?=$lang['lang-ar'];?>" /></a>
	</div>	
	<div id="cont">
		<p><?=$lang['index-welcome'];?></p>
		<p><?=$lang['index-text-1'];?></p>
		
	</div>
</div>
</body>
</html>