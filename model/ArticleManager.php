<?php


require_once("model/Manager.php"); 


class ArticleManager extends Manager{

    Public function getArticles()
{
    $db = $this->dbConnect();
    $req = $db->query('SELECT id, chapo , content,created , updated  FROM articles ORDER BY created DESC LIMIT 0, 5');

    return $req;
}

   Public function getArticle($articleId)
{
    $db = $this->dbConnect();
    $req = $db->prepare(' SELECT id, chapo , content, created , updated  FROM articles WHERE id = ?');
    $req->execute(array($articleId));
    $article = $req->fetch();

    return $article;
}

Public function addArticle()
{
    
}

}