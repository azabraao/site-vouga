<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
  <?php
		/**
		 * Display the correct title
		 */
		if(is_home()):
			bloginfo('name');
		elseif( is_category() || is_tag()):
			single_cat_title(); echo ' | '; bloginfo('name');
		elseif( is_single() || is_page() ):
			single_post_title(); echo ' | Vouga';
		elseif(is_tax()):
			echo 'Linha ' . $term;
		else:
			wp_title( ' | ', true, 'right' );
			bloginfo('name');
		endif;
  ?>
  </title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css" />
  <?php wp_head(); ?>
  </head>
  <?php include('template-parts/navbar.php'); ?>
<body <?php body_class();?> >
