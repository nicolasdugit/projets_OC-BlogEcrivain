<?php $title = 'Jean Forteroche - BILLET SIMPLE POUR L\'ALASKA'; ?>

<?php ob_start(); ?>
<h2 class="text-center top-space">Mon dernier chapitre</h2>

<?php
$data = $posts->fetch();
$excerpt = substr($data['content'], 0, 1500);
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3> <?= htmlspecialchars($data['title']) ?> </h3>
                <h5> <em>Publié le le <?= $data['creation_date_fr'] ?></em> </h5>
                <p>
                    <?= nl2br(($excerpt)) , ' [...] ' ?>
                    <h6><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite</a></h6>
                    <br>
                </p>
            </div>
        </div>
    </div>
<?php
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>