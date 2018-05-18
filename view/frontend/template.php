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
	<?php include('view/frontend/includes/header.php'); ?>
	<!-- /Header -->
	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">JEAN FORTEROCHE REPART EN VOYAGE</h2>
		<p class="text-muted">
			Vous avez aimez les précedentes aventures de votre auteur préféré ?<br> 
			Jean Forteroche publie ici son nouveau livre 'Billet simple pour l'Alaska' sous forme de blog.
		</p>
	</div>
	<!-- /Intro-->
		
	<?= $content ?>

	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">DERNIERS CHAPITRES POSTÉS</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Chapitre 1</h3>
				<p>Curabitur est risus, lobortis a nulla eget, facilisis faucibus odio. Sed sagittis tristique metus vitae hendrerit. Fusce quis tellus turpis. Proin in nisi placerat quam egestas interdum. Vivamus id euismod diam, hendrerit fringilla felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin convallis nisl a eleifend posuere. Ut at tortor quis magna luctus tincidunt eget non est. </p>
			</div>
			<div class="col-sm-6">
				<h3>Chapitre 2</h3>
				<p>Etiam tempor ante nunc, ac rhoncus ipsum ultrices nec. Aenean porta tellus eget nisl malesuada, a pellentesque eros commodo. Donec turpis magna, vehicula ac congue sed, rutrum eu diam. Curabitur at vestibulum tellus, a semper risus. Sed in turpis vehicula, consectetur leo non, vehicula quam.</p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Chapitre 3</h3>
				<p>Nam a aliquam nibh, eu auctor dolor. Morbi odio urna, vulputate id nisl vestibulum, ultricies porttitor lorem. Quisque luctus augue vitae rutrum mollis. Etiam cursus, neque vel auctor venenatis, risus lectus suscipit tellus, sit amet tincidunt erat dolor a nulla. Etiam augue magna, imperdiet in viverra ac, pellentesque nec justo. Suspendisse sed ornare sapien. </p>
			</div>
			<div class="col-sm-6">
				<h3>Chapitre 4</h3>
				<p>In lobortis mi sit amet magna condimentum, non rutrum nunc tincidunt. Suspendisse orci libero, placerat eu nisl nec, volutpat venenatis turpis. In non volutpat mi, sit amet mattis nunc. Ut tristique enim eu leo molestie gravida. Morbi pulvinar dolor nec felis mollis pulvinar. Proin fermentum in dolor id porttitor. </p>
			</div>
		</div> <!-- /row -->


</div>	<!-- /container -->
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