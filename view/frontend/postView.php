<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Accuel</a></li>
            <li class="active">Blog</li>
        </ol>

        <div class="row">

            <article class="col-md-8 maincontent">
                <header class="page-header">
                    <h1 class="page-title"><?= htmlspecialchars($post['title']) ?></h1>
                                 <h5><em>Publié le le <?= $post['creation_date_fr'] ?></em> </h5>
                </header>
                                <p>
                                    <?= nl2br(htmlspecialchars($post['content'])) ?>
                                    <br />
                                </p>
            </article>

            <aside class="col-md-4 sidebar sidebar-right">
                <?php
                while ($comment = $comments->fetch()) 
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?> 

    <?php 
    if (isset($_SESSION['pseudo'])) {
        ?>
            (<a href="index.php?action=selectComment&amp;comId=<?= $comment['id'] ?>&amp;postId=<?= $post['id'] ?>">modifier</a>)</p>
        <?php
    }
    ?>

    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
<?php
}

                    if (isset($_SESSION['pseudo'])) {
                ?>
            <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                <div>
                    <label for="author">Auteur</label><br />
                    <input type="text" id="author" name="author" />
                </div>
                <div>
                    <label for="comment">Commentaire</label><br />
                    <textarea id="comment" name="comment"></textarea>
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