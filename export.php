<?php
include("connexion.php");
$req = $pdo->prepare("select * from images where codeImage = ? limit 1");
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute(array($_GET["codeImage"]));
$img = $req->fetchAll();
echo $img[0]["bin"];
?>