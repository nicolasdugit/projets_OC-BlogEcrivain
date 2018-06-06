<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Administration</a></li>
            <li><a href="index.php?action=listPost">Modifier/Supprimer</a></li>
            <li class="active">Modifier</li>
        </ol>

        <div class="row">
            	<form action="index.php?action=publishPost" method="post">
				<div class="form-group">
					<label for="title">Titre du chapitre :</label><br>
					<input class="form-control" type="text" name="title" value="<?= $_GET['id'] ?>"><br>
					<textarea class="form-control" id="mytextarea" name="content">Hello, World!</textarea>
	            </div>
				<div>
					<button class="btn btn-success" type="submit">Poster</button>
				</div>
			</form>
        </div>
    </div>  <!-- /container -->

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>