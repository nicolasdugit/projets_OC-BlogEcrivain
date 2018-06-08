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
                </header>
                <p><?= $post['content'] ?></p>
                <blockquote>
                    <p>Jean Forteroche</p>
                    <p class="small"> Publié le <?= $post['creation_date_fr'] ?> </p>
                </blockquote>
            </article>

            <aside class="col-md-4 sidebar sidebar-right">
                <?php
                while ($comment = $comments->fetch()) 
                {
                ?>
                    <blockquote>
                        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                        <?php 
                        if (isset($_SESSION['pseudo']) && $_SESSION['pseudo'] == $comment['author']) 
                        {
                            ?>
                            <h5><a href="index.php?action=selectComment&amp;comId=<?= $comment['id'] ?>&amp;postId=<?= $post['id'] ?>">modifier</a></h5>
                            <?php
                        }
                        ?>
                        <p class="small"><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
                        <?php
                        if (isset($_SESSION['pseudo'])) 
                            {
                            if ($comment['comment_report'] == false && $comment['comment_verify'] == false) 
                            { 
                            ?>
                            <h5><a href="index.php?action=reportComment&amp;comId=<?= $comment['id'] ?>&amp;postId=<?= $post['id'] ?>">signaler ce commentaire !</a></h5>
                            <?php
                            }
                            elseif ($comment['comment_report'] == true)
                            {
                            ?>
                            <h5 class="bg-danger">Commentaire signalé</h5>
                            <?php
                            }
                        }
                        ?>
                    </blockquote>
                <?php
                }
                if (isset($_SESSION['pseudo'])) 
                {
                ?>
                    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                        <div>                                
                            <label hidden for="author">Auteur</label><br />
                            <input hidden type="text" id="author" name="author" value="<?= htmlspecialchars($_SESSION['pseudo']) ?>" />
                        </div>
                        <div>
                            <label for="comment">Commentaire</label><br />
                            <textarea class="form-control" rows="10" id="comment" name="comment" maxlength="400"></textarea>
                            <br>
                        </div>
                        <div>
                            <button class="btn btn-success" type="submit">Commenter</button>
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