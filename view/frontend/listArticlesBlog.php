<?php 
$title = "Mon Blog"; 
$introduce = "Bienvenue sur mon Blog";
$button = "Ecrire un article"; 
$href = "index.php?action=writeArticle";
?>

<?php ob_start(); ?>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">

<?php
while ($data = $articles->fetch())
{
?>
   

   
      <div class="col-md-4 mb-sm-5">
        <h2> <?= htmlspecialchars($data['chapo']) ?></h2>
        <p><?= nl2br(htmlspecialchars($data['content'])) ?></p>
        <em><a class="btn btn-secondary" href="index.php?action=article&amp;id=<?= $data['id'] ?>">Voir l'article</a></em>
        
      </div>
     
      


<?php
}

$articles->closeCursor();
?>

</div>
      </div>
      
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>