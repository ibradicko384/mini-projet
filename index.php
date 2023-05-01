<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Apprenants</title>
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
    </style>
</head>
<body>
    <form method="POST" action="inscription.php">
    <table >
        <tr>
            <td>Nom</td>
            <td><input type="text" name="nom" placeholder="votre nom..."></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td><input type="text" name="pre" placeholder="votre prenom..."></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="eml" placeholder="votre e-mail..."></td>
        </tr>
        <tr>
            <td>Mot de passe</td>
            <td><input type="password" name="pwd" placeholder="votre mot de passe..."></td>
        </tr>
            <td></td>
            <td><input class="btn" type="submit" name="forminscription" value="Save"></td>
    </table>
    </form>

    <script src="script\script.js"></script>
</body>
</html>