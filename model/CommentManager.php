<?php

require_once("model/Manager.php"); 
require_once("model/Comment.php");

class CommentManager extends Manager{

    Public function getComments()
{
    $db = $this->dbConnect();
    $req = $db->query('SELECT id, title,content,created FROM comments ORDER BY created DESC LIMIT 0, 5');

    return $req;
}

Public function addComment($comment)
{

    $db = $this->dbConnect();
    $req = $db->prepare('INSERT INTO comments (user_id,title,content,created) VALUES (:user_id,:title,:content,:created)');
    if ( 0 == $req->fetchColumn()){
    $req->bindValue (':user_id', $comment->getUserId());
    $req->bindValue (':title', $comment->getTitle());
    $req->bindValue (':content', $comment->getContent());
    $req->bindValue (':created', $comment->getCreated());

    $result = $req->execute();
        
    return $result;

    }

}


}