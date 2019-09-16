<?php

require_once('model/ArticleManager.php');

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
    $articleManager = new ArticleManager();
   
    $article = $articleManager->getArticle($_GET['id']);

    require('view/frontend/articleView.php');
}

function updatedArticleForm()
{
    $articleManager = new ArticleManager();
   
    $article = $articleManager->getArticle($_GET['id']);


    require('view/frontend/articleViewUpdate.php');
   
}



