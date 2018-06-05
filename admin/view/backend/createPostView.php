<?php $title = 'Jean Forteroche - PAGE ADMINISTRATEUR'; ?>

<?php ob_start(); ?>
<h2 class="text-center top-space">Creation nouvel article</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <p>test</p>
	
			<form action="index.php?action=publishPost" method="post">
				<label for="title">Titre du chapitre</label><br>
				<input type="text" name="title"><br>
				<textarea id="mytextarea" name="content">Hello, World!</textarea>
				<div>
                    <button class="btn btn-danger" type="submit">Poster</button>
                </div>
			</form>

<h2 class="text-center top-space"><a href="../index.php">Retour a l'accueil</a></h2>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>