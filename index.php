<?php
session_start();

try{
    
    require('controllers/controller_improved.php');

    
    
    if(isset($_GET['action'])){
        if($_GET['action'] == 'listPost'){
            listPosts();
        }
        elseif($_GET['action'] == 'article'){
            if(isset($_GET['id']) AND $_GET['id']>0){
                article($_GET['id']);
                
            }else {
               throw new Exception( 'Erreur : aucun identifiant de billet envoyé');
            }
            
        }
        elseif($_GET['action']=='pageEdit'){ //we must verify if session connected by author
            if(isset($_GET['id']) AND $_GET['id']>0){
                pageEdit($_GET['id']);
            }else{
                throw new Exception('Erreur: aucun billet trouvé');
            }
        }
        elseif($_GET['action']=='delectArticle'){
            if(isset($_GET['id']) AND $_GET['id']>0){
                delectArticle($_GET['id']);
            }else{
                throw new Exception('Erreur: impossible de supprimer cet article');
            }

        }
        elseif($_GET['action']=='editArticle'){
            if(isset($_GET['id']) AND ($_GET['id']>0)){
                echo 'id is ok';
              if(!empty($_POST['title']) AND !empty($_POST['editor'])){
                  echo'this functions';
                  editArticle($_GET['id'],$_POST['title'],$_POST['editor']);
              }else{
                throw new Exception( 'Erreur : tous les champs ne sont pas remplis !'); 
              }
            }else{
                throw new Exception( 'Erreur : aucun identifiant de billet envoyé');
            }

        }
        
        elseif($_GET['action'] == 'post'){
            if(isset($_GET['id']) AND $_GET['id']>0){
                post();
            }else {
               throw new Exception( 'Erreur : aucun identifiant de billet envoyé');
            }
            
        }
        elseif($_GET['action']=='addComments'){
            session_start();
            if(isset($_GET['id']) AND ($_GET['id']>0) ){
                if(!empty($_SESSION['pseudo']) AND !empty($_POST['comments'])    ){
                    addComments($_GET['id'],$_SESSION['pseudo'],$_POST['comments']);
                }else{
                    throw new Exception( 'Erreur : tous les champs ne sont pas remplis !');
                }
            }else{
                throw new Exception('Erreur : aucun identifiant de billet envoyé');
                
                
            }
        }
        elseif($_GET['action']=='login'){
            showLogin();
        }

        elseif($_GET['action']=='admin'){
            if(isset($_POST['peusdo']) && isset($_POST['pass']) ){

                verifyAdmin($_POST['peusdo'],$_POST['pass']);
            }else{
                throw new Exception('Veulliez verifier votre saisies');
            }

        }
        
        elseif($_GET['action']=='deconnexion'){
            deconnexion();
        }
        
        elseif($_GET['action']=='inscription'){
            if (isset($_POST['pseudo']) && isset($_POST['mdp'])){
       
                  if ($_POST['mdp'] !== $_POST['confirm_mdp'])
                  {
                    throw new Exception( "Vos mots de passe ne correspondent pas !");
                      require('views/viewAdmin.php');
                  }
                  else
                  {
                    addLogins($_POST['pseudo'],$_POST['mdp']);
                  }
             }
             else{
                throw new Exception ('Votre saisir est incomplet');
             }
        }
        elseif($_GET['action']=='addArticles'){
           
                if(!empty($_POST['editor']) && !empty($_POST['title'])){
                    addArticles($_POST['title'],$_POST['editor']);
                   
                }else{
                    throw new Exception('Veilliez verifier votre saisies');
                }
            

        }
        elseif($_GET['action']=='listArticles'){
             listArticles();
        }
   
        
        
        
    }else {
        listPosts();
    }
}
catch (Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

