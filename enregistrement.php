<?php
// pour connecter enregistrement.php à connexion.php
require'connexion.php';

// code d'enregistrement 
$NOM= $_POST['nom'];
$PRENOM= $_POST['prenom'];
$DATE_DE_NAISSANCE=$_POST['date_de_naissance'];
$GENRE= $_POST['genre'];
$DATE_ADMISSION= $_POST['date_admission'];
$PERSONNE_PREVENIR= $_POST['personne_prevenir'];

$req="INSERT INTO apprenants (nom,prenom,date_de_naissance,genre,date_admission,personne_prevenir) values ('$NOM','$PRENOM','$DATE_DE_NAISSANCE','$GENRE','$DATE_ADMISSION','$PERSONNE_PREVENIR')";

$res=mysqli_query($conn,$req);

if(isset($res)){
    echo"ENREGISTREMENT REUSSI!";
}
else{
    echo"ERROR!";
}

?>