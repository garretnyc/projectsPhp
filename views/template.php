<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        
        <link rel="stylesheet" href="style.css"> 
        
        <script language="javascript"  src="https://cdn.tiny.cloud/1/q3uoorakyvu4u80qqbgvy75rerhs078u9gf9gn66z77gmdu8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        

     
    </head>
        
    <body>   <!--change to methods to $_GET different pages -->

        <header id='headerContainer'>
                <div id='navbar'>
                <img src="images/pen.png" alt="logo" />         	
              	     <ul id="list"> 
                             <li class="active">    
              	   	         <a href="#top">Accueil</a>
                             </li>
                             <li class="active">
              	              <a href="index.php?action=article&id=1">Biographie</a>
                             </li>
                             <li class="active">
                                 <a href="index.php?action=listArticles">Articles</a>
                             </li>
                             <li class="active">
                                 <a href="index.php?action=login">Contact</a>
                             </li>
                        </ul>
    
    
                </div>
                <div id='mainPhotos'>
                       <div id="slide-container">
                                    <div id="slider-images">        
              	          	          <img src="images/alaska1m.png" alt="sliderphoto" class="simages"/>
                                         <img src="images/alaska3m.png" alt="sliderphoto" class="simages"/>
                                         <hr id="thelinecolor">
                                    </div>
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>   
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                         </div>    
              	          	                              
                        <div id="headerinfo">
              	          	     <h1>   
              	          	          <span>Jean Fortroche</span> : Billet simple pour l'Alaska <br/>
                                           Nouveau Romain
              	          	     </h1>
              	          	     <p>
              	          	       Vous avez un projet web? La webagency vous aide a realiser!
              	          	     </p>
                                          
              	          	     <div id="bottonheader">
                                         <a href="#" class="headerclic">Decouvrir</a>
                         </div> <!--fonction button-->
              
                </div>
             </header>
       
      
            <?= $content?>
     
    
            <footer>
                 <div id='footersmain'>
                     <div id='footerLogo'>
                         
                     </div>
                     <ul id='iconslist'> 
                             <li>
                                <a href="">
                                   <img id="insta" src="https://wallpaperaccess.com/ig.png" alt="footer-icons" >
                                </a>
                             </li>
                             <li>
                                <a href="">
                                   <img id="fb" src="images/fb1.png" alt="footer-icons" >
                                </a>
                             </li>
                             <li>
                                <a href="">
                                   <img id="twit" src="https://wallpaperaccess.com/tw.png" alt="footer-icons" >
                                </a>
                             </li>
          
                        </ul>
                 </div>
                 <div id='footerDescription'>
                     <p>Project Php Enxi.L</p>
        
                 </div>
   
             </footer>
   
       <script language="javascript"  type="text/javascript">
                 tinymce.init({
                  selector: '#elm1'
               
                });
       </script>
    </body>
</html>
