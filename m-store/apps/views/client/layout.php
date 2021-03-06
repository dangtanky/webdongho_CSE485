<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>M-Store</title>
	<base href="<?=$url; ?>" />
	<link rel="stylesheet" href="<?=$url ?>/apps/public/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Trirong|Open+Sans" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="<?=$url ?>/apps/public/js/jquery.zoom.min.js"></script>
	<script src="<?=$url ?>/apps/public/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?=$url ?>/apps/public/js/main.js"></script>
	<script type="text/javascript" src="<?=$url ?>/apps/public/js/client.js"></script>
	<script type="text/javascript" src="<?=$url ?>/apps/public/js/jquery.priceformat.min.js"></script>
</head>
<body>
	<?php 
		require_once('header.php');
		require_once ('routes.php');
		require_once('footer.php');
	?>
</body>
</html>