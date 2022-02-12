<!-- page start -->
<?php 
	session_start();
	$_SESSION['pageName'] = "Contact";
	include 'includes/pageStart.php';


	// nav
	include 'includes/nav.php';
?>

	<!-- page -->
	<div class="page">
		<h1>Contact</h1>
		<p>
			Mail: LLV@rijnlandslyceum-rls.nl
			<br><br>
			Lijkt het je leuk om feesten te organiseren of om mee te denken over de Sintshow?<br> Ben je handig met techniek of wil je dit juist worden? Zit je in de derde klas of hoger? Kom dan bij de LLV of TC!<br>
			Stuur nu jouw motivatie op
			
		</p>
	</div>

<!-- footer -->
<?php include 'includes/pageEnd.php';?>