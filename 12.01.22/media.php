<!-- page start -->
<?php 
	session_start();
	$_SESSION['pageName'] = "Media";
	include 'includes/pageStart.php';


	// nav
	include 'includes/nav.php';
?>

	<!-- page -->
	<div class="page">
		<h1>Media</h1>
		<p>
			<!-- Instagram widget -->
			<div id="pixlee_container"></div><script type="text/javascript">window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'N65VE4U9U4THC2WDMjFr'});Pixlee.addSimpleWidget({widgetId:'35187'});};</script><script src="//instafeed.assets.pxlecdn.com/assets/pixlee_widget_1_0_0.js"></script>
		</p>
	</div>

<!-- footer -->
<?php include 'includes/pageEnd.php';?>