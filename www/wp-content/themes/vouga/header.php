<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css" />
  <?php wp_head(); ?>
  </head>
  <?php include('template-parts/navbar.php'); ?>
<body>
