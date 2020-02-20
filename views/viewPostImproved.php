<?php $title = 'Mon blog'; ?>











<?php ob_start(); ?>


    <section id='books'>
         <div id='containerBooks'>
             <h2>Romans</h2>
             <p>Tous les livres de Jean Fortroche.</p>
             <div id='listBooks'>
                 <ul id='theList'>
                      <li>
                           <img src="images/bookscover1.jpg" alt="bookscover">
                           <p>the discription</p>
                      </li>
                      <li>
                           <img src="images/bookscover3.jpg" alt="bookscover">
                           <p>the discription</p>
                      </li>
                      <li>
                           <img src="images/bookscover5.jpg" alt="bookscover">
                           <p>the discription</p>
                      </li>
                      
                 </ul>
             </div>
         
         </div>
    </section>
<?php $content = ob_get_clean(); ?>




    





<?php require('template.php'); //send infos to the template,important to keep this?>






