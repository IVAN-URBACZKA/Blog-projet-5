<?php

require_once("model/Manager.php"); 
require_once("model/Comment.php");

class CommentManager extends Manager{

    Public function getComments($articleid)
{
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT id, title,content,created FROM comments WHERE article_id = ? ORDER BY created DESC LIMIT 0, 5');
    $req->execute(array($articleid));
    return $req;

    
}

Public function addComment($comment)
{

    $db = $this->dbConnect();
    $req = $db->prepare('INSERT INTO comments (article_id,user_id,title,content,created) VALUES (:article_id,:user_id,:title,:content,:created)');
    if ( 0 == $req->fetchColumn()){
    $req->bindValue (':article_id', $comment->getArticleId());
    $req->bindValue (':user_id', $comment->getUserId());
    $req->bindValue (':title', $comment->getTitle());
    $req->bindValue (':content', $comment->getContent());
    $req->bindValue (':created', $comment->getCreated());

    $result = $req->execute();
        
    return $result;

    }

}


}