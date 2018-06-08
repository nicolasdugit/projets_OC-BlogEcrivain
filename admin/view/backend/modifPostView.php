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
        	<?php 
        	if ($data = $post) 
        	{
        	?>
            	<form action="index.php?action=updatePost&amp;post_id=<?= $_GET['post_id'] ?>" method="post">
				<div class="form-group">
					<label for="title">Titre du chapitre :</label><br>
					<input class="form-control" type="text" name="newTitle" value="<?= htmlspecialchars($data['title']) ?>"><br>
					<textarea class="form-control" id="mytextarea" name="newContent"><?= htmlspecialchars($data['content']) ?></textarea>
	            </div>
				<div>
					<button class="btn btn-warning" type="submit">Modifier</button>
				</div>
			</form>
			<?php
            }
            ?>
        </div>
    </div>  <!-- /container -->

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>