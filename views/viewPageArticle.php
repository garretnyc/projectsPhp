<?php 

session_start();
ob_start(); ?>


<section id="articles">
          <div id='presentations'>
              <div id='sideV'>
                    <p>Fiction</P>

    
                    <h3>The chapter <?= $article['id'] ?></h3>


                    <p id='date'>Le <?= $article['creation_date_fr'] ?></p>

                    <img src="" alt="articlesphotos">
             </div>
             <div id='article'>
                    <h1><?= $article['title'] ?></h1>
                    <p><?= $article['content'] ?></p>
                    <button><a href="index.php?action=pageEdit&id=<?=$article['id']?>">Modifier</a></button>
                    <button><a href="index.php?action=delectArticle&id=<?=$article['id']?>">Supprimer</a></button>
             </div>
         </div>
         <div id='comments'>       <!--use while to fetch-->
         <?php
             
                      while($commentsData = $comments->fetch()){        
         ?>
                       <div id='comment'>
                            <h2 id='titleComment'>
                             Publié par <strong><?= htmlspecialchars($commentsData['author']);?></strong> Le <?= $commentsData['comments_date_fr']; ?>  
                            </h2>
                            <p id='contentComment'>
                              <?= nl2br( htmlspecialchars( $commentsData['comments'])); ?>
                            </p>
                       </div>
                  
        <?php
                       
                       }
                       $comments->closeCursor();
                  
              
               
       ?>
          
                     <div id='addComments'>
                          <form action="index.php?action=addComments&id=<?= $article['id'];?>" method='post'>
                          <label for="comments"> <?= $_SESSION['pseudo'];?>  votre opinion est important pour nous!</label></br>
                          <textarea name="comments" id="loginComments" cols="30" rows="10"></textarea>
                          <input type="submit" id="bComment">
                          
                          </form>
                     </div>
         
         </div>

      </section>


 <?php $content =ob_get_clean(); ?>

<?php require('template.php') ?>