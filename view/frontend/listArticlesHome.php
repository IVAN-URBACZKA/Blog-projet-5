<?php
$title = "URBACZKA IVAN";
$introduce = "Developpeur Web Freelance Passionné";
$button = "Mon cv";
$href = "https://drive.google.com/open?id=1fDhD_uK9Keks1KkLEBGlOrNckGaKMwZv";
?>

<?php ob_start(); ?>

<div class="mt-5" id="homepage-container">


<h1 id="title-homepage" >Créateur de sites web et d’applications mobile sur-mesure. </h1>


<p class="mt-3" id="intro-homepage">J’accompagne les Auto-entrepreneurs et les PME dans leur stratégie de marketing digital. Parce qu’un simple site web ne suffit plus, j’effectue aussi pour mes clients le référencement et les campagnes d’emailing pour leur entreprise. Vous pouvez me contactez via le formulaire de contact ou a cette adresse <a href="mailto:ivan.urbaczka@gmail.com">ivan.urbaczka@gmail.com</a>

</p>

<div id="social">

<a href="https://www.linkedin.com/in/ivan-urbaczka-2b8829139/"><img src="public/link" alt=""></a>
    <a href="https://www.facebook.com/ivan.urbaczka.5"><img src="public/face" alt=""></a>

</div>

 </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

