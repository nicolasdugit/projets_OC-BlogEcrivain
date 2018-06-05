<?php $title = "PAGE ADMIN - connection" ?>

<?php ob_start(); ?>

<div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Admin</a></li>
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
                            <p class="text-center text-muted">Vous n'etes pas administrateur ? <a href="../index.php">retournez sur la page d'acceuil par ici.</a> pour pouvoir lire mon livre</p>
                            <hr>
                            
                            <form action="index.php?action=connection" method="post">
                                <div class="top-margin">
                                    <label for="pseudo" >Nom d'administrateur <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="pseudo" name="pseudo" required>
                                </div>
                                <div class="top-margin">
                                    <label for="pass">Mot de passe <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="pass" id="pass" required>
                                </div>

                                <hr>

                                <div class="row">
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

<?php require('view/backend/template.php'); ?>