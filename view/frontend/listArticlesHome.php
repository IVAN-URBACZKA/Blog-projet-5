<?php
$title = "Le blog d'Ivan";
$introduce = "Développeur web PHP";
$button = "En savoir plus";
$href = "index.php?action=index.php";
 
 
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
        <h1><?= htmlspecialchars($data['title']) ?></h1>
        <h2> <?= htmlspecialchars($data['chapo']) ?></h2>
        <p><?= nl2br(htmlspecialchars($data['content'])) ?></p>
        <em><a class="btn btn-secondary" href="index.php?action=article&amp;id=<?= $data['id'] ?>&amp;user_id=<?= $data['user_id'] ?>">Voir Article</a></em>
        
        
      </div>
     
      


<?php
}
$articles->closeCursor();
?>

</div>
      </div>
      
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>