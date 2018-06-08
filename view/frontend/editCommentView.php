<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Blog</li>
        </ol>
        <div class="row">
            <article class="col-md-8 maincontent">
                <header class="page-header">
                    <h1 class="page-title"><?= htmlspecialchars($post['title']) ?></h1>
                    <h5><em>Publié le le <?= htmlspecialchars($post['creation_date_fr']) ?></em> </h5>
                </header>
                <p><?= $post['content'] ?></p>
            </article>
            <aside class="col-md-4 sidebar sidebar-right">
                 <?php 
                if (isset($_SESSION['pseudo'])) 
                {
                ?>
                <h4>Vous allez modifier le commentaire posté par <strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= htmlspecialchars($comment['comment_date_fr']) ?></h4>
                <form action="index.php?action=updateComment&amp;comId=<?= $comment['id'] ?>&amp;postId=<?= $post['id'] ?>" method="post">
                    <div>
                        <label hidden for="author">Nouvel(le) auteur(e)</label><br>
                        <input hidden type="text" id="author" name="author" value="<?= htmlspecialchars($_SESSION['pseudo']) ?>" />
                    </div>
                    <div>
                        <label for="comment">Modifier le commentaire</label><br>
                        <textarea rows="10" cols="45" id="comment" name="comment"><?= htmlspecialchars($comment['comment']) ?></textarea>
                    </div>
                    <div>
                        <input type="submit" />
                    </div>
                </form>
                <?php
                }
                ?>
            </aside>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>