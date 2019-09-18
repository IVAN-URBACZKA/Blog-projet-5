<?php

require_once('model/ArticleManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

function listArticlesHome()
{
    $articleManager = new ArticleManager();
    $articles = $articleManager->getArticles();

    require('view/frontend/listArticlesHome.php');
}

function listArticlesBlog()
{
    $articleManager = new ArticleManager();
    $articles = $articleManager->getArticles();

    require('view/frontend/listArticlesBlog.php');


}

function article()
{
    session_start();

    $articleManager = new ArticleManager();

    $article = $articleManager->getArticle($_GET['id']);

    $commentManager = new CommentManager();
   
    $comments = $commentManager->getComments();

    $userManager = new UserManager();
    
    $user = $userManager->getUser($_GET['user_id']);

    require('view/frontend/articleView.php');
}

function updatedArticleForm()
{
    $articleManager = new ArticleManager();
   
    $article = $articleManager->getArticle($_GET['id']);


    require('view/frontend/articleViewUpdate.php');
   
}





