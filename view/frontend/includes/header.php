<?php session_start(); 

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])){ 
?>
   
   <nav class="navbar justify-content-between  navbar-dark bg-dark">
  <a class="navbar-brand ml-5" href="#">URBACZKA IVAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=listArticles">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=blog">Blog</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=listArticles">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=listArticles">Qui-suis-je?</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Espace membres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      
          <a class="dropdown-item" href="index.php?action=deconnexion">Déconnexion</a>

      </li>
    
    </ul>
    
  </div>
</nav>


        <?php
        } 
        
        else {
        ?>
  
<nav class="navbar justify-content-between  navbar-dark bg-dark">
  <a class="navbar-brand ml-5" href="#">URBACZKA IVAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=listArticles">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=blog">Blog</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=listArticles">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?action=listArticles">Qui-suis-je?</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Espace membres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?action=register">Inscription</a>
          <a class="dropdown-item" href="index.php?action=loginform">Connexion</a>
         

      </li>
    
    </ul>
    
  </div>
</nav>



        <?php
        }
        ?>


