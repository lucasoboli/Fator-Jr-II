  <!DOCTYPE html>
<html <?php language_attributes(); ?> <?php if(is_page('home')): ?> <?php endif; ?> >
<head>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5922381776be7313d291dc39/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
  <!--End of Tawk.to Script-->

  <!--START Scripts : this is the script part you can add to the header of your theme-->
  <script type="text/javascript" src="https://fatorjunior.com.br/wp-includes/js/jquery/jquery.js?ver=2.7.13"></script>
  <script type="text/javascript" src="https://fatorjunior.com.br/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-pt.js?ver=2.7.13"></script>
  <script type="text/javascript" src="https://fatorjunior.com.br/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.7.13"></script>
  <script type="text/javascript" src="https://fatorjunior.com.br/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.13"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"https://fatorjunior.com.br/wp-admin/admin-ajax.php","loadingTrans":"Carregando..."};
    /* ]]> */
  </script><script type="text/javascript" src="https://fatorjunior.com.br/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.13"></script>
  <!--END Scripts-->

  <meta charset="<?php bloginfo('charsert'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );?>
  <!--Boostrap4-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <!--Font Awesome -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Font Montserrat -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
  <!-- Font Raleway -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
  <!-- Font Lora -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400i" rel="stylesheet">
  <!--Style.css-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <title><?php bloginfo('name'); ?></title>
  <link rel="icon" href="https://fatorjunior.com.br/wp-content/uploads/2017/09/logo.png" type="image/x-icon">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onscroll="myFunction()" <?php if(is_page('home') || is_page(540)): ?> class="ajust_body" <?php endif; ?>  >

  <header>
    <?php if(is_page('home') || is_page(540)): ?>
     <!--video -->
     <div class="screen col-md-12">
      <video autoplay loop muted class="img-fluid background_video">
        <source src="https://fatorjunior.com.br/wp-content/uploads/2017/11/final3.mp4" type="video/mp4">
        </video> 
    </div>
    <!-- END Video -->
  <?php endif; ?>

  <!-- Navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light site_nav" >

    <a class="navbar-brand" href="https://fatorjunior.com.br/"><img width="60" src="https://fatorjunior.com.br/wp-content/uploads/2017/10/logo.png"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 7.16em;" >
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    $args = array(
      'theme_location' => 'primary',
      'menu_id' 		 => 'navbar',
      'menu_class'     => 'navbar-nav',
      'container_id'   => 'navbarSupportedContent',
      'container_class'  => 'collapse navbar-collapse'
      );?>

      <?php wp_nav_menu($args);?>  

    </nav>
    <!-- END Navbar-->
    <div id="servicos"></div>
  </header>