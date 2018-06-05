<?php $title = 'Jean Forteroche - PAGE ADMINISTRATEUR'; ?>

<?php ob_start(); ?>
<h2 class="text-center top-space">Creation nouvel article</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <p>test</p>
            </div>
        </div>
    </div>
<h2 class="text-center top-space"><a href="../index.php">Retour a l'accueil</a></h2>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>