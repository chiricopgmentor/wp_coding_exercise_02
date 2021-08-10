<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://unpkg.com/sanitize.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@700&family=Noto+Serif:ital,wght@0,700;1,700&display=swap" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body class="js_body">
  <div class="ly_header_wrapper">
    <header class="ly_header js_header">
      <div class="ly_header_inner">
        <h1 class="el_siteTitle">
          <a href="<?php bloginfo('url'); ?>/">Cresta Design</a>
        </h1>
        <nav class="bl_headerNav js_headerNav">
          <!-- <ul>
              <li>
                <a class="bl_headerNav_link js_headerNav_link" href="#concept"
                  >Concept</a
                >
              </li>
              <li>
                <a class="bl_headerNav_link js_headerNav_link" href="#works"
                  >Works</a
                >
              </li>
              <li>
                <a class="bl_headerNav_link js_headerNav_link" href="#service"
                  >Service</a
                >
              </li>
              <li>
                <a class="bl_headerNav_link js_headerNav_link" href="#contact"
                  >Contact</a
                >
              </li>
            </ul> -->
          <?php wp_nav_menu(array(
            'theme_location' => 'place_global',
            'container'     => '',
            'menu_class'    => '',
            'items_wrap' => '<ul>%3$s</ul>',
          ));
          ?>
        </nav>
        <button class="bl_humburgerBtn js_humburgerBtn sp_only">
          <span class="
                bl_humburgerBtn_bar bl_humburgerBtn_bar__top
                js_humburgerBtn_bar__top
              "></span>
          <span class="
                bl_humburgerBtn_bar bl_humburgerBtn_bar__mid
                js_humburgerBtn_bar__mid
              "></span>
          <span class="
                bl_humburgerBtn_bar bl_humburgerBtn_bar__btm
                js_humburgerBtn_bar__btm
              "></span>
        </button>
      </div>
      <!-- /.ly_header_inner -->
    </header>
  </div>