<div class="navbar navbar-inverse navbar-fixed-top headroom" >
	<div class="container">
		<div class="navbar-header">
			<!-- Button for smallest screens -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="index.php">BILLET SIMPLE POUR L'ALASKA</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">
				<li><a href="index.php">ACCUEIL</a></li>
				<li><a href="index.php?action=listPosts">MON LIVRE</a></li>
				<?php 
				if (isset($_SESSION['pseudo'])) 
				{
				?>
					<li><a class="btn " href="index.php?action=deconnection">Se déconnecter</a></li>
					<li><a href=
						<?php
						if (isset($_SESSION['group_id']) && $_SESSION['group_id'] == 1) 
						{
							echo "'admin/index.php'";
						}
						else
						{	
							echo "'index.php'";
						}
						?>
						>Bonjour <?= htmlspecialchars($_SESSION['pseudo']) ?></a></li>
				<?php
				}
				else 
				{
				?>
					<li><a class="btn" href="index.php?action=connectionPage">SE CONNECTER / CREER UN COMPTE</a></li>
				<?php
				}
				?>	
			</ul>
		</div>
	</div>
</div> 
