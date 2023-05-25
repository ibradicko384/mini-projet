<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Liste_UFR</title>
</head>
<body>
      <div class="container mt-3 text-white">
        <div class="row">
            <div class="col">
            <img class="img4" src="images/téléchargement.jpeg">
            </div>
            <div class="col">
            <h1>Liste des étudiants inscrits</h1>
            </div>
        </div>
		<table class="table table-striped text-white mt-5">
				<tr>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Date_de_naissance</th>
                    <th>Genre</th>
                    <th>Date_admission</th>
                    <th>Personne_prevenir</th>
				</tr>
                <?php
                // Vérification de la connexion

                require'connexion.php'; 

                // Récupération des données des étudiants
                $requete = "SELECT nom, prenom, date_de_naissance, genre, date_admission, personne_prevenir FROM apprenants";
                $result = $conn->query($requete);

                // Affichage des données dans un tableau HTML
                if($result->rowcount()>0){
                    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                        echo "<td>" . $row["nom"] . "</td>";
                        echo "<td>" . $row["prenom"]  . "</td>";
                        echo "<td>" . $row["date_de_naissance"] . "</td>";
                        echo "<td>" . $row["genre"] . "</td>"; 
                        echo "<td>" . $row["date_admission"] . "</td>";
                        echo "<td>" . $row["personne_prevenir"] . "</td>";
                    echo "</tr>";
                    }
                } else{
                    echo "aucun donnée trouvée";
                }
                $conn=NULL;
             ?>
      </table>
      <p><button type="button" class="kkk" class="btn btn-light"> <a class="abc"  href="index.php">Retour à l'accueil</a></button></p>
</div>
<div class="container text-center">
  <div class="row bg-dark">
    <p class="kakra">Copyright © Université Joseph KI-ZERBO 2020 - Tous droit réservés. Powered by DSI</p>
  </div>
</div>
	<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>