<?php

require_once('model/UserManager.php');

function addUser()
{
    
    $manager = new UserManager();

    if(isset($_POST['pseudo']) & isset($_POST['surname']) & isset($_POST['firstname']) & isset($_POST['pass']) & isset($_POST['pass_verification']) & isset($_POST['email'])){

        if($_POST['pass'] == $_POST['pass_verification']){

            if(!$manager->checkPseudo($_POST['pseudo'])) {
     
        $datas = [];
        $datas['pseudo'] = $_POST['pseudo'];
        $datas['surname'] = $_POST['surname'];
        $datas['firstname'] = $_POST['firstname'];
        $datas['pass'] = $_POST['pass'];
        $datas['email'] = $_POST['email'];
    
        $user = new User($datas);

        $result = $manager->addUser($user);

        if($result)
            {
                header("Location: index.php");
            }
}

else{
    echo 'pseudo deja pris ';
}

}

}

}

function register()
{
  require("view/frontend/user.php");
}




