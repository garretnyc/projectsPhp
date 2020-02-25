<?php $title = 'Page Edit'; ?>

<?php ob_start(); ?>

<div id='pageEdit'>
     <form action="index.php?action=editArticle&id=<?= $article['id']?>" method='post' id='tiny' >
                     <h1>Edit Chapter <?= $article['id'] ?></h1>
                     <div class="texteditor-container">
                           
                           <textarea name='title' id='titles' ><?= htmlspecialchars($article['title']) ?></textarea>
                           <textarea name="editor" id="elm1" ><?= nl2br(htmlspecialchars($article['content'])) ?></textarea>
                           <input type="submit" name="create" value="Ajouter Articles">
                    
                     </div>
                     
                     <!--div id="display-post" style="width:700px;" >
                     </div-->
     </form>

</div>

<?php $content=ob_get_clean();?>

<?php require('template.php'); ?>