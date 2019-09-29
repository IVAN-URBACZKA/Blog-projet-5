<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Comments validation</h1>


    <?php
while ($data = $comments->fetch())
{
?>
   
      <div id="comments">

       <h2><?= htmlspecialchars($data['title']) ?></h2>
       <p><?= nl2br(htmlspecialchars($data['content'])) ?></p>
       <a href="index.php?action=validTrue&amp;validation=1&amp;id=<?= $data['id']; ?>">valid</a>
        
      </div>
     
<?php
}

$comments->closeCursor();
?>
</body>
</html>