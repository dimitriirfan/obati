<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo base_url("./obati.ico")?>">

	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url("./assets/css/bootstrap/bootstrap.min.css") ?>">
	</link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- style -->
	<link rel="stylesheet" href="<?php echo base_url("./assets/css/$title.css")?>">

	<?php if ($title != "register" && $title != "login") :?>
	<link rel="stylesheet" href="<?php echo base_url("./assets/css/navbar.css")?>">
	<?php endif?>

	<?php if ($title == 'article') : ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ("./assets/css/article/owl.carousel.css") ?>"
		rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ("./assets/css/article/owl.theme.default.css") ?>"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ("./assets/css/article/media_query.css") ?>"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ("./assets/css/article/animate.css") ?>"
		rel="stylesheet" type="text/css" />

	<?php endif?>

	<title>Obati | <?= $title?></title>
