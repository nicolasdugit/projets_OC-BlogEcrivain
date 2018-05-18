<?php $title = 'Jean Forteroche - BILLET SIMPLE POUR L\'ALASKA'; ?>

<?php ob_start(); ?>
<h2 class="text-center top-space">Mon dernier chapitre</h2>

<?php
$data = $posts->fetch()

?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>
    
                    <?= htmlspecialchars($data['title']) ?>
                </h3>
                
                <p>
                    <?= nl2br(htmlspecialchars($data['content'])) ?>
                    <br />
                </p>
                <h5><em>Publié le le <?= $data['creation_date_fr'] ?></em> </h5>
            </div>
        </div>
    </div>
<?php

$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>