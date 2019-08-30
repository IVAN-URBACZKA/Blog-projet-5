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

    $manager->addUser($user);

}

function register()
{

    require("view/frontend/user.php");


}


