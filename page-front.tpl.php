<?php
global $theme_path;
include ($theme_path.'/includes/inc_header.php');
?>
<div class="content-global">


 <!-- ______________________ CONTENU HAUT _______________________ -->
 
   <?php if ($content_top): ?>
     <div class="content-top">
         <?php print $content_top; ?>
     </div> <!--/#content-top -->
 <?php endif; ?>
 <!-- ______________________ LAYOUT HOMEPAGE VERTICAL G_______________________ -->       
   <!-- ______________________ ZONE DIAPO _______________________ -->
			
            <?php if ($DiapoHP): ?>
       <div class="HPDiapoVerticalGauche"><?php print $DiapoHP; ?></div>
              <?php endif; ?>
        	 
<!-- ______________________ PARTIE DROITE _______________________ -->
      
	<div class="HPDroite">
	 
        <?php if ($PartieDroite1): ?>
     <div class="HPDroite1"><?php print $PartieDroite1; ?></div>
        <?php endif; ?>
		
     <?php if ($PartieDroite2): ?>
     <div class="HPDroite2"><?php print $PartieDroite2; ?></div>
        <?php endif; ?>

     <?php if ($PartieDroite3): ?>
     <div class="HPDroite3"><?php print $PartieDroite3; ?></div>
        <?php endif; ?>
	  
</div><!--    /Partie Droite -->
	
    <!-- ______________________ FIN LAYOUT PAGE _______________________ -->
        

        
<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div class="content-bottom-home">
      <?php print $content_bottom_home; ?>
        <?php print $feed_icons; ?>
         <?php endif; ?>
  
    </div><!-- /#content-bottom -->
   
	

</div> <!-- /content-global -->
    <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>
