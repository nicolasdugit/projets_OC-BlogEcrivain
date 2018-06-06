<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Blog</li>
        </ol>

        <div class="row">

            <?php
            while ($lastPost = $posts->fetch())
            {
            $excerpt = substr($lastPost['content'], 0, 1500);
            ?>
            <div class="col-md-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title"><?= htmlspecialchars($lastPost['title']) ?></h1>
                                 <h5><em>Publié le le <?= $lastPost['creation_date_fr'] ?></em> </h5>
                </header>
                                <p>
                                    <?= nl2br(htmlspecialchars($excerpt)), ' [...]' ?>
                                    <br />
                                </p>
                                <a class="btn btn-warning" href="index.php?action=updatePost&amp;id=<?= $post['id'] ?>">Modifier</a>
                                <a class="btn btn-danger" href="index.php?action=deletePost&amp;id=<?= $post['id'] ?>">Supprimer</a>
            </div>
            <?php
            }
            ?>

        </div>
    </div>  <!-- /container -->

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>