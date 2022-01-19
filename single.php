<?php get_header(); ?>
    <div class="container">
		<?php if (have_posts()) :
			while (have_posts()) : the_post();
      if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs();?>
      
        <h1><?php single_post_title(); ?> </h1>
        
        <?php
				the_content();
			endwhile;
		endif; ?>
    </div>
<?php get_footer(); ?>
