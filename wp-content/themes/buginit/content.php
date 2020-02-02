<?php
/**
 * The default template for displaying content
 **/
 
 global $navthemes_options;	
 
?>        
	 <article id="post-<?php the_ID(); ?>" <?php  //post_class('post_section'); ?> itemscope="" itemtype="http://schema.org/BlogPosting">
	
        <?php
		// Post thumbnail.
		// simple_east_navthemes_post_thumbnail();
	?>
    	
    <div class="article-content">    

	<header class="entry-header">
  	<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark" itemprop="url">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
    
     <?php 
	 	// Post Meta
		simple_east_navthemes_entry_meta(); 
	 ?> 
      
     <?php 
	 	// Show Above Post Add
	 	if ( is_single() ) : 
	 ?>
          <div id="above_post_add" class="advertisment">
             <?php echo $navthemes_options['above-post-ad']; ?>
          </div>
      <?php endif; ?>
      
      <div class="clearboth"></div>
 	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			if ( is_single() ) :
		 
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'simple-east' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'simple-east' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'simple-east' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		
    else:
			the_excerpt();
	
	endif;
	?>
     
     <?php 
	 	// Show Below Post Add
	 	if ( is_single() ) : 
	 ?>
      <div id="below_post_add" class="advertisment">
      	  <?php echo $navthemes_options['below-post-ad']; ?>
	  </div>
	  
	  <div class="relatedPostWrap">
		  <h4>You Might Interested In</h4>
		  <ul class="relatedPostList">
			  <?php
					$tags = wp_get_post_tags($post->ID);
					if ($tags) {
						// echo 'Related Posts';
						//   $first_tag = $tags[0]->term_id;
						$tag_ids = array();
						foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
						$args=array(
						'tag__in' => $tag_ids,
						'post__not_in' => array($post->ID),
						'posts_per_page'=>10,
						'caller_get_posts'=>1
						);
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
							</li>
							<?php
							endwhile;
						}
						wp_reset_query();
					}
			  ?>
		  </ul>
	  </div>
     <?php endif; ?> 
	  
	 



  	</div><!-- .entry-content -->
 
  <?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'simple-east' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
	
    </div>
    
	</article><!-- #post-## -->
          
    