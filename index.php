<?php 
require($_SERVER['DOCUMENT_ROOT'].'/config.php');
$thisPage=$page1; 
?>
<!DOCTYPE html>
<html id="wrapper" lang="en">
<head>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/meta.php');?>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/css.php')?>
</head>
<div class="sec1 bgimg w3-text-white w3-center"> 
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php');?>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/engine.php');?>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/search.php');?>

<div class="" id="main">

<header class="glow w3-display-middle" id="home">
	<h1>Welcome.</h1>
	<h5>This is the preview.</h5>
</header>

	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/tracking.php')?>
	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/cookies.php')?>
<script src="/js/pace.js"></script>
</html>