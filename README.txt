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

Vérifier les réglages dans le fichier config.rb
Pour le thème en production, inutile d'envoyer sur le serveur les dossiers sass, fichier config.rb

Dans images
-----------

Mettre a jour les images du theme

Compilation des fichiers scss
-----------------------------
dans le terminal :
webmaster@vm-server1:~$ compass watch /var/www/drupal6/sites/all/themes/THEMENAMEFOLDER/

Usage des mixins de Susy
------------------------
Dans la logique Mobile first, la div "content" aura 5 colonnes, si c'est un écran de bureau,elle en aura 16 dont
3 vides (prefix)
#content {
  @include span-columns(5);
  @include at-breakpoint($desktop) {
    @include span-columns(13, $desktop);
    @include prefix(3, $desktop);
  }
}

Ordre et hierarchie des blocs du layout
-------------------------

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
        #content-inner
            .content-top
            .content-header
            .middle-content
            .content-bottom
        #right-content
    #footer
    #bloc_stats