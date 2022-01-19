<?php
/*
Template Name: News Page
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
                            $idObj = get_category_by_slug('news');
                            $id = $idObj->term_id;
                            echo category_description($id);
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php  
                        $paged = get_query_var( 'paged', 1 );//Получаем текущую страницу
                        $id = get_category_by_slug( 'news' )->cat_ID;//получаем id рубрики.
                        $recent = new WP_Query( "cat=$id&posts_per_page=$count_items&paged=$paged" );//Сам запрос
                        while ( $recent->have_posts() ) { $recent->the_post(); ?>

        


                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="news-page-single">
                            <div class="news">
                            <a href="<?php echo get_permalink() ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="news-header owl-lazy" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                                    </div>
                                <?php else: ?>
                                    <div class="news-header owl-lazy" data-src="http://bgklp.loc/wp-content/uploads/2019/08/no-image-icon.png" style="background-size: contain;"></div>
                                <?php endif; ?>
                                <div class="news-content">
                                    <h2 class="news-caption"><?php the_title(); ?></h2>
                                    <span class="news-date"><?php echo get_the_date('j F Y') ?></span>
                                    <p><?php the_excerpt() ?></p>
                                </div>
                                <div class="news-footer">
                                    <span class="news-button">Читать</span>
                                </div>
                            </a>
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
    'show_all'     => false, // показаны все страницы участвующие в пагинации
	'end_size'     => 1,     // количество страниц на концах
	'mid_size'     => 1,     // количество страниц вокруг текущей
	'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
	'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
	'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
	'screen_reader_text' => __( 'Posts navigation' ),
) ); ?>

 



<?php get_footer(); ?>
