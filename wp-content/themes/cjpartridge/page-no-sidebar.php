<?php 
/** 
 * Template Name: No Sidebar
 * page template with no sidebar
 */		
get_header(); ?>
    
<div class="row">
   <div class="col-xs-12">
    
	<?php
        // Check if post/s exist
        if (have_posts()) : 
        
			//echo "<div "; cjpartridge_main_section_class( array('main_section') );  echo "> \n";
        
            // Start the loop.		 		
            while ( have_posts() ) : the_post(); ?>
    
    
                <article  id='post-<?php the_ID(); ?>' <?php post_class(); ?>  >    
                
                    <?php the_title("<h1 class='topheader'>","</h1>"); ?>
                    <?php the_content(); ?>
                    
                </article>
    
    <?php 
            endwhile;  
            
			echo "</div>";
            
        endif;  
	?>
       
	</div>
</div>
            
                        
<?php get_footer(); ?>
<!-- Page -->