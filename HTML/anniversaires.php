<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>ANNIVERSAIRES</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    $lien = mysqli_connect("localhost", "root", "", "inf3190");
	$sql = "SELECT prenom, Day(datenaissance) as day, Month(datenaissance) as month, photo FROM h2020_employes";

	if($resultat = mysqli_query($lien, $sql)){
        if(mysqli_num_rows($resultat) > 0){
			echo "<h2>Anniversaires des employés<h2>";
			echo "<table class = 'table'>";
                echo "<tr>";
                    echo "<th>Prénom</th>";
                    echo "<th>Photo</th>";
                    echo "<th>Jour</th>";
                    echo "<th>Mois</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($resultat)){
                echo "<tr>";
                    echo "<td>" . $row['prenom'] . "</td>";
                    echo "<td>" . "<img src='" . $row["photo"] . "'alt='Aucune photo'>" . "</td>";
                    echo "<td>" . $row['day'] . "</td>";
                    echo "<td>" . $row['month'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free resultat set
            mysqli_free_result($resultat);
        } else{
            echo "Aucun anniversaire à montrer.";
        }
    } else{
        echo "ERREUR: Impossible d'exécuter $sql. " . mysqli_error($lien);
    }
     
    // Fermer le lien
    mysqli_close($lien);
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