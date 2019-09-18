
<?php echo $user['pseudo']; ?> <br>
<?php echo $article['title']; ?> <br>
<?php echo $article['chapo']; ?> <br>
<?php echo $article['content']; ?> <br>
<?php echo $article['updated_date_fr']; ?>
<?php echo $article['id']; ?> <br>



<em><a href="index.php?action=updatedarticleform&amp;id=<?= $article['id']; ?>">Modifier l'article</a></em>

<em><a href="index.php?action=deletedarticle&amp;id=<?= $article['id']; ?>">Supprimer l'article</a></em>


<h2>Commentaires</h2>

<form id="formulaire" action="index.php?action=addcomment" method="post" >

    <label for="">Title</label>
    <input type="text" name="title">

 

    <br>

    <label for="">Content</label>
    <textarea name="content" rows="4" cols="50">
    </textarea>


    <input type="submit" value="envoyer">


    <form>


<?php
while ($data = $comments->fetch())
{
?>
   

   
      <div class="col-md-4 mb-sm-5">

      <h1><?= htmlspecialchars($data['title']) ?></h1>
        <p><?= nl2br(htmlspecialchars($data['content'])) ?></p>
      
      
        
      </div>
     
      


<?php
}
$comments->closeCursor();

?>






