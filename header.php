<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Tech Plus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Tech-plus.fr">
<meta name="Indentifier-URL" content="http://tech-plus.fr">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, maximum-scale=1.0 user-scalable=yes">
<title><?php the_field('site-title') ?></title>
<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url') ?>/favicon.ico">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="main-header">
		<div class="main-header-top">
			<div class="container clearfix">
				<h1 class="main-logo"><?php the_field('main-logo') ?>
					<img src="<?php bloginfo('template_url') ?>/assets/images/m-logo-2x.png" alt="">
				</h1>
				<ul class="main-nav">
					<li class="level-one">
						<a href="#company"><?php the_field('main-nav_level-one_link_1') ?></a>
					</li>
					<li class="level-one">
						<a href="#offer-you"><?php the_field('main-nav_level-one_link_2') ?>
							<i class="menu-arr"></i>
						</a>
						<ul class="sub-menu">
							<li class="level-two">
								<a href="#hospitals"><?php the_field('main-nav_sub-menu_link_1') ?></a>
							</li>
							<li class="level-two">
								<a href="#army"><?php the_field('main-nav_sub-menu_link_2') ?></a>
							</li>
							<li class="level-two">
								<a href="#renting"><?php the_field('main-nav_sub-menu_link_3') ?></a>
							</li>
							<li class="level-two">
								<a href="#tunnels"><?php the_field('main-nav_sub-menu_link_4') ?></a>
							</li>
							<li class="level-two">
								<a href="#cables"><?php the_field('main-nav_sub-menu_link_5') ?></a>
							</li>
							<li class="level-two">
								<a href="#animals"><?php the_field('main-nav_sub-menu_link_6') ?></a>
							</li>
						</ul>
					</li>
					<li class="level-one">
						<a href="#fluids"><?php the_field('main-nav_level-one_link_3') ?></a>
					</li>
					<li class="level-one">
						<a href="#training"><?php the_field('main-nav_level-one_link_4') ?></a>
					</li>
					<li class="level-one langue-nav">
						<span class="btn-sub-menu">
							<i id="icon-lang" class="lang-fr"></i>
							<i class="menu-arr"></i>
						</span>
						<ul class="sub-menu">
							<li class="level-two">
								<a href="/?lang=en">
									<i class="lang-en"></i>
								</a>
							</li>
							<li class="level-two">
								<a href="/?lang=de">
									<i class="lang-de"></i>
								</a>
							</li>
							<li class="level-two">
								<a href="/?lang=it">
									<i class="lang-it"></i>
								</a>
							</li>
							<li class="level-two">
								<a href="/?lang=es">
									<i class="lang-es"></i>
								</a>
							</li>
							<li class="level-two">
								<a href="/?lang=fr">
									<i class="lang-fr"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="level-one contact-us">
						<a href="#contacts" class="btn btn-green"><?php the_field('level-one_contact-us_button') ?></a>
					</li></ul>
				<div class="btn-mobile-menu">
					<i class="btn-ico-mm"></i>
				</div>
			</div>
		</div>
		<div class="main-header-bottom">
			<div class="container">
				<div class="mh-slide-1">
					<h2><?php the_field('mh-slide-1-title1') ?></h2>
					<h3><?php the_field('mh-slide-1-title2') ?></h3>
					<h4><?php the_field('mh-slide-1-title3') ?></h4>
					<ul class="slider-list">
						<?php 
	                        if( have_rows('slider-list') ):
	                            while ( have_rows('slider-list') ) : the_row();
	                                ?>
	                            <li class="prepare-anim"> 
	                            <?php the_sub_field('slider-list-item'); ?>
	                            </li>
	                            <?php endwhile;
	                        else :
	                        endif; 
	                    ?>
					</ul>
				</div>
			</div>
		</div>
	</div>