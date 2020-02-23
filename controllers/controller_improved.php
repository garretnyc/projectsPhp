<?php

require_once('models/PostManager.php');
require_once('models/CommentsManager.php');
require_once('models/AdminManager.php');


function showLogin(){
    require('views/viewAdmin.php');
}

function listPosts(){
    $postManager = new \phpTest\models\PostManager();
    $posts = $postManager->getPosts();
    //need to modified this.
    require('views/viewPostImproved.php');     //no need to write upper folder,coz its SQL codes from roots of index.
   //needs to be modified,maybe not put codes here
}

function post(){
    $postManager = new \phpTest\models\PostManager();
    $commentsManager =new \phpTest\models\CommentsManager();

    $post = $postManager ->getPost($_GET['id']);
    $comments =$commentsManager->getComments($_GET['id']);

    require('views/viewPostImproved.php');
    
   
    //why no verifications of 'isset' --- we put in routreurs.
}

function deconnexion(){
    $adminManager = new phpTest\models\AdminManager();

    $dec = $adminManager->setDeconnexion();

    require('views/viewDeconnexion.php');



}


function verifyInscription($peusdo, $passInscr){
    $adminManager = new \phpTest\models\AdminManager();
    $login =$adminManager->getLogin($peusdo);

    if(!$login){
        $affectedLine= $adminManager ->addLogin($peusdo,$passInscr);   
        if($affectedLine==false){
            throw new Exception('Impossible d\'ajouter nouveaux utilisateurs!');

         }else{
          header('Location:index.php?action=admin');
         }
   
    }else{
        echo "Ce pseudo est déjà utilisé !";
        require('views/viewAdmin.php');
    }
     




}

function verifyAdmin($loginId, $passHash){
    $adminManager = new \phpTest\models\AdminManager();

    $login =$adminManager->getLogin($loginId);
    
   

    //$loginPass_hash =password_hash($login['pass'],PASSWORD_DEFAULT);

    $isPasswordCorrect = password_verify($passHash,$login['pass']); //verifier directment le hachage de $_POST.*

       if(!$login){
           echo 'Mauvais Identifiant ou Mot de Passe';
       }else{//this have to lead to admin pages
           if($isPasswordCorrect){   //$passHash==$login['pass']
               session_start();
               $_SESSION['peusdo']=$login['peusdo'];
               $_SESSION['id']=$login['id'];
               
               //echo $loginPass_hash ;
               require('views/backendAdmin.php');

           }else{
               echo 'Mauvais Identifiant ou Mot Passe';
               echo $login['pass'];
           }
        }

    
     
    //not this pages,create a function to choose pages


}

function addArticles($title,$contentArticles){
    $postManager =new \phpTest\models\PostManager();
    $newArticle =$postManager->postArticles($title,$contentArticles);

    if($newArticle==false){  //is this neccesary???????.
       throw new Exception('Impossible d\'ajouter articles');
    }else{
        header('location:index.php?action=listArticles');
    }

    
}

function addComments($postId, $author, $comment){
   
    $commentsManager =new \phpTest\models\CommentsManager();

    $affectedLines = $commentsManager->postComments($postId,$author,$comment);

    if($affectedLines==false){
        throw new Exception('Impossible d\'ajouter le commentaire !');

    }else{
        header('Location:index.php?action =post&id='.$postId);
    }
}

function listArticles(){
    $postManager =new \phpTest\models\PostManager();

    $posts= $postManager->getPosts();
    require('views/viewAllArticles.php');
}

