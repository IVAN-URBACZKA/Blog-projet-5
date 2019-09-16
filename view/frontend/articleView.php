
<?php echo $article['chapo']; ?> <br>
<?php echo $article['content']; ?> <br>
<?php echo $article['created']; ?>
<?php echo $article['id']; ?> <br>





<br>

<em><a href="index.php?action=updatedarticleform&amp;id=<?= $article['id']; ?>">Modifier l'article</a></em>

<em><a href="index.php?action=deletedarticle&amp;id=<?= $article['id']; ?>">Supprimer l'article</a></em>

