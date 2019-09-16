<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  

    <h1>Ecrire un article </h1>

    <h2><?= $_SESSION['pseudo']; ?></h2>

    <form id="formulaire" action="index.php?action=addarticle" method="post" >

    <label for="">Chapô</label>
    <input type="text" name="chapo">

    <br>

    <label for="">Content</label>
    <textarea name="content" rows="4" cols="50">
    </textarea>


    <input type="submit" value="envoyer">


    <form>

</body>
</html>