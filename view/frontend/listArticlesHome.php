<?php
$title = "URBACZKA IVAN";
$introduce = "Developpeur Web Freelance";
$button = "En savoir plus";
$href = "index.php";
 
 
 ?>

<?php ob_start(); ?>

<div class="mt-5" id="homepage-container">

<h1 id="title-homepage" >Créateur de sites web et d’applications mobile sur-mesure.</h1>

<p class="mt-3" id="intro-homepage">J’accompagne les Auto-entrepreneurs et les PME dans leur stratégie de marketing digital. Parce qu’un simple site web ne suffit plus, j’effectue aussi pour mes clients le référencement et les campagnes d’emailing pour leur entreprise.</p>

 </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>