<?php ob_start(); ?>

<section id='deconnxion'>
    
     <div id='deconnexionElt'>
         <h2>Vous etes bien deconnecté!</h2>
         <p>Write something here</p>
         <div id='reconnexion'>
             <button id='backMainpage'>
                 <a href="" ></a>
             </button>
             <button id='reconnexion'>
                 <a href="" ></a>
             </button>
         </div>
     
     </div>



</section>

<?php $content=ob_get_clean(); ?>

<?php require('template.php'); ?>