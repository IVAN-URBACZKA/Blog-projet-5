<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="public/style" rel="stylesheet" /> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
    <title>Le blog D'ivan</title>
  </head>
  <body>

  <div class="wrapper">
  <div class="top"><div class="title"><h1><?php echo $article['title']; ?></h1></div></div>
  <div class="content">
    <div class="card first">
    <h2><a href="#"><?= htmlspecialchars($user['pseudo']); ?></a></h2>
    <h2><a href="#"><?= htmlspecialchars($article['chapo']); ?></a></h2>
      <p class="date"><?= htmlspecialchars($article['updated_date_fr']); ?></p>
      <p class="text"><?= htmlspecialchars($article['content']); ?> <br></p>
      <em><a href="index.php?action=updatedarticleform&amp;id=<?= $article['id']; ?>">Modifier l'article</a></em>

<em><a href="index.php?action=deletedarticle&amp;id=<?= $article['id']; ?>">Supprimer l'article</a></em>

    </div>
    </div>
    </div>

    <section class="comments">

<h2>Commentaires</h2>

<form id="formulaire" action="index.php?action=addcomment" method="post" >

    <label for="">Title</label>    <br>

    <input type="text" name="title">

    <br>

    <label for="">Content</label>    <br>

    <textarea name="content" rows="4" cols="50">
    </textarea>
    <br>

    <input name="id" type="hidden" value='<?php echo $article['id']; ?>'>
    <input name="validation" type="hidden" value='0'>

    <input type="submit" value="envoyer">

    <form>

    </section>

    <h1>Comments</h1>

    <?php
while ($data = $comment->fetch())
{
?>
   
      <div id="comments">

      <h1><?= htmlspecialchars($user['pseudo']); ?></h1>
       <h2><?= htmlspecialchars($data['title']); ?></h2>
       <p><?= nl2br(htmlspecialchars($data['content'])) ?></p>
        
      </div>
     
<?php
}

$comment->closeCursor();
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



