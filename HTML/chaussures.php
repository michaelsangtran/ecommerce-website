<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>CHAUSSURES</title>
<link rel="stylesheet" type="text/css" href="../CSS/tp.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
</head>
<body>
	<div id="logo"><a href= "acceuil.html"><img  src="../images/logo3.png" alt="logo"></a></div>
	
	
	<div class="menu">
		<div>
		<ul class="menu-deroulant">
			<li><p class="ver">PRODUITS</p>
				<ul>
					<li><a href="produit1.php" id="p1" target="_blank">PRODUIT 1</a></li>
					<li><a href="produit2.php" target="_blank">PRODUIT 2</a></li>
					<li><hr></li>
					<li><a href="chaussures.php">CHAUSSURES</a></li>
					<li><a href="pantalons.php">PANTALONS</a></li>
					<li><a href="robes.php">ROBES</a></li>
				</ul>
			</li>
		</ul>
		</div>
		
		<div class="elem"><a href="magasins.html">MAGASINS</a></div>
		<div class="elem"><a href="#la">GÉRANT</a></div>
		<div class="elem"><a href="contact.html">CONTACT</a></div>
		<div class="elem"><a href="associes.php">ASSOCIÉS</a></div>
		<div class="elem"><a href="connexion.html">CONNEXION</a></div>
	</div>
	
	<?php
	require 'config.php';
	
	
	$produits = $database->select('h2020_produits', ['id','nom','description','fabricant','prix','photo']);

	if (sizeof($produits) == 0) {
		echo "Il y a aucun produit.";
	} else {
		echo "<div>";
		echo "<div><h2>Chaussures</h2></div>";
		echo "<div id='section1'>"; 
		echo "<p class='produit' style='text-align: center'>";

		for ($j = 1; $j <= sizeof($produits); $j++) {
			$k = $j + 1;
			echo "<a href='#section".$k.
			"' class='produit' > Aller à l'article " .$j. "</a>  | ";
			if ($j == 5) break;

		}

		echo "<p class='produit' style='text-align: center'>";
		echo "<div class='section' >";	
		$i = 2;
		$dernier = 0;
		if (sizeof($produits) >5) {
			$dernier = 6;
		} else{
			$dernier = sizeof($produits);
		}
		foreach($produits as $produit) {
				if($produit["id"] == 6) break;
			echo "<div class='elem' style='text-align: center' id='section".$i."'>";
			echo "<header>	
				<p class='produit'>Nom fabriquant : "
					.$produit["fabricant"].
					"<br>
					Nom du couturier: ARI création<br>
					<a href='#section1' class='produit' >RETOUR A LA SECTION PREMIERE</a>
				</p>
				</header>";

			echo "<figure>
				<figcaption class='produit'>".$produit["nom"]."</figcaption>"
				."<img src='" . $produit["photo"] . "'alt='Aucune photo'>".
				"<figcaption class='produit'>".$produit["description"]."</figcaption>
				</figure>";

			echo "<footer>
					<p class='produit'>Prix de l'article: "
					.$produit["prix"].
					"CAD<br>
					<a href='#section".$dernier."' class='produit' >RETOUR A LA SECTION DERNIÈRE</a>
					</p>
				</footer>";
			echo "</div>";
				
				//compteur pour afficher seulement les cinq premiers produits
				$i++;
		}
		echo "</div>";
		echo "</div>";
	}
    ?>
	
	
	<br><br><br>
	<div id='la' class="over">
<div class="con">
<div style="margin: 25px;">
<a href="#" class="produit">&times; </a>
<figure>
					<figcaption class="produit">Nom du gérant:<br>Michael Ibrahim</figcaption>
    				<img src="../images/gerant.jpg" height= "300" alt="">
         			
				</figure>
</div>
<div style="margin: 25px;"> <h2>Description du magasin</h2>
<p Class="produit" style="text-align: justify;">
Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en 
page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis 
les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour 
réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, 
mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. 
Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des 
passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page 
de texte, comme Aldus PageMaker.
</p>
</div>
<div style="margin: 25px;"><a href= "acceuil.html"><img  src="../images/logo3.png" alt="logo"></a></div>
</div>

</div>

	<footer>

	<div CLASS="menu">
		<div class="elem"><p class="ver">DÉVELOPPEURS DU SITE<BR><a href="mailto:ibrade09@gmail.com">ADEOTI IBRAHIM ADEDJOUMA</a><BR><a href="mailto:michaelsangtran@gmail.com">MICHAEL SANG TRAN</a> </p></div>
		<div class="elem"> 
			<p class="ver">Contact information:<br><br> <a href="mailto:ibrade09@gmail.com">ibrade09@gmail.com</a></p>
			<p><a href="mailto:michaelsangtran@gmail.com">michaelsangtran@gmail.com</a></p>
		</div>
	</div>
	<div id="inf3190"><Strong>Ce site est développé dans le cadre du cours <a href="http://www.etudier.uqam.ca/cours?sigle=INF3190" class="produit">INF3190</a> de l’<a href="http://www.uqam.ca" class="produit">UQAM</a></strong></div>
</footer>
</body>
</html>
