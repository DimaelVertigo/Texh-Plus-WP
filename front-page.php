<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tech Plus
 */

get_header(); ?>

	<div class="sections">
		<div class="section company">
			<div class="container">
				<h2 class="title title-center"><?php the_field('company-title1') ?></h2>
				<div class="row sub-content">
					<div class="m-box-6">
						<p class="orange-line"><?php the_field('company-description1') ?></p>
					</div>
					<div class="m-box-6">
						<p><?php the_field('company-description2') ?></p>
					</div>
				</div>
				<h3 class="second-title st-center"><?php the_field('company-title2') ?></h3>
				<ul class="icon-activity">
					<li class="ia-item">
						<span class="ia-wrap"><i class="ico-a-1 prepare-anim-item"></i></span>
						<h6><?php the_field('icon-activity-text1') ?></h6>
					</li>
					<li class="ia-item">
						<span class="ia-wrap"><i class="ico-a-2 prepare-anim-item"></i></span>
						<h6><?php the_field('icon-activity-text2') ?></h6>
					</li>
					<li class="ia-item">
						<span class="ia-wrap"><i class="ico-a-3 prepare-anim-item"></i></span>
						<h6><?php the_field('icon-activity-text3') ?></h6>
					</li>
					<li class="ia-item">
						<span class="ia-wrap"><i class="ico-a-7 prepare-anim-item"></i></span>
						<h6><?php the_field('icon-activity-text4') ?></h6>
					</li>
					<li class="ia-item">
						<span class="ia-wrap"><i class="ico-a-4 prepare-anim-item"></i></span>
						<h6><?php the_field('icon-activity-text5') ?></h6>
					</li>
					<li class="ia-item">
						<span class="ia-wrap"><i class="ico-a-5 prepare-anim-item"></i></span>
						<h6><?php the_field('icon-activity-text6') ?></h6>
					</li>
					<li class="ia-item">
						<span class="ia-wrap"><i class="ico-a-6 prepare-anim-item"></i></span>
						<h6><?php the_field('icon-activity-text7') ?></h6>
					</li>
				</ul>
			</div>

			<div class="activity-medicine">
				<div class="container">
					<h6><?php the_field('activity-medicine-title') ?></h6>
					<div class="row">
						<div class="m-box-6">
							<p class="title-list"><?php the_field('activity-medicine-list-title1') ?></p>
							<ul class="def-list">
								<li><?php the_field('activity-medicine-list-item1') ?></li>
								<li><?php the_field('activity-medicine-list-item2') ?></li>
							</ul>
						</div>
						<div class="m-box-6">
							<p class="title-list"><?php the_field('activity-medicine-list-title2') ?></p>
							<ul class="def-list">
								<li><?php the_field('activity-medicine-list-item3') ?></li>
								<li><?php the_field('activity-medicine-list-item4') ?></li>
								<li><?php the_field('activity-medicine-list-item5') ?></li>
							</ul>
							<ul class="def-list">
								<li><?php the_field('activity-medicine-list-item6') ?></li>
								<li><?php the_field('activity-medicine-list-item7') ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="full-size-gallery">

				<ul class="gall-picture" itemscope itemtype="http://schema.org/ImageGallery">
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-1.jpg" itemprop="contentUrl" data-size="1024x605" data-index="0">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-1.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-2.jpg" itemprop="contentUrl" data-size="1024x605" data-index="1">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-2.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-3.jpg" itemprop="contentUrl" data-size="1024x605" data-index="2">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-3.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-4.jpg" itemprop="contentUrl" data-size="1024x605" data-index="3">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-4.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
				</ul>

			</div>
		</div>

		<div class="section offer-you">
			<div class="container">
				<h2 class="title title-center"><?php the_field('offer-you-title') ?></h2>
				<h6><?php the_field('offer-you-title2') ?></h6>
				<div class="row sub-content">
					<div class="m-box-6">
						<ul class="def-list">
							<?php 
							    if( have_rows('offer-you-list1') ):
							        while ( have_rows('offer-you-list1') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('offer-you-list-item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</div>
					<div class="m-box-6">
						<ul class="def-list">
							<?php 
							    if( have_rows('offer-you-list2') ):
							        while ( have_rows('offer-you-list2') ) : the_row();
							            ?>
							        <li class="prepare-anim"> 
							        	<?php the_sub_field('offer-you-list-item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="threed-zone">
				<div class="container">
					<div class="h3-header">
						<div class="left-side">
							<h3><?php the_field('threed-zone-title') ?></h3>
							<p class="sub-title"><?php the_field('threed-zone-subtitle') ?></p>
						</div>
						<div class="right-side orange-line">
							<ul class="def-list">
								<?php 
								    if( have_rows('threed-zone-list1') ):
								        while ( have_rows('threed-zone-list1') ) : the_row();
								            ?>
								        <li> 
								        	<?php the_sub_field('threed-zone-list-item'); ?>
								        </li>
								        <?php endwhile;
								    else :
								    endif; 
								?>
							</ul>
							<ul class="def-list">
								<?php 
								    if( have_rows('threed-zone-list2') ):
								        while ( have_rows('threed-zone-list2') ) : the_row();
								            ?>
								        <li> 
								        	<?php the_sub_field('threed-zone-list-item'); ?>
								        </li>
								        <?php endwhile;
								    else :
								    endif; 
								?>
							</ul>
						</div>
					</div>
				</div>
				<div class="threed-model">
					<h3 class="three-d-info">
						<i class="ico-mouse"></i>
						<span class="info-text"><?php the_field('threed-model') ?></span>
					</h3>
					<!-- 3d model here -->
				</div>
			</div>
		</div>

		<div class="section hospitals">
			<div class="container">
				<div class="h2-header">
					<div class="left-side">
						<h2><?php the_field('hospitaliers-title') ?></h2>
					</div>
					<div class="right-side orange-line">
						<p><?php the_field('hospitaliers-description') ?></p>
					</div>
				</div>
				<h3 class="second-title st-center"><?php the_field('hospitaliers-second-title') ?></h3>
				<div class="row sub-content">
					<div class="m-box-6">
						<p class="title-list"><?php the_field('hospitaliers-title-list1') ?></p>
						<ul class="def-list">
							<?php 
							    if( have_rows('hospitals-list1') ):
							        while ( have_rows('hospitals-list1') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('hospitals-list1-item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</div>
					<div class="m-box-6">
						<p class="title-list"><?php the_field('hospitaliers-title-list2') ?></p>
						<ul class="def-list">
							<?php 
							    if( have_rows('hospitals-list2') ):
							        while ( have_rows('hospitals-list2') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('hospitals-list2-item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="full-size-gallery">

				<ul class="gall-picture" itemscope itemtype="http://schema.org/ImageGallery">
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-5.jpg" itemprop="contentUrl" data-size="1024x605" data-index="0">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-5.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-1.jpg" itemprop="contentUrl" data-size="1024x605" data-index="1">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-6.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-5.jpg" itemprop="contentUrl" data-size="1024x605" data-index="2">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-7.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-1.jpg" itemprop="contentUrl" data-size="1024x605" data-index="3">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-8.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
				</ul>

			</div>

		</div>

		<div class="section army">
			<div class="container">
				<div class="h2-header">
					<div class="left-side">
						<h2><?php the_field('army-title') ?></h2>
						<p class="h2-sub-text"><?php the_field('army-title-sub-text') ?></p>
					</div>
					<div class="right-side orange-line">
						<p><?php the_field('army-description') ?></p>
					</div>
				</div>
				<div class="row sub-content">
					<div class="m-box-4">
						<p class="title-list"><?php the_field('army-list-title') ?></p>
						<ul class="def-list">
							<?php 
							    if( have_rows('army-list') ):
							        while ( have_rows('army-list') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('army-list-item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</div>
					<div class="m-box-8">
						<h6><?php the_field('army-description2') ?></h6>
					</div>
				</div>
			</div>

			<div class="full-size-gallery">
				
				<ul class="gall-picture" itemscope itemtype="http://schema.org/ImageGallery">
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-5.jpg" itemprop="contentUrl" data-size="1024x605" data-index="0">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-9.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-1.jpg" itemprop="contentUrl" data-size="1024x605" data-index="1">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-10.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-5.jpg" itemprop="contentUrl" data-size="1024x605" data-index="2">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-4.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-1.jpg" itemprop="contentUrl" data-size="1024x605" data-index="3">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-6.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
				</ul>

			</div>
		</div>

		<div class="section renting">
			<div class="container">
				<div class="h2-header">
					<div class="left-side">
						<h2><?php the_field('renting-title') ?></h2>
						<p class="h2-sub-text"><?php the_field('renting-title-sub-text') ?></p>
					</div>
					<div class="right-side orange-line">
						<p><?php the_field('renting-description') ?></p>
					</div>
				</div>
				<ul class="icons-renting">
					<li class="icons-renting-item">
						<div class="icons-renting-header">
							<span class="wrap-circle prepare-anim">
								<span class="wrap-ico-rh">
									<i class="irh-1"></i>
								</span>
							</span>
							<h5><?php the_field('renting-list1-title') ?></h5>
						</div>
						<ul class="def-list">
							<?php 
							    if( have_rows('renting-list1') ):
							        while ( have_rows('renting-list1') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('renting-list-item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</li>
					<li class="icons-renting-item">
						<div class="icons-renting-header">
							<span class="wrap-circle prepare-anim">
								<span class="wrap-ico-rh">
									<i class="irh-2"></i>
								</span>
							</span>
							<h5><?php the_field('renting-list2-title') ?></h5>
						</div>
						<ul class="def-list">
							<?php 
							    if( have_rows('renting-list2') ):
							        while ( have_rows('renting-list2') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('renting-list-item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</li>
					<li class="icons-renting-item">
						<div class="icons-renting-header">
							<span class="wrap-circle prepare-anim">
								<span class="wrap-ico-rh">
									<i class="irh-3"></i>
								</span>
							</span>
							<h5><?php the_field('renting-list3-title') ?></h5>
						</div>
						<ul class="def-list">
							<?php 
							    if( have_rows('rentinglist3') ):
							        while ( have_rows('rentinglist3') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</li>
					<li class="icons-renting-item">
						<div class="icons-renting-header">
							<span class="wrap-circle prepare-anim">
								<span class="wrap-ico-rh">
									<i class="irh-4"></i>
								</span>
							</span>
							<h5><?php the_field('renting-list4-title') ?></h5>
						</div>
						<p><?php the_field('rentinglist4') ?></p>
					</li>
					<li class="icons-renting-item">
						<div class="icons-renting-header">
							<span class="wrap-circle prepare-anim">
								<span class="wrap-ico-rh">
									<i class="irh-5"></i>
								</span>
							</span>
							<h5><?php the_field('renting-list5-title') ?></h5>
						</div>
						<ul class="def-list">
							<?php 
							    if( have_rows('renting-list5') ):
							        while ( have_rows('renting-list5') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('renting-list-item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</li>
					<li class="icons-renting-item">
						<div class="icons-renting-header">
							<span class="wrap-circle prepare-anim">
								<span class="wrap-ico-rh">
									<i class="irh-6"></i>
								</span>
							</span>
							<h5><?php the_field('renting-list6-title') ?></h5>
						</div>
						<p><?php the_field('rentinglist6') ?></p>
					</li>
				</ul>
			</div>

			<div class="full-size-gallery">
				
				<ul class="gall-picture" itemscope itemtype="http://schema.org/ImageGallery">
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-1.jpg" itemprop="contentUrl" data-size="1024x605" data-index="0">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-11.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-2.jpg" itemprop="contentUrl" data-size="1024x605" data-index="1">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-12.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-3.jpg" itemprop="contentUrl" data-size="1024x605" data-index="2">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-7.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-4.jpg" itemprop="contentUrl" data-size="1024x605" data-index="3">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-1.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
				</ul>

			</div>

		</div>

		<div class="section tunnels">
			<div class="container">
				<div class="h2-header">
					<div class="left-side">
						<h2><?php the_field('tunnels-title') ?></h2>
						<p class="h2-sub-text"><?php the_field('tunnels-title-sub-text') ?></p>
					</div>
					<div class="right-side orange-line">
						<p><?php the_field('tunnels-description') ?></p>
					</div>
				</div>
				<div class="row sub-content">
					<div class="m-box-6">
						<p class="simple-parag"><?php the_field('tunnels-simple-paragraph1') ?></p>
						<p class="simple-parag"><?php the_field('tunnels-simple-paragraph2') ?></p>
						<p><?php the_field('tunnels-simple-paragraph3') ?></p>
					</div>
					<div class="m-box-6">
						<p class="simple-parag"><?php the_field('tunnels-simple-paragraph4') ?></p>
						<p class="simple-parag"><?php the_field('tunnels-simple-paragraph5') ?></p>
						<p><?php the_field('tunnels-simple-paragraph6') ?></p>
					</div>
				</div>
			</div>

			<div class="full-size-gallery">
				
				<ul class="gall-picture" itemscope itemtype="http://schema.org/ImageGallery">
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-1.jpg" itemprop="contentUrl" data-size="1024x605" data-index="0">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-13.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-2.jpg" itemprop="contentUrl" data-size="1024x605" data-index="1">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-14.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-3.jpg" itemprop="contentUrl" data-size="1024x605" data-index="2">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-15.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
					<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php bloginfo('template_url') ?>/tmp/item-4.jpg" itemprop="contentUrl" data-size="1024x605" data-index="3">
							<img src="<?php bloginfo('template_url') ?>/tmp/small-image-16.jpg" itemprop="thumbnail" alt="">
						</a>
					</li>
				</ul>

			</div>

		</div>

		<div class="section cables no-gallery-section">
			<div class="container">
				<div class="h2-header">
					<div class="left-side">
						<h2><?php the_field('cables-title') ?></h2>
						<p class="h2-sub-text"><?php the_field('cables-title-sub-text') ?></p>
					</div>
					<div class="right-side orange-line">
						<p><?php the_field('cables-description') ?></p>
					</div>
				</div>
				<div class="row">
					<div class="m-box-4">
						<p><strong><?php the_field('cables-list-title') ?></strong></p>
						<ul class="def-list">
							<?php 
							    if( have_rows('cables-list') ):
							        while ( have_rows('cables-list') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('cables-list-item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</div>
					<div class="m-box-4">
						<p><?php the_field('cables-description2') ?></p>
					</div>
					<div class="m-box-4">

						<div class="small-gallery">
							
							<ul class="gall-picture" itemscope itemtype="http://schema.org/ImageGallery">
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-1.jpg" itemprop="contentUrl" data-size="1024x605" data-index="0">
										<img src="<?php bloginfo('template_url') ?>/tmp/sg-thumb-1.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-2.jpg" itemprop="contentUrl" data-size="1024x605" data-index="1">
										<img src="<?php bloginfo('template_url') ?>/tmp/sg-thumb-2.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-3.jpg" itemprop="contentUrl" data-size="1024x605" data-index="2">
										<img src="<?php bloginfo('template_url') ?>/tmp/sg-thumb-3.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
							</ul>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="section animals no-gallery-section">
			<div class="container">
				<div class="h2-header">
					<div class="left-side">
						<h2><?php the_field('animals-title') ?></h2>
						<p class="h2-sub-text"><?php the_field('animals-title-sub-text') ?></p>
					</div>
					<div class="right-side orange-line">
						<p><?php the_field('animals-description') ?></p>
					</div>
				</div>
				<div class="row">
					<div class="m-box-8">
						<p class="simple-parag"><?php the_field('animals-simple-paragraph1') ?></p>
						<p class="simple-parag"><?php the_field('animals-simple-paragraph2') ?></p>
						<p class="title-list"><strong><?php the_field('animals-list-title') ?></strong></p>
						<ul class="def-list">
							<?php 
							    if( have_rows('animals-list') ):
							        while ( have_rows('animals-list') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('animals-list-item'); ?>
							        </li>
							        <?php endwhile;
							    else :
							    endif; 
							?>
						</ul>
					</div>
					<div class="m-box-4">

						<div class="vertical-gallery">
							
							<ul class="gall-picture" itemscope itemtype="http://schema.org/ImageGallery">
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-1.jpg" itemprop="contentUrl" data-size="1024x605" data-index="0">
										<img src="<?php bloginfo('template_url') ?>/tmp/vg-animals-thumb-1.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-2.jpg" itemprop="contentUrl" data-size="1024x605" data-index="1">
										<img src="<?php bloginfo('template_url') ?>/tmp/vg-animals-thumb-2.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
							</ul>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="section fluids no-gallery-section">
			<div class="container">
				<div class="h2-header">
					<div class="left-side">
						<h2><?php the_field('fluids-title') ?></h2>
					</div>
					<div class="right-side orange-line">
						<p><?php the_field('fluids-description') ?></p>
					</div>
				</div>
				<div class="row">
					<div class="m-box-6">
						<p class="simple-parag"><?php the_field('fluids-simple-paragraph1') ?></p>
						<p><?php the_field('fluids-simple-paragraph2') ?></p>
					</div>
					<div class="m-box-6">
						<p class="title-list"><strong><?php the_field('fluids-list-title') ?></strong></p>
						<ul class="def-list">
							<?php 
							    if( have_rows('fluids-list') ):
							        while ( have_rows('fluids-list') ) : the_row();
							            ?>
							        <li> 
							        	<?php the_sub_field('fluids-list-item'); ?>
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

		<div class="section services no-gallery-section">
			<div class="container">
				<h3><?php the_field('services-title') ?></h3>
				<div class="row">
					<div class="m-box-8">
						<ul class="slider-services">
							<li>
								<h4><?php the_field('services-slide1-title') ?></h4>
								<p><?php the_field('services-slide1-list') ?></p>
							</li>
							<li>
								<h4><?php the_field('services-slide2-title') ?></h4>
								<p class="title-list"><strong><?php the_field('services-slide2-list-title') ?></strong></p>
								<ul class="def-list dl-one">
									<?php 
									    if( have_rows('services-slide2-list1') ):
									        while ( have_rows('services-slide2-list1') ) : the_row();
									            ?>
									        <li> 
									        	<?php the_sub_field('services-slide2-list1-item'); ?>
									        </li>
									        <?php endwhile;
									    else :
									    endif; 
									?>
								</ul>
								<ul class="def-list dl-two">
									<?php 
									    if( have_rows('services-slide2-list2') ):
									        while ( have_rows('services-slide2-list2') ) : the_row();
									            ?>
									        <li> 
									        	<?php the_sub_field('services-slide2-list2'); ?>
									        </li>
									        <?php endwhile;
									    else :
									    endif; 
									?>
								</ul>
							</li>
							<li>
								<h4><?php the_field('services-slide3-title') ?></h4>
								<p class="title-list"><strong><?php the_field('services-slide3-list-title') ?></strong></p>
								<ul class="def-list">
									<?php 
									    if( have_rows('services-slide3-list1') ):
									        while ( have_rows('services-slide3-list1') ) : the_row();
									            ?>
									        <li> 
									        	<?php the_sub_field('services-slide3-list1-item'); ?>
									        </li>
									        <?php endwhile;
									    else :
									    endif; 
									?>
								</ul>
							</li>
							<li>
								<h4><?php the_field('services-slide4-title') ?></h4>
								<p class="title-list"><strong><?php the_field('services-slide4-list-title') ?></strong></p>
								<ul class="def-list">
									<?php 
									    if( have_rows('services-slide4-list1') ):
									        while ( have_rows('services-slide4-list1') ) : the_row();
									            ?>
									        <li> 
									        	<?php the_sub_field('services-slide4-list1-item'); ?>
									        </li>
									        <?php endwhile;
									    else :
									    endif; 
									?>
								</ul>
							</li>
						</ul>
					</div>
					<div class="m-box-4">

						<div class="small-gallery">
							
							<ul class="gall-picture" itemscope itemtype="http://schema.org/ImageGallery">
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-1.jpg" itemprop="contentUrl" data-size="1024x605" data-index="0">
										<img src="<?php bloginfo('template_url') ?>/tmp/sg-thumb-1.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-2.jpg" itemprop="contentUrl" data-size="1024x605" data-index="1">
										<img src="<?php bloginfo('template_url') ?>/tmp/sg-thumb-2.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-3.jpg" itemprop="contentUrl" data-size="1024x605" data-index="2">
										<img src="<?php bloginfo('template_url') ?>/tmp/sg-thumb-3.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-4.jpg" itemprop="contentUrl" data-size="1024x605" data-index="3">
										<img src="<?php bloginfo('template_url') ?>/tmp/sg-thumb-4.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-4.jpg" itemprop="contentUrl" data-size="1024x605" data-index="4">
										<img src="<?php bloginfo('template_url') ?>/tmp/sg-thumb-5.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
								<li class="fsg-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<a href="<?php bloginfo('template_url') ?>/tmp/item-4.jpg" itemprop="contentUrl" data-size="1024x605" data-index="5">
										<img src="<?php bloginfo('template_url') ?>/tmp/sg-thumb-6.jpg" itemprop="thumbnail" alt="">
									</a>
								</li>
							</ul>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="section training no-gallery-section">
			<div class="container">
				<div class="h2-header">
					<div class="left-side">
						<h2><?php the_field('training-title') ?></h2>
						<p class="h2-sub-text"><?php the_field('training-title-sub-text') ?></p>
					</div>
					<div class="right-side orange-line">
						<p><?php the_field('training-description') ?></p>
					</div>
				</div>
				<div class="row">
					<div class="m-box-6">
						<p class="title-list"><strong><?php the_field('training-title-list1') ?></strong></p>
						<p class="simple-parag"><?php the_field('training-simple-paragraph1') ?></p>
						<p class="title-list"><strong><?php the_field('training-title-list2') ?></strong></p>
						<p class="simple-parag"><?php the_field('training-simple-paragraph2') ?></p>
						<p class="title-list"><strong><?php the_field('training-title-list3') ?></strong></p>
						<p class="simple-parag"><?php the_field('training-simple-paragraph3') ?></p>
						<p><?php the_field('training-simple-paragraph4') ?></p>
					</div>
					<div class="m-box-6">

					</div>
				</div>
			</div>
		</div>

		<div class="section contacts no-gallery-section">
			<div class="contact-header">
				<div class="h2-header">
					<div class="container">
						<div class="left-side">
							<h2><?php the_field('contacts-title') ?></h2>
						</div>
						<div class="right-side orange-line">
							<ul class="title-list">
								<?php 
								    if( have_rows('contacts-list1') ):
								        while ( have_rows('contacts-list1') ) : the_row();
								            ?>
								        <li> 
								        	<?php the_sub_field('contacts-list1-item'); ?>
								        </li>
								        <?php endwhile;
								    else :
								    endif; 
								?>
							</ul>
							<ul class="title-list">
								<?php 
								    if( have_rows('contacts-list2') ):
								        while ( have_rows('contacts-list2') ) : the_row();
								            ?>
								        <li> 
								        	<?php the_sub_field('contacts-list2-item'); ?>
								        </li>
								        <?php endwhile;
								    else :
								    endif; 
								?>
							</ul>
							<ul class="title-list">
								<?php 
								    if( have_rows('contacts-list3') ):
								        while ( have_rows('contacts-list3') ) : the_row();
								            ?>
								        <li> 
								        	<?php the_sub_field('contacts-list3-item'); ?>
								        </li>
								        <?php endwhile;
								    else :
								    endif; 
								?>
							</ul>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="box-6">
							<form action="" class="contact-form">
								<div class="row">
									<div class="inp-blc">
										<label class="label-input" for="cont-form[1]">Nom de l'entreprise :</label>
										<span class="inp-required">
											<input id="cont-form[1]" type="text" placeholder="">
										</span>
									</div>
									<div class="inp-blc">
										<label class="label-input" for="cont-form[2]">E-Mail :</label>
										<span class="inp-required">
											<input id="cont-form[2]" type="email" placeholder="">
										</span>
									</div>
									<div class="inp-blc">
										<label class="label-input" for="cont-form[3]">Téléphone : </label>
										<span class="inp-required">
											<input id="cont-form[3]" type="tel" placeholder="">
										</span>
									</div>
									<div class="inp-blc">
										<label class="label-input" for="cont-form[4]">Activité : </label>
										<span class="inp-required">
											<input id="cont-form[4]" type="text" placeholder="">
										</span>
									</div>
									<div class="inp-blc">
										<label class="label-input" for="cont-form[5]">Message : </label>
										<span class="inp-required">
											<textarea class="cont-form-text" name="" id="cont-form[5]"></textarea>
										</span>
									</div>
								</div>
								<p class="form-msg-success">Message envoyé avec succès</p>
								<p class="form-msg-fail">Remplissez les champs “Activité”, “Message”</p>
								<button class="btn btn-orange" type="submit">Envoyer</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="google-map-wrap">
				<div id="map">
					<!-- map here -->
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>