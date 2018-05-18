<?php $title = "Mon blog - inscription" ?>

<?php ob_start(); ?>

<!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Créer un compte</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Créer un compte</h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Créer un nouveau compte</h3>
                            <p class="text-center text-muted">Vous avez déjà un compte ? <a href="index.php?action=connectionPage">Connectez vous</a> avec vos identifiants </p>
                            <hr>

                            <form action="index.php?action=inscription" method="post">
                                <div class="top-margin">
                                    <label for="pseudo">Nom d'utilisateur <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="pseudo" name="pseudo" required>
                                </div>
                                <div class="top-margin">
                                    <label for="mail">Courriel <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" type="email" id="mail" name="mail" required>
                                </div>

                                <div class="row top-margin">
                                    <div class="col-sm-6">
                                        <label for="pass">Mot de passe <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" type="password" name="pass" id="pass" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="pass-confirm">Confirmer le mot de passe <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" type="password" name="pass-confirm" id="pass-confirm" required>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <button class="btn btn-action" type="submit">Créer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>