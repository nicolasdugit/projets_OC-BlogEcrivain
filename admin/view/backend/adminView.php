<?php $title = 'Jean Forteroche - PAGE ADMINISTRATEUR'; ?>

<?php ob_start(); ?>
<h2 class="text-center top-space">Administration</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <p>test</p>
            </div>
        </div>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>