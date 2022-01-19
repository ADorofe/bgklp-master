<?php get_header(); ?>
    <div class="container">
		<?php if (have_posts()) :
			while (have_posts()) : the_post();
     			if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs();?>

				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-caption"><?php single_post_title(); ?> </h1>
					</div>
				</div>
				<div class="content">
					<?php the_content();?>
				</div>
			<?php endwhile;
		endif; ?>
    </div>
<?php get_footer(); ?>
