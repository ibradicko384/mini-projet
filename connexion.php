<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 
 //On essaie de se connecter
 
 $conn = new PDO("mysql:host=$servername;dbname=projet", $username, $password);
 if ($conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)){
 }
    else{
         echo "Erreur : " . $e->POSTMessage();
       
       }
?>   

