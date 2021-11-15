<header>
	<div class="wrap">
	<h1><a href=""><img src="" alt="Intrigue"></a></h1>
	
	
	<nav>
		<ul>
			<li><a id ="link_nav" href="index.php">accueil</a></li>
			<li><a id ="link_nav" href="login.php">login</a></li>
			<li><a id ="link_nav" href="creer_compte.php">créer compte</a></li>
			<li><a id ="link_nav" href="panier.php">panier</a></li>
		</ul>
	</nav>
	
	<form id="search" action="recherche.php" method="post" enctype="multipart/form-data">
			<p>
				<label for="searchText">Rechercher :</label>
				<input id="searchText" name="query" type="text" value="" />
				<input id ="searchBtn" type="submit" class="bouton" value="OK" />
			</p>
		</form>
	
	
		<nav id="menu-categorie">
		<ul>
			<li class="smenu"><a href="categorie_spectacle.php?cat_spectacle=all">Tous les spectacles</a></li>
			<li class="smenu"><a href="categorie_spectacle.php?cat_spectacle=1">Theatre</a></li>
			<li class="smenu"><a href="categorie_spectacle.php?cat_spectacle=2">Opera</a></li>
			<li class="smenu"><a href="categorie_spectacle.php?cat_spectacle=4">Ballet</a></li>
			<li class="smenu"><a href="categorie_spectacle.php?cat_spectacle=3">Collaboration</a></li>
		</ul>
		</nav>
		
</div>
</header>
