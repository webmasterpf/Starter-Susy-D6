<!-- ______________________ FOOTER _______________________ -->
      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
<footer id="footer">
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
     <div id="bloc_stats">
         <p>V&eacute;rifier les codes pour les stats</p>
      <?php
global $theme_path;
include ($theme_path.'/js/code_stats.php');
?>
     </div>
</footer> <!-- /footer -->
      <?php endif; ?>
       
    </section> <!-- /general OR /page -->
       
	<?php print $closure ?>
     <!-- Usage de navjs pour menu responsive -->
    <script> $(function () {$(".horizontal-nav").tinyNav();});</script>
  </body>
</html>