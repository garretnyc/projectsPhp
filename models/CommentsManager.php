<?php


namespace phpTest\models ;  //???need write in majuscule.

require_once('models/Manager.php');// ?????need model here.
class CommentsManager extends Manager    {

    

    public  function getComments($postId){
        $db = $this->dbConnect();
    
        $req = $db->prepare('SELECT id, author, comments, DATE_FORMAT(date_comments, \'%d/%m/%Y à %Hh%imin%ss\')
                            AS comments_date_fr FROM comments WHERE post_id = ? ORDER BY date_comments');
        $req->execute(array($postId));
        
        //$comments = $req->fetch();  ????????why not this-----because we have to use loops to read in the view pages.
    
    
        return $req; //!!!why we can use $req here: because in controller we will assign new names everytime called.
                    
    
    }
    
    public function postComments($postId,$author,$comment){
        
        $db = $this->dbConnect(); //why no need to try/catch? coz in controller we call this function and throw exceptions.
        $req =$db->prepare('INSERT INTO comments(post_id,author,comments,date_comments) VALUES(?,?,?,NOW())' );
        $affectedLines = $req->execute(array($postId,$author,$comment));
        
        return $affectedLines;
    }
}