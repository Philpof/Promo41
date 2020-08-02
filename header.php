<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- à la place de : lang="en" dir="ltr" -->

   <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>ACS Promo 41 - Covid 2020 !</title>

    <?php wp_head(); ?>

<!-- fonction pour le changement de background de la page "single" (Début) -->
      <?php
      $numero = rand(1, 6);
      ?>

      <style type="text/css">
        #single {
         background-image: url("<?php bloginfo('template_directory'); ?>/img/image<?php echo $numero ?>.jpg");
         background-size: cover;
         background-position: center;
        }
      </style>
<!-- fonction pour le changement de background de la page "single" (Fin) -->

  </head>

  <body <?php body_class(); ?>>
