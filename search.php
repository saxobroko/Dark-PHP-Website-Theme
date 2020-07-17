<?php
require($_SERVER['DOCUMENT_ROOT'].'/config.php');
$thisPage="Search"; 
?>
<!DOCTYPE html>
<html id="wrapper" lang="en">
<head>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/meta.php')?>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/css.php')?>
<style>.br{position:absolute;bottom:2%;right:6%;}.main{margin-left: 10%;}</style>
</head>
<div class="sec1 bgimg w3-text-white w3-center"> 
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php');?>

<div class="main" id="main">

<header class="w3-center w3-middle" id="home">
<script async src="https://cse.google.com/cse.js?cx=<?php echo $searchid ?>"></script>
<div style="" class="gcse-searchbox"></div>
<div style="" class="gcse-searchresults"></div>
</header>
<div>
<script data-cfasync="false" src="/js/jquery.min.js"></script>
<script defer>		
				
            document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
            
            (function() {
              var cx = <?php echo '"' . $searchid . '"' ?>;
              var gcse = document.createElement('script');
              gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = 'js/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
</script>
	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/tracking.php')?>
	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/includes/cookies.php')?>
 <script src="js/pace.js"></script>
</html>
<!--/sse-->