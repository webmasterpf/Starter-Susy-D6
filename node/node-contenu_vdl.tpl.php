<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         * .col1_layout_215_520_235{} .col2_layout_215_520_235{} .col3_layout_215_520_235{}
         */?>
        <div class="col1_layout_3_8_3">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="vdl_titre"><?php print $title; ?></h1>
            <?php endif; ?>
            
                      
            <?php if ($node->field_passerelle_form[0]['view']): ?>
            <div class="vdl-passerelle">
   <?php  print  $node->content['field_passerelle_form']['field']['#title'].'<br/>'.$node->field_passerelle_form[0]['view'];  ?>
            </div>
            <?php endif;?>
            
            
            <?php if ($node->field_illustration_vdl[0]['view']): ?>
            <div class="vdl-illustration">
                    <?php  print $node->field_illustration_vdl[0]['view']  ?>
            </div>
            <?php endif;?>
            
                
                <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div class="col2_layout_3_8_3 vdl-content">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            
                <?php if ($node->field_video_vdl[0]['view']): ?>
            <aside class="vdl-video">
                    <?php  print $node->field_video_vdl[0]['view']  ?>
            </aside>
            <?php endif;?>
                
                <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
            <aside class="vdl-galerie-image">
                    <?php  print $node->field_choix_galerie_vdl[0]['view']  ?>
            </aside>
            <?php endif;?>
                
                
            </div>
             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_2.php');
              ?>

        </div>

        <!--______________COLONNE 3________________ -->
        <div class="col3_layout_3_8_3">
            <?php if ($node->field_liste_doc_joint[0]['view']): ?>
            <div class="vdl-liste-docs">
                    <?php  print $node->field_liste_doc_joint[0]['view']  ?>
            </div>
            <?php endif;?>
                    <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_3.php');
              ?>
            
            <!--***********!!!!!!  EXEMPLE DE CHAMP CCK INCLUS AVEC CONDITION !!!!!!!!************ -->
            <?php if ($node->nom_du_champ[0]['view']): ?>
            <div class="nom-css">
                    <?php  print $node->nom_du_champ[0]['view']  ?>
            </div>
            <?php endif;?>


        </div>

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->