<?php

namespace phpTest\models ;

require_once('models/Manager.php');

class PostManager extends Manager{

public function postArticles($title,$contentArticles){   //sould set this in private or public funcion
     
     $db = $this->dbConnect();

     $req =$db->prepare('INSERT INTO posts(title,content,creation_date) VALUES( :title,:content,CURDATE())');

     $articleCreated =$req ->execute(array(
         'title' => $title,
         'content'=>$contentArticles,
     ));

     return $articleCreated;


}

public function getArticles($articleId){
    $db =$this ->dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\')
                         AS creation_date_fr FROM posts WHERE id=? ');
    $req->execute(array($articleId));
    $article =$req ->fetch();
    return $article;
}

public function modifyPost($articleId,$title,$articleContent){
    $db= $this->dbConnect();
    $req =$db->prepare('UPDATE posts SET title = :mTitle, content = :mContent
                        WHERE id = :mId');   //!!!the ':' must follow up by the name no spaces.
    $modifiedArticle=$req->execute(array(
        'mTitle' => $title,
        'mContent' =>$articleContent,
        'mId' => $articleId
    ));
    return $modifiedArticle;
}

public function delectPost($articleId){//   any to way to remind before delect??.
    $db= $this->dbConnect();
    $req=$db->prepare('DELETE FROM posts WHERE id= :dId');
    $delectedArticle = $req->execute(array(
        'dId' =>$articleId
    ));
    return $delectedArticle;

}



public function getPosts(){   //we write the $this even with function Manager.
    
    
    $db =$this->dbConnect();
    
    $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') 
                      AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
    
    return $req;
    
    
}

public function getPost($postId){
      
    $db =$this->dbConnect();

    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\')
                         AS creation_date_fr FROM posts WHERE id=? '); //Only '?' / ':variables' can be put here.
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;

}
}