<?php $title = 'Erreur - Mon blog'; ?>

<?php ob_start(); ?>

<div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Se Connecter</li>
        </ol>

        <div class="row">
			<h1>Erreur</h1>
			<h2><?= $errorMessage ?> </h2>
			<p><a href="index.php">Retour à la liste des billets</a></p>
			<p><a href="index.php?action=connectionPage">Retour à la page de connexion</a></p>
         </div> 
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>