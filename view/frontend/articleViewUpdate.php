<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form id="formulaire" action="index.php?action=updatedarticle&amp;id=<?= $article['id']; ?>" method="post" >


<label for="">Title</label>
<input type="text" name="title">

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