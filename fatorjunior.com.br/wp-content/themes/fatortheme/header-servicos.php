<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google AdWords: 853186844 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-853186844"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'AW-853186844');
	</script>
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
	<!-- Google Code for tawk.to Chat Conversion -->
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>
	<script type="text/javascript">

		var Tawk_API = Tawk_API || {};
		Tawk_API.onChatStarted = function(){   

			gtag('event', 'conversion', {'send_to': 'AW-853186844/kuMfCJqiiXEQnLLqlgM'});

			window.google_trackConversion({
				google_conversion_id : 853186844,
				google_conversion_label : "kuMfCJqiiXEQnLLqlgM",
				google_remarketing_only : false,
			});

		};
	</script>

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
	<meta name="author" content="byron.solutions">
	<meta name="robots" content="index, follow">
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
	<link rel="icon" href="https://fatorjunior.com.br/wp-content/uploads/2017/10/engrenagemfator_vetorizada-1.png" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onscroll="myFunction()">

	<header>
		<!-- Navbar -->
		<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light site_nav" >

			<a class="navbar-brand col-md-1" href="https://fatorjunior.com.br/"><img width="60" src="https://fatorjunior.com.br/wp-content/uploads/2017/10/logo.png"></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 7.16em;" >
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navbarSupportedContent" class="collapse navbar-collapse col-md-10 justify-content-between">
				<?php
				$args = array(
					'theme_location' => 'servicos',
					'menu_id' 		 => 'navbar',
					'menu_class'     => 'navbar-nav'
					);?>

					<?php wp_nav_menu($args);?> 

					<?php get_sidebar('navbar'); ?> 

				</div>

			</nav>
			<!-- END Navbar-->
			<div id="servicos"></div>
		</header>