<?php

require_once('model/UserManager.php');

function addUser()
{

    $datas = [];
    $datas['pseudo'] = $_POST['pseudo'];
    $datas['surname'] = $_POST['surname'];
    $datas['firstname'] = $_POST['firstname'];
    $datas['pass'] = $_POST['pass'];
    $datas['email'] = $_POST['email'];

    $user = new User($datas);

    $manager = new UserManager();
    
    $result = $manager->addUser($user);

    if($result)
            {
                header("Location: index.php");
            }


}

function register()
{

    require("view/frontend/user.php");


}


