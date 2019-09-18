<?php

require_once("model/Manager.php"); 
require_once("model/User.php");

class UserManager extends Manager

{

    public function addUser(User $user)
    {
        
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO users (pseudo,surname,firstname,pass,email) VALUES (:pseudo,:surname,:firstname,:pass,:email)');
            $req->bindValue (':pseudo', $user->getPseudo());
            $req->bindValue (':surname', $user->getSurname());
            $req->bindValue (':firstname', $user->getFirstname());
            $req->bindValue (':pass', $user->getPass());
            $req->bindValue (':email', $user->getEmail());

            $result = $req->execute();
            
            return $result;

    }

    public function checkPseudo($pseudo){

        $db = $this->dbConnect();
        $res = $db->prepare('SELECT count(id) FROM users WHERE pseudo=?');
        $res->execute(array($pseudo));

        if($res->fetchColumn() > 0)
   {
      return true;
   }

   else
   {
      return false;
   }

    }

    Public function getUser($user_id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pseudo FROM users WHERE id = ?');
        $req->execute(array($user_id));
        $pseudo = $req->fetch();
    
        return $pseudo;
    }

}

?>