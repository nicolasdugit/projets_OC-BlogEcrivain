<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Administration</a></li>
            <li class="active">Modifier/Supprimer</li>
        </ol>

        <div class="row">
            <?php
            while ($post = $posts->fetch())
            {
            $excerpt = substr($post['content'], 0, 1500);
            ?>
            <div class="col-md-12 maincontent">
                <div class="page-header">
                    <h1 class="page-title"><?= ($post['title']) ?></h1>
                    <h5><em>Publié le le <?= $post['creation_date_fr'] ?></em> </h5>
                </div>
                <p>
                    <?= nl2br(($excerpt)), ' [...]' ?>
                    <br>
                </p>
                <a class="btn btn-warning" href="index.php?action=modifPost&amp;id=<?= $post['id'] ?>">Modifier</a>
                <a class="btn btn-danger" href="index.php?action=deletePost&amp;id=<?= $post['id'] ?>">Supprimer</a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>  <!-- /container -->

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>