<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Inscription</title>
</head>
<body>
    <header>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-light kok">Formulaire d'inscription</button>
            </div>
            <div class="col-4"></div>
            <div class="col">
            <img class="img4" src="images/téléchargement.jpeg">
            </div>
        </div>
    </div>
    </header>
    <div class="container mt-5">
        <div class="row">
             <form method="POST" action="enregistrement.php" class="form">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required><br>

      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" required><br>

      <label for="date_de_naissance">Date de naissance :</label>
      <input type="date" id="date_de_naissance" name="date_de_naissance" required><br>

      <label for="genre">Genre :</label><br>
      <select id="genre" name="genre">
        <option value="femme">Femme</option>
        <option value="homme">Homme</option>
      </select><br>

      <label for="date_admission">Date d'inscription :</label>
      <input type="date" id="date_admission" name="date_admission" required><br>

      <label for="personne_prevenir">Personne à prevenir :</label>
      <input type="text" id="personne_prevenir" name="personne_prevenir" required><br><br>
      <p><input class="enre" type="submit" value="Enregistrer">
      <button type="button" class="kkk" class="btn btn-light"> <a class="abc" href="ensuite.php">vérifier</a></button></p>
    </form>

        </div>
    </div>
    <div class="container text-center">
  <div class="row bg-dark">
    <p class="kakra">Copyright © Université Joseph KI-ZERBO 2020 - Tous droit réservés. Powered by DSI</p>
  </div>
</div>
   
    <script src="script\script.js"></script>
    <script src="style\bootstrap\js"></script>
</body>
</html>