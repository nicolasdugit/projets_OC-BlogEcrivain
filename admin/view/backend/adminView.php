<?php $title = 'Jean Forteroche - PAGE ADMINISTRATEUR'; ?>

<?php ob_start(); ?>

<h2 class="text-center top-space">Administration</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            	<p class="lead text-uppercase">Actions</p>
				<h4><a href="index.php?action=createPost">Nouvel article</a></h4>
				<h4><a href="index.php?action=listPost">Modifier/Supprimer un article</a></h4>
				<h4><a href="../index.php">Retour a l'accueil</a></h4>
            </div>
            <div class="col-sm-4">
            	<p class="lead">Commentaires signalés</p>
                <?php 
                while ($data = $reportedComments->fetch()) {
                    if ($data['comment_report'] == 1) 
                    {
                        ?>
                        <h4 class="bg-warning"><strong>Par : </strong><?= htmlspecialchars($data['author'])  ?></h4>
                        <p class="bg-danger"><strong>Commentaire : </strong><?= htmlspecialchars($data['comment']) ?></p>
                        <a href="index.php?action=validateComment&amp;com_id=<?= $data['id'] ?>" class="btn btn-success">Valider</a>
                        <a href="index.php?action=deleteComment&amp;com_id=<?= $data['id'] ?>" class="btn btn-warning">Supprimer</a>
                        <hr>
                        <?php
                    }
                }
                $reportedComments->closecursor();
                ?>
            </div>
            <div class="col-sm-4">
                <p class="lead text-uppercase">Commentaires à modérer</p>
                <?php 
                while ($data = $toValidateComments->fetch()) {
                    if ($data['comment_verify'] == 0 && $data['comment_report'] == 0) 
                    {
                        ?>
                        <h4 class="bg-warning"><strong>Par : </strong><?= htmlspecialchars($data['author'])  ?></h4>
                        <p class="bg-info"><strong>Commentaire : </strong><?= htmlspecialchars($data['comment']) ?></p>
                        <a href="index.php?action=validateComment&amp;com_id=<?= $data['id'] ?>" class="btn btn-success">Valider</a>
                        <a href="index.php?action=deleteComment&amp;com_id=<?= $data['id'] ?>" class="btn btn-warning">Supprimer</a>
                        <hr>
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