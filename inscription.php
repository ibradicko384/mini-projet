<?php
$conn=mysqli_connect('localhost','root','','formulaire') or die(mysqli_error());
$NOM=$_POST['nom'];
$PRE=$_POST['pre'];
$EML=$_POST['eml'];
$PWD=$_POST['pwd'];

$req="INSERT INTO apprenants (nom,prenom,email,password) values ('$NOM','$PRE','$EML','$PWD')";
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
        text-align: center;
    }
    </style>
</head>
<body> 
<form>
    <div class="div">
      <h3>L'apprenant simplon</h3>
      <table >
        <tr>
            <td>Nom</td>
            <td><?php echo ($NOM) ?></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td><?php echo ($PRE) ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo ($EML) ?></td>
        </tr>
    </table>
    <p>a été retenu avec succès</p>
    <p><a href="index.php">Ajouter un nouveau apprenant</a></p>
    </div>
    </form>


    
</body>
</html>