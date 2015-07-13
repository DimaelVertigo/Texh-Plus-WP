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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="main-header">
		<div class="main-header-top">
			<div class="container clearfix">
				<h1 class="main-logo">
					Tech Plus | Le spécialiste en hyperbarie et fluides médicaux
					<img src="assets/images/m-logo-2x.png" alt="">
				</h1>
				<ul class="main-nav">
					<li class="level-one"><a href="#company">Société</a></li>
					<li class="level-one">
						<a href="#offer-you">Caissons<i class="menu-arr"></i></a>
						<ul class="sub-menu">
							<li class="level-two"><a href="#hospitals">Hospitaliers</a></li>
							<li class="level-two"><a href="#army">Armées</a></li>
							<li class="level-two"><a href="#renting">Location</a></li>
							<li class="level-two"><a href="#tunnels">Tunnelier</a></li>
							<li class="level-two"><a href="#cables">Cables</a></li>
							<li class="level-two"><a href="#animals">Animaux</a></li>
						</ul>
					</li>
					<li class="level-one"><a href="#fluids">Fluides médicaux</a></li>
					<li class="level-one"><a href="#services">Nos formations</a></li>
					<li class="level-one langue-nav">
						<span class="btn-sub-menu"><i class="lang-fr"></i><i class="menu-arr"></i></span>
						<ul class="sub-menu">
							<li class="level-two"><a href="#"><i class="lang-eng"></i></a></li>
							<li class="level-two"><a href="#"><i class="lang-de"></i></a></li>
							<li class="level-two"><a href="#"><i class="lang-it"></i></a></li>
						</ul>
					</li>
					<li class="level-one contact-us">
						<a href="#contacts" class="btn btn-green">Contactez Nous</a>
					</li>
				</ul>
				<div class="btn-mobile-menu">
					<i class="btn-ico-mm"></i>
				</div>
			</div>
		</div>

		<div class="main-header-bottom">
			<div class="container">
				<div class="mh-slide-1">
					<h2>Le spécialiste en</h2>
					<h3>hyperbarie et fluides médicaux</h3>
					<h4>Fournitures de caissons hyperbares pour</h4>
					<ul class="slider-list">
						<li class="prepare-anim">— Centres hospitaliers</li>
						<li class="prepare-anim">— Armées (nationale et étrangères)</li>
						<li class="prepare-anim">— Tunneliers</li>
						<li class="prepare-anim">— Test de cables éléctriques</li>
						<li class="prepare-anim">— Recherche pétrolière</li>
						<li class="prepare-anim">— Plongée industrielle</li>
						<li class="prepare-anim">— Thérapeutiques animales</li>
					</ul>
				</div>
			</div>
		</div>
	</div>