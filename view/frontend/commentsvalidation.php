<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="public/style.css" rel="stylesheet" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
    <div id="form-color">

    <h1>Comments validation</h1>

    <?php
while ($data = $comments->fetch())
{
?>
   
      <div id="comments">

       <h2 class="text-white"><?= htmlspecialchars($data['title']) ?></h2>
       <p class="text-white"><?= nl2br(htmlspecialchars($data['content'])) ?></p>
       <a class="text-white" href="index.php?action=validTrue&amp;validation=1&amp;id=<?= $data['id']; ?>">valider le commentaire</a>
        
      </div>
     
<?php
}
$comments->closeCursor();
?>

</div>


</body>
</html>