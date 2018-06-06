<?php $title = 'Jean Forteroche - PAGE ADMINISTRATEUR'; ?>

<?php ob_start(); ?>

<h2 class="text-center top-space">Administration</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            	<h3>Actions</h3>
				<h4><a href="index.php?action=createPost">Nouvel article</a></h4>
				<h4><a href="index.php?action=listPost">Modifier/Supprimer un article</a></h4>
				<h4><a href="../index.php">Retour a l'accueil</a></h4>
            </div>
            <div class="col-sm-4">
            	<h3>Commentaires signalés</h3>
                <?php 
                while ($data = $reportedComments->fetch()) {
                    if ($data['comment_report'] != null) 
                    {
                        ?>
                        <h3><?= $data['author']  ?></h3>
                        <p><?= $data['comment'] ?></p>
                        <button class="btn btn-success">Valider</button>
                        <button class="btn btn-warning">Supprimer</button>
                        <?php
                    }
                }
                $reportedComments->closecursor();
                ?>
            </div>
            <div class="col-sm-4">
                <h3>Commentaires à modérer</h3>
                <?php 
                while ($data = $toValidateComments->fetch()) {
                    if ($data['comment_verify'] === null) 
                    {
                        ?>
                        <h3><?= $data['author']  ?></h3>
                        <p><?= $data['comment'] ?></p>
                        <button class="btn btn-success">Valider</button>
                        <button class="btn btn-warning">Supprimer</button>
                        <?php
                    }
                }
                $toValidateComments->closecursor();
                ?>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>