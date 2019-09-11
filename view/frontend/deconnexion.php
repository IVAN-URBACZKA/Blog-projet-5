<?php 

session_start();

$_SESSION = array();
session_destroy();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>DECOOOO</p>

<a href="index.php?action=listArticles">Revenir à l'accueil</a>

</body>
</html>