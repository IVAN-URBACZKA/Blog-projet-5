<?php 
$title = "Mon Blog"; 
$introduce = "Bienvenue sur mon Blog";
$button = "Ecrire un article"; 
$href = "index.php?action=writeArticle";
?>

<?php ob_start(); ?>

<div class="blog-container">
    <!-- Example row of columns -->
    <div class="blog-row">

<?php
while ($data = $articles->fetch())
{
?>
   
      <div id="article-blog" class="col-md-4 mb-sm-5">
      
        <h1><?= htmlspecialchars($data['title']) ?></h1>
        <p><em><?= htmlspecialchars($data['chapo']) ?></em></p>
        <p class="foo" ><?= nl2br(htmlspecialchars($data['content'])) ?></p>
        <em><a class="btn btn-secondary" href="index.php?action=article&amp;id=<?= $data['id'] ?>&amp;user_id=<?= $data['user_id'] ?>">Voir l'article</a></em>
        
      </div>
     
<?php
}

$articles->closeCursor();
?>

</div>
      </div>
      
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>