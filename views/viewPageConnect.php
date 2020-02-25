<?php $title = 'Page Connect'; ?>

<?php ob_start(); ?>

<section id='connectPage'>
 
        <h2>Bienvenue <?= $_SESSION['pseudo']?> </h2>   <!--ici all the lists of chapters/access to every chapters/
                                                 modification of chapters/add new chapters/
                                                But first of all, define the chapters UI -->
        
 
         <div id='listsChapters'>
               <p>Blaaaaaaaaaaaaaaaaaaaaaaaaa!.</p>
         </div>
         <div id='addChapters'>
               <p>Tres content de vous voir!</p>
         </div>
         





</section>

<?php $content=ob_get_clean();?>

<?php require('template.php'); ?>