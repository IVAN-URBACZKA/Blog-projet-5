<?php

require_once('model/UserManager.php');

function addUser()
{

    if(isset($_POST['pseudo']) AND isset($_POST['surname']) AND isset($_POST['firsname']) AND isset($_POST['pass']) AND isset($_POST['email'])) 
    {
       
    $datas = [];
    $datas['pseudo'] = $_POST['pseudo'];
    $datas['surname'] = $_POST['surname'];
    $datas['firstname'] = $_POST['firstname'];
    $datas['pass'] = $_POST['pass'];
    $datas['email'] = $_POST['email'];

    $user = new User($datas);

    $manager = new UserManager();

    $addUser = $manager->addUser($user);

    if ($addUser === false) {
        throw new Exception('ok');
    }
    else {
        header('Location: index.php');
    }

}

require("view/frontend/user.php");



}


