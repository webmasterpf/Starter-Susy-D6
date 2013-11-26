// $Id: README.txt,v 1.1 02∕04∕2011

ABOUT THEME
-----------

Thème RWD pour les sites de l'Association développés sous Drupal 6.
Thème développé avec Sass - Compass - Susy

REGLAGES A FAIRE
----------------

dans template.php :
remplacer le nom du theme dans les fonctions necessaires.

Changer le nom du fichier .info

Changer le favicon
Changer le screenshot
Changer le logo

dans fichiers tpl
remplacer le nom du theme dans les appels d'includes
<pre>
 <?php
$theme_path = drupal_get_path('theme', 'starterd6_pf_rwd'); //Nom du thème idem nom du fichier .info
include ($theme_path.'/chemin/vers/fichier.php');
?>
</pre>

Vérifier les réglages dans le fichier config.rb
Pour le thème en production, inutile d'envoyer sur le serveur les dossiers sass, fichier config.rb

Dans images
-----------

Mettre a jour les images du theme

Compilation des fichiers scss
-----------------------------
dans le terminal :
user@vm-server1:~$ compass watch /PATH/TO/THEMENAMEFOLDER/

Usage des mixins de Susy
------------------------
Dans la logique Mobile first, la div "content" aura 5 colonnes, si c'est un écran de bureau,elle en aura 16 dont
3 vides (prefix)
<pre>
#content {
  @include span-columns(5);
  @include at-breakpoint($desktop) {
    @include span-columns(13, $desktop);
    @include prefix(3, $desktop);
  }
}
</pre>
Ordre et hierarchie des blocs du layout
-------------------------
<pre>
#general
    #header
        #header-inner
            .headHaut
                .logoHead
                .menuImg
            .headBas
                .site-slogan
                .headSearch
                .menuHead
    #content-global
        #left-content
        .content-top
        .content-top-node
        #content-inner
            .content-header
            .middle-content
        .content-bottom
        #right-content
    #footer
    #bloc_stats
</pre>

Compass plugins
---------------

Zocial : pour les boutons des RS
Compass Recipes : mixin css3

 Breakpoints pour SUSY
----------------------------------
<pre>
 @include at-breakpoint ($mobile){}
 @include at-breakpoint ($desktop){}
 @include at-breakpoint ($tablet){}
</pre>