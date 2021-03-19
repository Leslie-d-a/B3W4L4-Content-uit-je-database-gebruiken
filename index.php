<?php 
	include 'connect.php';
	$stmnt = "SELECT * FROM onderwerpen";
	$stmnt = $con->prepare($stmnt);
	$stmnt->execute();
	$result = $stmnt->fetchAll();
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 4 - Dynamische content</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<div id='wrapper'>
		<?php include 'includes/header.php';?>

		<section class='content'>
			<h1><?php echo $result[$_GET['pageId']]['name'];?></h1>
			<img src="images/<?php echo $result[$_GET['pageId']]['image'];?>.jpg" alt="">
			<p><?php echo $result[$_GET['pageId']]['description'];?></p>
		</section>

		<?php include 'includes/footer.php';?>
	</div>
</body>
</html>