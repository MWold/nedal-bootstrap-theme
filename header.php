<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="Hjemmeside for Nedalsprosjektet" name="description">
	<meta content="Marius Fjeld Wold. MWold@github.com" name="author">

	<title>Nedalsprosjektet</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/images/LogoFavicon.ico" rel="icon" type="image/x-icon">
	<link href="<?php bloginfo('template_directory'); ?>/images/LogoFavicon.ico" rel="shortcut icon" type="image/x-icon">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<style id="holderjs-style" type="text/css"></style>

	<!-- Hook for plugins -->
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<body>
	<div class="navbar-wrapper">
		<div class="container">

			<div role="navigation" class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.php" class="navbar-brand"><img style=" max-height: 50px;" src="<?php bloginfo('template_directory'); ?>/images/Logo.png" /> </a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<!-- Om oss -->
							<?php wp_list_pages('include=29&title_li='); ?>
							<!-- Prosjektet -->
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="">Prosjektet <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<!-- Om Prosjektet -->
									<?php wp_list_pages('include=50&title_li='); ?>
									<!-- Bilder og Tegninger -->
									<?php wp_list_pages('include=52&title_li='); ?>
									<!-- Blog -->
									<?php wp_list_pages('include=54&title_li='); ?>
								</ul>
							</li>
							<!-- I Media -->
							<?php wp_list_pages('include=34&title_li='); ?>
							<!-- Samarbeidspartnere -->
							<?php wp_list_pages('include=40&title_li='); ?>
							<li>
								<!-- Facebook -->
								<a href="https://www.facebook.com/nedalsprosjektet">Facebook</a>
							</li>
							<!-- Kontakt -->
							<?php wp_list_pages('include=36&title_li='); ?>
							
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
