<?php
global $theme_path;
include ($theme_path.'/includes/inc_header.php');
?>
<div id="mainContent">
 <!-- ______________________ LAYOUT HOMEPAGE HORIZONTAL _______________________ 
  ______________________ CONTENU _______________________ 

          <?php if ($content_top): ?>
            <div class="content-top">
              <?php print $content_top; ?>
            </div>  /#content-top 
          <?php endif; ?>

    ______________________ ZONE DIAPO _______________________ 
			
              <?php if ($DiapoHP): ?>
                 <div class="HPDiapo"><?php print $DiapoHP; ?></div>
              <?php endif; ?>
        
<br clear="all"/>


 ______________________ PARTIE BAS GAUCHE _______________________ 
                 <?php if ($HPBasGauche): ?>
                 <div class="HPBasGauche"><?php print $HPBasGauche; ?></div>
              <?php endif; ?>  
		 
 ______________________ PARTIE BAS DROITE _______________________ 
   
        <?php if ($HPBasDroit): ?>
     <div class="HPBasDroit"><?php print $HPBasDroit; ?></div>
        <?php endif; ?>

	<br clear="all"/>
 ______________________ FIN LAYOUT PAGE _______________________ -->
	
	
	 </div> <!-- /mainPage -->
        <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>