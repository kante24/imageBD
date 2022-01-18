<?php
if (isset($_POST["valider"]))
{
    include ("connexion.php");
    $req = $pdo->prepare("insert into images (nom, taille, type, bin) values (?,?,?,?) ");
    $req->execute(array($_FILES["image"]["name"], $_FILES["image"]["size"], $_FILES["image"]["type"], file_get_contents($_FILES["image"]["tmp_name"]) ));
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <form name="fo" method="post" action="" enctype="multipart/form-data">
        <input type="file" name="image"/> <br>
        <input type="submit" name="valider" value="Charger">
    </form>
</body>
</html>