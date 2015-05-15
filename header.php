<?php ini_set('error_reporting', E_ALL); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/animate.css" /> <!-- css animations/transitions -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="page-area">
        <header>
            <div class="nav-area">
                <div class="content-box">
                    <a href="/"><img class="logo" alt="Kim Saltzman Logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" /></a>
                    <nav class="nav" role="navigation">
                        <div class="menubutton">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>			
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    </nav>

                </div>
                <!-- end .content-box -->
            </div>
            <!-- end .nav-area -->
        </header>
        
        <?php if(is_front_page()) { ?>
        
		<div class="title-area">
		
			<div class="content-box">
			
				<div class="video-box">
				
				    <?php if ( is_active_sidebar( 'home-title-left' ) ) : ?>
                    <div class="widget">
                        <?php dynamic_sidebar( 'home-title-left' ); ?>
                    </div>
                    <?php endif; ?>
				
				</div>
				
				<article class="home-box" role="main">
					
				    <?php if ( is_active_sidebar( 'home-title-right' ) ) : ?>
                    <div class="widget">
                        <?php dynamic_sidebar( 'home-title-right' ); ?>
                    </div>
                    <?php endif; ?>
				
				</article>
				<!-- end .home-box -->
			
			</div>
			<!-- end .content-box -->
		
			<div class="clearfix"></div>
		
		</div>
		<!-- end .title-area -->
       
        <?php } else if(is_page(21)) { ?>
        
        <?php } else { ?>

		<div class="title-area subpage-title-area">
		
			<div class="content-box">
			
				<h1 class="subpage-title animated bounceInLeft"><?php the_title(); ?></h1>
				<h4 class="subtitle animated bounceInRight"><?php $key_name = get_post_custom_values($key = 'subtitle'); echo $key_name[0]; ?></h4>
			
			</div>
			<!-- end .content-box -->
		
			<div class="clearfix"></div>
		
		</div>
		<!-- end .title-area -->        
        
        <?php } ?> 