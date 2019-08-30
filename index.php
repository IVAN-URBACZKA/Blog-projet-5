<?php

require('controller/frontend.php');
require('controller/backend.php');


try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listArticles') {
            listArticlesHome();
        }

        elseif ($_GET['action'] == 'blog') {
            listArticlesBlog();
        }

        elseif($_GET['action'] == 'adduser'){
            addUser();
        }


        elseif ($_GET['action'] == 'article') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                article();
            }

            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
}

}

else {
    listArticlesHome();
}

}



catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

     