<?php

require_once("model/Manager.php"); 
require_once("model/User.php");

class UserManager

{

    Public function addUser(User $user)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO users (pseudo,surname,firstname,pass,email) VALUES (:pseudo,:surname,:firstname,:pass,:email)');
        $req->bindValue(':pseudo', $user->getPseudo());
        $req->bindValue(':surname', $user->getSurname());
        $req->bindValue(':firstname', $user->getFirstname());
        $req->bindValue(':pass', $user->getPass());
        $req->bindValue(':email', $user->getEmail());

        $req->execute();
        $req->closeCursor();
        return $req;
        

    }

  

}

?>