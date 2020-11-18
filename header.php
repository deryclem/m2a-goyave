<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/site.css"></style>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/header.css"></style>
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>

    </head>
    <!--<body>
      <header>
        <div class="concept concept-three">
    <div class="word">
      <div class="hover">

  </div>
        <fieldset>
            <h1><?php //bloginfo( 'name' ); ?></h1>

        <nav id="menuprincipal">
          <div id="legendemenuprincipal"></div>
          <?php //wp_page_menu('show_home=1'); ?>
        </nav>
      </fieldset>
    </header>-->
<body>
<header>
  <section>

  <div class="headercontainer">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri();?>/images/test.png" alt="logo m2a maçonnerie d'antan et d'aujoud'hui">
    </div>
    <section class="contact">
      <div class="tel">
			        <img src="<?php echo get_template_directory_uri();?>/images/tel.png">
			        <p class="texteicone">06 74 11 63 45</p>
			      </div>
            <div class="mail">
			        <img src="<?php echo get_template_directory_uri();?>/images/mail.png">
			        <p class="texteicone">pa.flamens.@orange.fr</p>
			    </div>
          <div class="boutondevis">
            <div class ="rectangle">
              <p class="textebouton">Demande de devis</p>
            </div>
          </div>

          <nav id="menuprincipal">
            <div id="legendemenuprincipal">
              <div class="menu">
                <ul>
                  <li class="current_page_item">
                    <a href="http://m4aderys.fr/">Accueil</a>
                  </li>
                  <li class="page_item">
                    <a href="http://m4aderys.fr/savoir-faire/">Savoir-Faire</a>
                  </li>
                  <li class="page_item">
                    <a href="http://m4aderys.fr/a-propos/">À Propos</a>
                  </li>
                  <li class="page_item">
                    <a href="http://m4aderys.fr/realisations/">Réalisations</a>
                  </li>
                  <li class="page_item">
                    <a href="http://m4aderys.fr/contact/">Contact</a>
                  </li>
                </ul>
            </div>


          </nav>


    </div>
  </div>
</section>



</header>
</body>
