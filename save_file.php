<?php

$file_content = urldecode($_POST['file_content']);
file_put_contents('agenda.php', html_entity_decode($file_content)); //save the file

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit agenda | LLV</title>
	<link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<link rel="icon" href="">
</head>
<body>
	<!-- nav -->
	<?php include 'includes/nav.php'; ?>

	<!-- page -->
	<div class="page">
		<a href="admin.php">Back to adminpanel</a>
	</div>
</body>

<!-- footer -->
<?php include 'includes/pageEnd.php';?>