<?php get_header(); ?>

<?php if((!is_front_page()) && (!is_page(21))) { ?>
    
		<div class="article-area">
			<div class="content-box">
				
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article class="subpage-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <section class="entry-content subpage-text">

                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        <?php the_content(); ?>
                        
                    </section>
                </article>

                <?php endwhile; endif; ?>
                
                <?php get_sidebar(); ?>
                
			</div>
			
			<div class="clearfix"></div>
		</div>
		<!-- end article-area -->               
<?php } ?>
        
<?php if(!is_page(21)) { ?>

		<div class="content-area">
		
			<div class="content-box">

<?php if(is_front_page()) { ?>

                <?php if ( is_active_sidebar( 'therapy' ) ) : ?>
                <div class="widget therapy">
                    <?php dynamic_sidebar( 'therapy' ); ?>
                </div>
                <?php endif; ?>
                
				<div class="three-column">
				
					<div class="column">
                        <?php if ( is_active_sidebar( 'therapy-left' ) ) : ?>
                        <div class="widget therapy-column">
                            <?php dynamic_sidebar( 'therapy-left' ); ?>
                        </div>
                        <?php endif; ?>
					</div>
					
					<div class="column">
                        <?php if ( is_active_sidebar( 'therapy-middle' ) ) : ?>
                        <div class="widget therapy-column">
                            <?php dynamic_sidebar( 'therapy-middle' ); ?>
                        </div>
                        <?php endif; ?>
					</div>
					
					<div class="column last">
                        <?php if ( is_active_sidebar( 'therapy-right' ) ) : ?>
                        <div class="widget therapy-column">
                            <?php dynamic_sidebar( 'therapy-right' ); ?>
                        </div>
                        <?php endif; ?>
					</div>
				
					<div class="clearfix"></div>
					
				</div>
				<!-- end .three-column -->

<?php } else { ?>
           
              
              
               <img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" class="quote" />
                
                    
				<div class="testimonial-area">
				<?php $test = 1; 
                        $random = rand(1,6); ?>
				<?php $loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => -1, 'category' => 'current' ) ); ?>
               <style type="text/css">.testimonial<?php echo $random; ?> {display: block; }</style>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
                <div class="testimonial testimonial<?php echo $test; ?>">
                    <div class="title"><?php echo get_the_title(); ?></div>
                    <div class="text"><?php echo get_the_content(); ?></div>
                    <div class="clearfix"></div>
                </div>
                <?php $test++; ?>
                <?php endwhile; wp_reset_query(); ?>         
<?php } ?>

			</div>
			<!-- end .content-box -->
		</div>
		<!-- end .content-area -->
<?php } ?>

<?php if((is_front_page()) || (is_page(21))) { ?>		
		<div class="contact-area">
		
			<div class="contact-three-column content-box">
			
				<div class="column">
					<h5>Contact</h5>
					<h3>Visit the Office</h3>
					
					<table class="contact-table">
						<tr>
							<td class="bold">Address:</td>
							<td class="wide">25511 Budde Road, The Woodlands, TX 77380</td>
						</tr>
						<tr>
							<td class="bold">Phone:</td>
							<td class="wide">(281) 989-5106</td>
						</tr>
						<tr>
							<td class="bold">Email:</td>
							<td class="wide"><a href="mailto:info@kimsaltzman.com">info@kimsaltzman.com</a></td>
						</tr>
					</table>
				
				</div>
				<div class="column last">
                    <?php if ( is_active_sidebar( 'contact' ) ) : ?>
                    <div class="widget contact-column">
                        <?php dynamic_sidebar( 'contact' ); ?>
                    </div>
                    <?php endif; ?>
				</div>
			
			</div>
			
			<div class="clearfix"></div>
		
		</div>
		<!-- end .contact-area -->
<?php } ?>

<?php get_footer(); ?>