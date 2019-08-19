<?php 
/** 
 * index.php 
 * Default template to load all post types
 */		
get_header(); ?>
   
<div class="row">
   <div class="col-md-8 col-xs-12">
    
	<?php
        // Check if post/s exist
        if (have_posts()) : 
        
			//echo "<div "; thmplt_main_section_class( array('main_section') );  echo "> \n";

			//thmplt_title("<h1 class='topheader'>","</h1>");
        
            // Start the loop.		 		
            while ( have_posts() ) : the_post(); ?>
    
    
                <article  id='post-<?php the_ID(); ?>' <?php post_class(); ?>  >    
                
					<?php                
                        // If the post has a "featured image" AKA post thumbnail then show it
                        if ( has_post_thumbnail() ) {
                            echo "<div class='post_image'>";
                            echo "<a href='". get_permalink() ."' >";
                            echo get_the_post_thumbnail($post->ID, 'thumbnail');
                            echo "</a></div>";
                        }                 	
                    ?>
                    
	                <a href="<?php the_permalink(); ?>" rel="bookmark">
	                    <?php the_title("<h2 class='topheader resultheader'>","</h2>"); ?>
                    </a>

                    <?php the_excerpt(); ?>
                    
                    <ul class="result_data" >
                        <li class="date">
	                        <strong>Posted on:</strong> <?php the_time('M j Y'); ?>
                        </li>
                        <li class="author">
                        	<strong>By:</strong> <?php the_author_posts_link() ?>
                        </li>
                        <?php if ( comments_open() ) { ?>
                       	<li class="comments-link">
	                        <?php comments_popup_link( '<span class="leave-reply">' . "Leave a response" . '</span>', "one response", "View all % responses" ); ?>
                        </li>
                        <?php } ?>
					</ul>                    
                    
                </article>
                
               <hr class='spacer' /> 
    
    <?php 
            endwhile;  
            
            
            
			
            
        endif;  
	?>
       
	</div>
	<div class="col-md-4 col-xs-12">
        
<?php get_sidebar(); ?> 
	
	</div>
	</div>
      
<?php get_footer(); ?>



<!-- Index.php -->
