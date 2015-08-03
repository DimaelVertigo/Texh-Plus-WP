<?php
/**
 * The template for displaying all single posts.
 *
 * @package Tech Plus
 */

get_header(); ?>
<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>

	<h2 class="post-title">Le Lorem Ipsum est simplement du faux</h2>
	<div class="blog-post">
		<div class="post-header clearfix">
			<!-- <img class="post-image" src="<?php bloginfo('template_url') ?>/tmp/blog-img.jpg" alt=""> -->
			<div class="post-image"><?php the_post_thumbnail(); ?></div>
			<div class="wrap-date-post"> <i class="ico-date-post"></i>
				<p class="date-post"><?php the_time('j F Y' ); ?></p>
			</div>
			<p>
				Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum.
			</p>
		</div>
		<div class="post-content">
			<p>
				<?php the_content(); ?>
			</p>
		</div>
		<div class="row post-blog-bottom">
			<div class="box-6 social-side">
				<ul class="social-share">
					<!-- <li class="ss-title">Share</li> -->
					<!-- <li class="ico-share">
						<a href="#"> <i class="share-post-vk"></i>
						</a>
					</li>
					<li class="ico-share">
						<a href="#">
							<i class="share-post-fb"></i>
						</a>
					</li>
					<li class="ico-share">
						<a href="#">
							<i class="share-post-gplus"></i>
						</a>
					</li>
					<li class="ico-share">
						<a href="#">
							<i class="share-post-tw"></i>
						</a>
					</li>
					<li class="ico-share">
						<a href="#">
							<i class="share-post-odn"></i>
						</a>
					</li> -->
				</ul>
			</div>

			<div class="box-6 nav-side">
				<ul class="nav-posts">
					<li>
						<!-- <i class="ico-post-nav-prev"></i> -->
						<?php previous_post_link('%link', 'Previous post', true); ?>
					</li>
					<li>
						<?php next_post_link('%link', 'Next post', true); ?>
						<!-- <i class="ico-post-nav-next"></i> -->
					</li>
				</ul>
			</div>

			<div class="my-paginated-posts"></div>
		</div>
	</div>
	<h3>Leave a Comment</h3>
	<div class="blog-content inner-blog-thumb">
		<?php query_posts('showposts=3&cat=1'); ?>
			<?php while (have_posts()) : the_post(); ?>
				
				<div class="blog-thumb">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php bloginfo('template_url') ?>/tmp/blog-thumb-1.jpg" alt="">
						<h4><?php the_title();?></h4>
					</a>
				</div>	

			<?php endwhile; ?>
			<?php wp_reset_query(); ?>

	</div>

	<a class="btn btn-green btn-go-home" href="<?php echo home_url(); ?>">Go to home page</a>

	<?php endwhile; // End of the loop. ?>
</div>
<div class="footer ftr-line">
		<div class="container">
			<p class="footer-desc">Copyright &#169; 2015 <strong>Tech-Plus.fr</strong> - Agence <a href="http://heartbeat.ua" target="_blank">heartbeat.ua</a></p>
		</div>
	</div>