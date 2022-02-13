<!-- page start -->
<?php
	session_start();
	$_SESSION['pageName'] = "Home";
	include 'includes/pageStart.php';
?>

	<!-- navigator -->
	<?php include 'includes/nav.php' ?>

	<!-- header -->
	<?php include 'includes/header.php'; ?>

	<!-- page -->
	<div class="page">
		<h1>Lorem ipsum</h1>
		<p>
			<!-- text -->
			 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut metus magna. Aenean in massa tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis ut augue sit amet purus egestas lacinia ornare in ante. Donec feugiat in neque et vestibulum. Nam vitae pharetra orci, at dignissim lacus. Curabitur sollicitudin diam et malesuada fermentum.
		</p><br>

	</div>

<!-- page end -->
<?php include 'includes/pageEnd.php';?>