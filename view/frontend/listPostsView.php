<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Tous les chapitres</li>
        </ol>

        <div class="row">
            <?php
            while ($post = $posts->fetch())
            {
            $excerpt = substr(($post['content']), 0, 1000);
            ?>
            <div class="col-md-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title"><a href="index.php?action=post&amp;id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a></h1>
                </header>
                    <div><?= $excerpt, ' [...]' ?></div>
                    <h6><a href="index.php?action=post&amp;id=<?= $post['id'] ?>">Lire la suite</a></h6>
                <blockquote>
                    <p>Jean Forteroche</p>
                    <p class="small"> Publié le <?= $post['creation_date_fr'] ?> </p>
                </blockquote>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>