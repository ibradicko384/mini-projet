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
                $requete = "SELECT * FROM apprenants";
                $query = mysqli_query($conn, $requete);

                // Affichage des données dans un tableau HTML

                    while($row = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                        echo "<td>" . $row["nom"] . "</td>";
                        echo "<td>" . $row["prenom"]  . "</td>";
                        echo "<td>" . $row["date_de_naissance"] . "</td>";
                        echo "<td>" . $row["genre"] . "</td>"; 
                        echo "<td>" . $row["date_admission"] . "</td>";
                        echo "<td>" . $row["personne_prevenir"] . "</td>";
                    echo "</tr>";
                    }
             ?>
      </table>
   <a href="index.php" >Retour à l'accueil</a>
</div>
	<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>