<!DOCTYPE html>
<head>

  <title><?=get_the_title()?></title>

  <!-- meta tag header includes -->
  <meta name="author" content="SITENAME" />
  <meta name="description" content="<?=get_the_excerpt()?>" /> 
  <meta name="keywords" content="<?=$metaTags?>">
  <link rel="canonical" href="<?=wp_get_canonical_url()?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
  <meta name="robots" content="index, follow">

  <!-- compatability header includes -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- open graph header includes -->
  <meta property="og:title" content="<?=get_the_title()?>" />
  <meta property="og:url" content="<?=wp_get_canonical_url()?>" />
  <meta property="og:description" content="<?=get_the_excerpt()?>" />

  <!-- link to the compiled CSS file -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/build/main.min.css">
 
  <!-- bootstrap header includes -->
  <?php get_template_part('header/main-nav', 'main-nav'); ?>
  
</head>