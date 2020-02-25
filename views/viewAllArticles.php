


<?php ob_start(); ?>


<section id="articles">
          <div id='presentations'>
              <div id='sideV'>
                    <p>Fiction</P>
                    <h3>The chapter 8</h3>
                    <p id='date'>the date of publications</p>

                    <img src="" alt="articlesphotos">
             </div>
             <div id='article'>
                    <h1>Mon super blog !</h1>
                    <p>Derniers billets du blog :</p>
             </div>
         </div>

      </section>



<?php
                                     //important: as the final pages we do not have to declare require-coz in controller_improved already declared.
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) //htmlspecialchars is for display any infos from visitors?> 
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="index.php?action=article&id=<?= $data['id'] ?>">Consulter ce chapitre</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>


<?php $content =ob_get_clean(); ?>

<?php require('template.php') ?>