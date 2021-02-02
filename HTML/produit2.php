<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Produit2</title>
<link rel="stylesheet" type="text/css" href="../CSS/tp.css">
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
	if (sizeof($produits) == 0 ) {
	    echo "Il y a aucun produit phare";
	} else if(sizeof($produits) <= 1 ){
	    echo "Il y qu'un seul produit phare";
	} else {
	    $avdernier = sizeof($produits)-1;
	    
	        $id = $database->select('h2020_produits', 'id', ['id' => [$avdernier]])[0];
	        $nom = $database->select('h2020_produits', 'nom', ['id' => [$avdernier]])[0];
	        $description =  $database->select('h2020_produits', 'description', ['id' => [$avdernier]])[0];
	        $fabricant = $database->select('h2020_produits', 'fabricant', ['id' => [$avdernier]])[0];
	        $prix =  $database->select('h2020_produits', 'prix', ['id' => [$avdernier]])[0];
	        $photo =  $database->select('h2020_produits', 'photo', ['id' => [$avdernier]])[0];
	        
		echo "<div>";
		echo "<h2>".$nom."</h2>";
		echo "</div>"; 
		echo "<div>";
		echo "<div class='elem'>";
		echo"<header>";
        echo "<p class='produit'>Nom du Fabricant :  ".$fabricant."<br><br>
        </p>";
        echo "</header>";
		
		echo "<figure>
					<figcaption class='produit'>".$description." <br>
					<a href='https://www.youtube.com/watch?v=n2CCz4x2xGE&t=59s' class='produit'>Youtube</a>
					<br>
					<iframe width='560' height='31' src='https://www.youtube.com/embed/n2CCz4x2xGE?start=59'
			    allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'
		    allowfullscreen></iframe>
		    
			</figcaption>"		
			."<img src='" . $photo . "'alt='Aucune photo' height= '900'>". "</figure>";
    
        echo "<footer>
        <p class='produit'>Prix de l'article: ".$prix."<br>
        </p>";
        echo "</footer>";
        echo "</div>";
            
        echo"</div>";
	    
	   }
	
    ?>



<div id='la' class="over">
<div class="con">
<div style="margin: 25px;">
<a href="#" class="produit">&times; </a>
<figure>
					<figcaption class="produit">Nom du gérant:<br>Michael Ibrahim</figcaption>
    				<img src="../images/gerant.jpg" height= "300" alt="logo">
         			
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