<?php

require 'controller/frontend.php' ;
require 'controller/backend.php' ;

class Router {
  
public function routerRequest()
{

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

        elseif($_GET['action'] == 'register'){
            register();
        }

        elseif($_GET['action'] == 'registerpasserror'){
            registerPassError();
        }

        elseif($_GET['action'] == 'addarticle'){
            addArticle();
        }

        elseif($_GET['action'] == 'writeArticle'){
            writeArticle();
        }

        elseif($_GET['action'] == 'loginform'){
            loginForm();
        }

        elseif($_GET['action'] == 'connexion'){
            connexion();
        }

        elseif($_GET['action'] == 'deconnexion'){
            deconnexion();
        }

        elseif ($_GET['action'] == 'article') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                article();
            }

            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
}

        elseif($_GET['action'] == 'updatedarticleform'){
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                updatedArticleForm();
            }
            
            }

            elseif($_GET['action'] == 'updatedarticle'){
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    updatedArticle();
                }
                
                }

                elseif($_GET['action'] == 'deletedarticle'){
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        deletedArticle();
                    }
                    
                    }

                    elseif($_GET['action'] == 'addcomment'){
                        addComment();
                    }

                    elseif ($_GET['action'] == 'contact') {
                        contact();
                    }

                    elseif ($_GET['action'] == 'about') {
                        about();
                    }

                    elseif ($_GET['action'] == 'mandatoryregistration') {
                        mandatoryregistration();
                    }

                    elseif ($_GET['action'] == 'commentsvalidation') {
                        commentsValidation();
                    }

                    elseif ($_GET['action'] == 'validTrue') {
                       
                            validTrue();
                        
                    }

}

else {
    listArticlesHome();
}

}

catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

}

}
     