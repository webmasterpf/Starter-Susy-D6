<!-- ______________________ FOOTER _______________________ -->
      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
<footer id="footer">
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
</footer> <!-- /footer -->
      <?php endif; ?>
        <div id="bloc_stats">
      V&eacute;rifier les codes pour les stats
      <?php
global $theme_path;
include ($theme_path.'/js/code_stats.php');
?>
     </div>
    </section> <!-- /general OR /page -->
	<?php print $closure ?>
  </body>
</html>