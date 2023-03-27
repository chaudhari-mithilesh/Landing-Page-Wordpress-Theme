<?php wp_head() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> <?php wp_title(); ?> </title>
</head>

<body <?php body_class() ?>>

  <!-- Header Navbar Section -->

  <section class="header" id="home">
    <div class="navbar">
      <nav>
        <div class="heading">
          <?php //the_custom_logo()
          ?>
          <?php if (has_custom_logo()) : ?>
            <div class="site-logo">
              <h1><?php the_custom_logo(); ?></h1>
            </div>
          <?php else : ?>
            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
          <?php endif; ?>
        </div>
        <ul>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_id'        => 'primary-menu'
          ));
          ?>
        </ul>
      </nav>
    </div>
  </section>