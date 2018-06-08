<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog de Jean Forteroche. L'auteur vous livre ici son dernier roman sous forme de blog où il publie semaine apres semaine ses derniers chapitres">
	<meta name="author"      content="Jean forteroche (www.blog-ecrivain.nicolasduquesne.com)">
	
	<title><?= $title ?></title>

	<!-- <link rel="shortcut icon" href="public/images/gt_favicon.png"> -->
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="public/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="public/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="public/js/html5shiv.js"></script>
	<script src="public/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<?php include('view/frontend/includes/navbar.php'); ?>
	<!-- /.navbar -->
	<!-- Header -->
	<?php
	if (!isset($_GET['action'])) {
		include('view/frontend/includes/header.php');
	} 
	else {
		include('view/frontend/includes/headerSecondary.php');
	}
	?>
	<!-- /Header -->
	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">JEAN FORTEROCHE REPART EN VOYAGE</h2>
		<p class="text-muted">
			Vous avez aimé les précedentes aventures de votre auteur préféré ?<br> 
			Jean Forteroche publie ici son nouveau livre 'Billet simple pour l'Alaska' sous forme de blog.
		</p>
	</div>
	<!-- /Intro-->
	<!-- container -->
	<div>
		<?= $content ?>
	</div>	
	<!-- /container -->
	<!-- Footer -->
	<footer id="footer" class="top-space">
		<?php include('view/frontend/includes/footer1.php') ;?>
		<?php include('view/frontend/includes/footer2.php') ;?>
	</footer>	
	<!-- /Footer -->	

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="public/js/headroom.min.js"></script>
	<script src="public/js/jQuery.headroom.min.js"></script>
	<script src="public/js/template.js"></script>
</body>
</html>