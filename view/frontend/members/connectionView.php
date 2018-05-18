<?php $title = "Mon blog - connection" ?>

<?php ob_start(); ?>

<div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Se Connecter</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Se connecter</h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Connectez vous à votre compte</h3>
                            <p class="text-center text-muted">Premiere visite ? <a href="index.php?action=inscriptionPage">Créez votre compte</a> pour pouvoir commentez mes articles</p>
                            <hr>
                            
                            <form action="index.php?action=connection" method="post">
                                <div class="top-margin">
                                    <label for="pseudo" >Nom d'utilisateur <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="pseudo" name="pseudo" required>
                                </div>
                                <div class="top-margin">
                                    <label for="pass">Mot de passe <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="pass" id="pass" required>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- <b><a href="">Mot de passe oublié ?</a></b> -->
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <button class="btn btn-action" type="submit">Se connecter</button>
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