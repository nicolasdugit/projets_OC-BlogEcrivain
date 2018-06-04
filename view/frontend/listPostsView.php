<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Blog</li>
        </ol>

        <div class="row">
            <!-- Article main content -->
            <?php
            if ($lastPost = $posts->fetch())
            {
            $excerpt = substr($lastPost['content'], 0, 1500);
            ?>
            <article class="col-md-8 maincontent">
                <header class="page-header">
                    <h1 class="page-title"><?= htmlspecialchars($lastPost['title']) ?></h1>
                                 <h5><em>Publié le le <?= $lastPost['creation_date_fr'] ?></em> </h5>
                </header>
                                <p>
                                    <?= nl2br(htmlspecialchars($excerpt)), ' [...]' ?>
                                    <br />
                                </p>
                                <h6><a href="index.php?action=post&amp;id=<?= $lastPost['id'] ?>">Lire la suite</a></h6>
            </article>
            <?php
            }
            ?>
            <!-- /Article -->
           
            
            <!-- Sidebar -->
            <aside class="col-md-4 sidebar sidebar-right">
                <?php
                while ($data = $posts->fetch())
                {
                $excerpt = substr($data['content'], 0, 500);
                ?>
                        <div class="row widget">
                            <div class="col-xs-12">
                                <h4>
                                    <?= htmlspecialchars($data['title']) ?>
                                </h4>
                                 <h5><em>Publié le le <?= $data['creation_date_fr'] ?></em> </h5>
                                
                                <p>
                                    <?= nl2br(htmlspecialchars($excerpt)) , ' [...]' ?>
                                    <br />
                                </p>
                                <h6><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite</a></h6>
                            </div>
                        </div>
                <?php
                }
                $posts->closeCursor();
                ?>
            </aside>
            <!-- /Sidebar -->

        </div>
    </div>  <!-- /container -->







<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>