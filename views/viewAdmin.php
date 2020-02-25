<?php $title = 'Page Billet';  ?>

<?php ob_start(); ?>

 <section id='adminlogin'>
        <div id='adminContainer'>
             <form  action="index.php?action=admin" method='post' id='identify'>
                  <h2>Login Administors</h2>
                    <div class='loginElt'>
                        <label for="Identifiant">Votre Identifiant: </label><br />
                        <input type="text" name="peusdo" id="peusdo"/>
                    </div>
                    <div class='loginElt'>
                          <label for="pass">Votre Mot de Passe: </label><br />
                          <input type="password" name="pass" id="password">
                    </div>
                    <div id='buttonElt'>
                         <input type="submit" value="Se Connecter" id='button'>
                    </div>
             </form>
             <div id='buttonAdminDeconnexion'>
                  <a href="index.php?action=deconnexion">Deconnexion</a>
             </div>
        </div>
        <div id='inscriptionContainer'>
               <form action="index.php?action=inscription" method="POST" id="form_inscr">
                   <h1>Formulaire d'inscription</h1>
                   <div class="form_line"><label>pseudo :</label><input type="text" name="pseudo" required></div>
                   <div class="form_line"><label>mot de passe :</label><input type="password" name="mdp" required></div>
                   <div class="form_line"><label>confirmer mot de passe :</label><input type="password" name="confirm_mdp" required></div>
                   <input type="submit" name="sub" value="confirmer vos informations">
               </form>
        </div>
 </section>
<?php $content = ob_get_clean(); ?>





<?php require('template.php'); ?>