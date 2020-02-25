<?php

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
                editArticle($_GET['id']);
            }else{
                throw new Exception('Erreur: aucun billet trouvé');
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
            if(isset($_GET['id']) AND ($_GET['id']>0) ){
                if(!empty($_POST['author']) AND !empty($_POST['comment'])    ){
                    addComments($_GET['id'],$_POST['author'],$_POST['comment']);
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
                      echo "Vos mots de passe ne correspondent pas !";
                      require('views/viewAdmin.php');
                  }
                  else
                  {
                    verifyInscription($_POST['pseudo'],$_POST['mdp']);
                  }
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

