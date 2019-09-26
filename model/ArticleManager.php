<?php


require_once("model/Manager.php"); 
require_once("model/Article.php");


class ArticleManager extends Manager{

    Public function getArticles()
{
    $db = $this->dbConnect();
    $req = $db->query('SELECT id,user_id, title,chapo , content,created , DATE_FORMAT(updated, \'%d/%m/%Y à %Hh%imin%ss\') AS updated_date_fr FROM articles ORDER BY created DESC LIMIT 0, 5');

    return $req;
}

   Public function getArticle($articleId)
{
    $db = $this->dbConnect();
    $req = $db->prepare(' SELECT id, title,chapo , content, created , DATE_FORMAT(updated, \'%d/%m/%Y à %Hh%imin%ss\') AS updated_date_fr  FROM articles WHERE id = ?');
    $req->execute(array($articleId));
    $article = $req->fetch();

    return $article;
}
    Public function addArticle($article)
    {

        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO articles (user_id,title,chapo,content,created,updated) VALUES (:user_id,:title,:chapo,:content,:created,:updated)');
        if ( 0 == $req->fetchColumn()){
        $req->bindValue (':user_id', $article->getUserId());
        $req->bindValue (':title', $article->getTitle());
        $req->bindValue (':chapo', $article->getchapo());
        $req->bindValue (':content', $article->getContent());
        $req->bindValue (':created', $article->getCreated());
        $req->bindValue (':updated', $article->getUpdated());

        $result = $req->execute();
            
        return $result;

        }

  }

  public function updatedArticle($article){

    $db = $this->dbConnect();
    $req = $db->prepare('UPDATE articles SET title=:title, chapo=:chapo,content=:content, updated=Now() WHERE id= :id ');
   
        $req->bindValue (':id', $article->getId());
        $req->bindValue (':title', $article->getTitle());
        $req->bindValue (':chapo', $article->getChapo());
        $req->bindValue (':content', $article->getContent());
        
        $result = $req->execute();

        return $result;

}


public function deletedArticle($id)
{
    $db = $this->dbConnect();
    $req = $db->prepare('DELETE FROM articles WHERE id=:id');
    $req->bindValue (':id', $id);
    $result = $req->execute();
    return $result;
    
}

}