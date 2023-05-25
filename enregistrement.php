<?php
// pour connecter enregistrement.php à connexion.php
require'connexion.php';

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date_de_naissance=$_POST['date_de_naissance'];
$genre=$_POST['genre'];
$date_admission=$_POST['date_admission'];
$personne_prevenir=$_POST['personne_prevenir'];

$sql= "INSERT INTO `apprenants`(`nom`, `prenom`, `date_de_naissance`, `genre`, `date_admission`, `personne_prevenir`) VALUES ('$nom','$prenom', '$date_de_naissance','$genre','$date_admission','$personne_prevenir')";
if($conn->exec($sql)){
// echo ' avec succès';
}
else{
echo "Erreur : " . $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container bg-white mt-5">
        <div class="row fw-{breakpoint}-bold mt-5">
            <div class="col offset-2 text-{breakpoint}-center">
            <h3>L'étudiant(e)</h3>
    <table>
        <tr>
            <td text-align="right">nom</td>
            <td><?php echo ($nom) ?></td>
        </tr>
        <tr>
            <td text-align="right">prenom</td>
            <td><?php echo ($prenom) ?></td>
        </tr>
        <tr>
            <td text-align="right">date_de_naissance</td>
            <td><?php echo ($date_de_naissance) ?></td>
        </tr>
        <tr>
            <td text-align="right">date_admission</td>
            <td><?php echo ($date_admission) ?></td>
        </tr>
        <tr>
            <td text-align="right">personne_prevenir</td>
            <td><?php echo ($personne_prevenir) ?></td>
        </tr>
    </table><br><br>
    <h5>a été enregistré avec succès</h5> 
    <p><button type="button" class="kkk" class="btn btn-light"> <a class="abc"  href="suite.php">Retour</a></button></p>

            </div>
            
        </div>
        
    </div>
    
</body>
</html>