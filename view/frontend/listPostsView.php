<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h2 class="text-center top-space">Derniers billets du blog :</h2>



<?php
while ($data = $posts->fetch())
{
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>
                    <?= htmlspecialchars($data['title']) ?><em>le <?= $data['creation_date_fr'] ?></em>
                </h3>
                
                <p>
                    <?= nl2br(htmlspecialchars($data['content'])) ?>
                    <br />
                     <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
                </p>
            </div>
        </div>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>