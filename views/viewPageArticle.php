<?php ob_start(); ?>


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

      </section>


 <?php $content =ob_get_clean(); ?>

<?php require('template.php') ?>