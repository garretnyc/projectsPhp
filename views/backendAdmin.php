<?php $title = 'Page Admins'; ?>

<?php ob_start(); ?>

<section id='adminpage'>
 
        <h2>Bienvenue Jean Forteroche</h2>   <!--ici all the lists of chapters/access to every chapters/
                                                 modification of chapters/add new chapters/
                                                But first of all, define the chapters UI -->
        
 
         <div id='listsChapters'>
               <p>Blaaaaaaaaaaaaaaaaaaaaaaaaa!.</p>
         </div>
         <div id='addChapters'>
               <p>So this is a test!.</p>
         </div>
         <form action="index.php?action=addArticles" method='post' id='tiny' >
                 <h1> Add tinymce editor in PHP or HTML </h1>
                <div class="texteditor-container">
                      
                      <textarea name='title' id='titles'></textarea>
                      <textarea name="editor" id="elm1"></textarea>
                      <input type="submit" name="create" value="Ajouter Articles">
               
                </div>
                
                <!--div id="display-post" style="width:700px;" >
                </div-->
        </form>

         <div id='buttonAdminDeconnexion'>
            <a href="index.php?action=deconnexion">Deconnexion</a>
         </div>




</section>

<?php $content=ob_get_clean();?>

<?php require('template.php'); ?>