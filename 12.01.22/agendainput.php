<?php

$file = "agenda.php"; // file to edit
$html = file_get_contents($file); //read the file contents
$html = htmlentities($html, ENT_QUOTES);

?>

<!doctype html>
<html lang="en">
<head>
	<link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<meta charset="UTF-8">
<title>Edit agenda | LLV</title>
<script>
function encode_content(){
  var content = document.getElementById('file_content').value;
  document.getElementById('file_content').value = encodeURIComponent(content);
}
</script>
</head>
<body>
	<!-- nav -->
	<?php include('includes/nav.php')?>

	<!-- page -->
	<div class="page">
	<form name="edit_form" method="post" action="save_file.php" onsubmit="encode_content()">
 	 <textarea class="form-control" name="file_content" id="file_content" style="width:100%;" rows="20"><?php echo $html; ?></textarea>
 	 <input class="btn-class" type="submit" value="Save activity">
	</form>
	</div>
</body>

<!-- footer -->
<?php include 'includes/pageEnd.php';?>