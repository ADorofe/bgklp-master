<?php
/*
Template Name: Photogallery Page
*/
?>

<?php get_header(); ?>

<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs();?>

<section class="section-blog-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="section-caption">
                            <?php
                            $idObj = get_category_by_slug('photogallery');
                            $id = $idObj->term_id;
                            echo category_description($id);
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
            
            <?php  
                $paged = get_query_var( 'paged', 1 );//Получаем текущую страницу
                $id = get_category_by_slug( 'photogallery' )->cat_ID;//получаем id рубрики.
                $recent = new WP_Query( "cat=$id&posts_per_page=$count_items&paged=$paged" );//Сам запрос
                while ( $recent->have_posts() ) { $recent->the_post(); ?>

                    
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            <h3 class="has-vivid-cyan-blue-color has-very-light-gray-background-color has-text-color has-background"><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="container" style="margin-bottom: 30px;">
                        <div class="row">
                            <div class="col-12">
								
								
								<?php if (get_post_meta($post->ID, 'is_slider', true) !== '') {
									echo (get_post_meta($post->ID, 'is_slider', true)); 
									} else {the_content();}?>
                            </div>
                        </div>
                    </div>
                        

                                
                

    <?php
  }
    wp_reset_postdata();
?>
</div>
            </div>
        </section>

<?php the_posts_pagination( array(
    'prev_next'    => false
)); ?>


<?php get_footer(); ?>
