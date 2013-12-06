<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <meta charset="utf-8">
    <title><?php print $head_title; ?></title>
    <!-- Meta RWD -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- stats-SEO -->
    <meta name="google-site-verification" content="" />
    <meta name="y_key" content=""/>
    <meta name="msvalidate.01" content="" />
    <?php print $head; ?>
    <?php print $styles; ?>

    <?php print $scripts; ?>
    <script src="<?php print $base_path . path_to_theme() ?>/js/typos.js" type="text/javascript" charset="utf-8"></script>

 <?php
$theme_path = drupal_get_path('theme', 'starterd6_pf_susy'); 
include ($theme_path.'/js/google_font.php');
?>
  </head>

 <body class="<?php print $body_classes; ?>">

     <section class="container">

<h1>The 10 column complex nested grid AG test</h1>

<div class="ag ag1">
  <h2>AG 1</h2>
</div>
<!-- /ag1 -->

<!-- ag3 to ag7 are nested within ag2.-->
<div class="ag ag2">
  <h2>AG 2</h2>
  <div class="ag ag4">
    <h2>AG 4</h2>
  </div>
  <div class="ag ag5">
    <h2>AG 5</h2>
  </div>
  <div class="ag ag6">
    <h2>AG 6</h2>
  </div>

  <!-- ag8, ag9 and ag10 are nested within ag7 -->
  <div class="ag ag7">
    <h2>AG 7</h2>
    <div class="ag ag8">
      <h2>AG 8</h2>
    </div>
    <div class="ag ag9">
      <h2>AG 9</h2>
    </div>
    <div class="ag ag10">
      <h2>AG 10</h2>
    </div>
  </div>
  <!-- /ag7 -->
</div>
<!-- /ag2 -->

<div class="ag ag3">
  <h2>AG 3</h2>
</div>
<!-- /ag3 -->

     </section>
<!-- /container -->
<?php print $closure ?>
  </body>
</html>