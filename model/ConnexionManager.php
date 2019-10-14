<?php

require_once "model/Manager.php" ; 

class ConnexionManager extends Manager 
{
    Public function getConnexion($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id,pass,pseudo FROM users WHERE pseudo = ?');
        $req->execute(array($pseudo));
        $result = $req->fetch();
        return $result;

    }

}

