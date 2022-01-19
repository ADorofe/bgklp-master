<?php
/*
Template Name: Speciality Page
*/
?>

<?php get_header(); ?>

<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs();?>

<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-caption"><?php
                    $idObj = get_category_by_slug('spec');
                    $id = $idObj->term_id;
                    echo category_description($id);
                    ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : query_posts(array('cat' => $id, 'order' => 'ASC', 'orderby' => 'meta_value', 'meta_key'=>'number_item'));
            while (have_posts()) : the_post(); ?>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo get_permalink(); ?>"  class="speciality">
                    <?php echo get_post_meta($post->ID, 'spec_icon', true); ?>
                  <h3 class="speciality-name"><?php the_title(); ?></h3>
              </a>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>

        </div>
    </div>
</section>


<?php get_footer(); ?>
