<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,400i,600,600i,700,800,900|Nunito:200,200i,300,300i,400" rel="stylesheet">
	<link rel="stylesheet" href="http://localhost:8888/datawaves/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost:8888/datawaves/css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<nav class="bg-green-nav">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-12 col-lg-12">
							<ul class="right">
								<li><p>info@datawaves.com</p></li>   
								<li><p>Tel. (54-11) 4777-7707</p></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<nav class="main-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="brandbox">
							<img src="http://localhost:8888/datawaves/images/logo.png" width="100%" height="auto" alt="">
						</div>
						<?php wp_nav_menu( array( 
							'theme_location' => 'main-menu',
							'menu_class'=> 'right desktop',
        					'after' => '<div class="line-header"></div>'
							) ); ?>
					</div>					
				</div>
			</div>
		</nav>
		</header>
		<div id="container">

