<?php $title = 'Jean Forteroche - PAGE ADMINISTRATEUR'; ?>

<?php ob_start(); ?>

<h2 class="text-center top-space">Administration</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            	<h3>Actions</h3>
            	<h4><a href="index.php?action=createPost">Nouvel article</a></h4>
            	<h4><a href="index.php?action=createPost">Nouvel article</a></h4>
            </div>
            <div class="col-sm-4">
            	<h3>Commentaires signalés</h3>
            </div>
            <div class="col-sm-4">
            	<h3>Commentaires à modérer</h3>
            </div>
        </div>
    </div>
<h2 class="text-center top-space"><a href="../index.php">Retour a l'accueil</a></h2>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>