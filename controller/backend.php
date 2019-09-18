<?php

require_once('model/UserManager.php');
require_once('model/ConnexionManager.php');
require_once('model/ArticleManager.php');
require_once('model/CommentManager.php');

//--------------------------------------------------------

function addUser()
{
    
    $manager = new UserManager();

    if(isset($_POST['pseudo']) & isset($_POST['surname']) & isset($_POST['firstname']) & isset($_POST['pass']) & isset($_POST['pass_verification']) & isset($_POST['email'])){

        if($_POST['pass'] == $_POST['pass_verification']){

            if(!$manager->checkPseudo($_POST['pseudo'])) {

        $datas = [];
        $datas['pseudo'] = $_POST['pseudo'];
        $datas['surname'] = $_POST['surname'];
        $datas['firstname'] = $_POST['firstname'];
        $datas['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $datas['email'] = $_POST['email'];
    
        $user = new User($datas);

        $result = $manager->addUser($user);

        if($result)
            {
                header("Location: index.php");
            }
}

else{
    echo 'pseudo deja pris ';
}

}

else 
{
    header("Location: index.php?action=registerpasserror");
}

}

}

function connexion()
{

  if(isset($_POST['pseudo_connexion'] ) & isset($_POST['pass_connexion'])){


         $manager = new ConnexionManager();

         $result = $manager->getConnexion($_POST['pseudo_connexion']);

         $isPasswordCorrect = password_verify($_POST['pass_connexion'], $result['pass']);

         if (!$result)
         {
             echo 'Mauvais identifiant ou mot de passe !';
         }
         
         else{
         
           if($isPasswordCorrect)
           {
             session_start();
             $_SESSION['id'] = $result['id'];
             $_SESSION['pseudo'] = $result['pseudo'];
             header("Location: index.php");
           }
         
           else
           {
             echo 'Mauvais identifiant ou mot de passe !';
         
           }
         
         }

    
}

}

//--------------------------------------------------------------------------------

function addArticle()
{
  $manager = new ArticleManager();
  
  if(isset($_POST['chapo'] ) & isset($_POST['content']))
  {
    
    session_start();
    $datas = [];
    $datas['user_id'] = (int)$_SESSION['id'];
    $datas['title'] = $_POST['title'];
    $datas['chapo'] = $_POST['chapo'];
    $datas['content'] = $_POST['content'];
    $datas['created'] = date("Y-m-d H:i:s");
    $datas['updated'] = date("Y-m-d H:i:s");

    $article = new Article($datas);

    $result = $manager->addArticle($article);

    if($result)
            {
                header("Location: index.php");
            }
}


}

function updatedArticle()
{

  $manager = new ArticleManager();

  if(isset($_POST['chapo'] ) & isset($_POST['content']))
  {
    session_start();
    $datas['id'] = $_GET['id'];
    $datas['user_id'] = (int)$_SESSION['id'];
    $datas['title'] = $_POST['title'];
    $datas['chapo'] = $_POST['chapo'];
    $datas['content'] = $_POST['content'];
    $datas['created'] = date("Y-m-d H:i:s");
    $datas['updated'] = date("Y-m-d H:i:s");


    $article = new Article($datas);

    $result = $manager->updatedArticle($article);

    if($result)
            {
                header("Location: index.php");
            }

  }


}

function deletedArticle()
{
  $manager = new ArticleManager();

  $result = $manager->deletedArticle($_GET['id']);

  if($result)
  {
      header("Location: index.php");
  }



}

//-------------------------------COMMENT-------------------------------------------

function addComment()
{
  $manager = new CommentManager();

  session_start();

  if(isset($_POST['title'] ) & isset($_POST['content']) & isset($_SESSION['id']))
  {
    
    session_start();
    $datas = [];
    $datas['user_id'] = (int)$_SESSION['id'];
    $datas['title'] = $_POST['title'];
    $datas['content'] = $_POST['content'];
    $datas['created'] = date("Y-m-d H:i:s");

    $comment = new Comment($datas);

    $result = $manager->addComment($comment);

    if($result)
            {
                header("Location: index.php");
            }

}

else{
  echo "vous devez être connecté ";
}


}


//------------------------------- VIEW --------------------------------------------

function register()
{
  require("view/frontend/user.php");
}

function registerPassError()
{
  require("view/frontend/inscription_loose.php");
}

function loginForm()
{
  require("view/frontend/connexion.php");
}

function deconnexion()
{
  require("view/frontend/deconnexion.php");
}

function writeArticle()
{
  session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
  require("view/frontend/writeArticle.php");
}

else
{
  echo '<a href="index.php">Vous devez possédez un compte pour écrire un article</a>';

}
}

//---------------------------------------------------------------------------------

