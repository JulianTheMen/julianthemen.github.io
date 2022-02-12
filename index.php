<!-- page start -->
<?php 
	session_start();
	$_SESSION['pageName'] = "Home";
	include 'includes/pageStart.php';


	// nav
	include 'includes/nav.php';

	// header
	include 'includes/header.php'; 
?>

	<!-- page -->
	<div class="page">
		<div class="typewriter"><h1>Welkom!</h1></div>
		<p>
			Welkom op de website van de Leerlingvereneging van het Rijnlands Lyceum Sassenheim! <br>
			Wij zijn een gezellige groep die allerlei feesten en evenementen op school organiseren. <br>
			Neem vooral een kijkje bij media om te zien wat wij allemaal doen.</p><br>
			<!-- button to media -->
			<a class="button" href="media.php">Media</a>
			<br><br><br>
			<p>Zou jij de LLV willen joinen?<br>
			Stuur nu jouw motivatie naar ons op!</p><br>
			<a class="button" href="contact.php">Contact</a>
	</div>

<!-- page end -->
<?php include 'includes/pageEnd.php';?>
