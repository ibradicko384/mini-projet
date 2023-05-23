<?php
$conn=mysqli_connect('localhost','root','','projet') or die(mysqli_error());
$NOM=$_POST['nom'];
$PRE=$_POST['pre'];
$DATE=$_POST['date'];
$EML=$_POST['eml'];
$PWD=$_POST['pwd'];
$PWD=$_POST['pwd'];

$req="INSERT INTO apprenants (nom,prenom,date_de_naissance,genre,date_admission,personne_prevenir) values ('$NOM','$PRE','$DATE')";
$res=mysqli_query($conn,$req);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <style>
            body{
    box-shadow: 1px 6px 17px grey;
    margin-right: 35%;
    margin-left: 35%;
    margin-top: 20%;
    padding-top: 10px;
    padding-bottom: 10px;
    }
    .btn{
    width: 100%;
    }
    .div{
        text-align: left;
        margin-left: 20%;
        
    }
    </style>
</head>
<body> 
<form>
    <div class="div">
      <h3>L'apprenant simplon</h3>
      <table >
        <tr>
            <td>Nom :</td>
            <td><?php echo ($NOM) ?></td>
        </tr>
        <tr>
            <td>Prenom :</td>
            <td><?php echo ($PRE) ?></td>
        </tr>
        <tr>
            <td>Date de naissance :</td>
            <td><?php echo ($DATE) ?></td>
        </tr>
        <!-- <tr>
            <td>Email :</td>
            <td><?php echo ($EML) ?></td>
        </tr> -->
    </table>
    <p>a été enregistré avec succès</p>
    <p><a href="index.php">Ajouter</a></p>
    </div>
    </form>


    
</body>
</html>