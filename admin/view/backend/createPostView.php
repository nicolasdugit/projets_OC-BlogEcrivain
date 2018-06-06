<?php $title = 'Jean Forteroche - PAGE ADMINISTRATEUR'; ?>

<?php ob_start(); ?>
<h2 class="text-center top-space">Creation nouvel article</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
	
			<form action="index.php?action=publishPost" method="post">
				<div class="form-group">
					<label for="title">Titre du chapitre :</label><br>
					<input class="form-control" type="text" name="title"><br>
					<textarea class="form-control" id="mytextarea" name="content">Hello, World!</textarea>
	            </div>
				<div>
					<button class="btn btn-success" type="submit">Poster</button>
				</div>
			</form>

<h2 class="text-center top-space"><a href="../index.php">Retour a l'accueil</a></h2>
<h2 class="text-center top-space"><a href="index.php">Retour page admin</a></h2>
</div>
</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>