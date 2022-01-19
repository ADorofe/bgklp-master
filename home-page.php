<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<section class="slider">
    <div id="slider-header" class="owl-carousel ">

    <?php
        $args = array(
        'offset' => 0,
        'category' => 108,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'include' => '',
        'exclude' => '',
        'meta_key' => '',
        'meta_value' =>'',
        'post_type' => 'post',
        'post_status' => 'publish',
        'suppress_filters' => true
        );
        $recent_posts = wp_get_recent_posts($args);


        foreach( $recent_posts as $recent ){?>

            <div class="slide-item owl-lazy" data-src="<?php echo get_the_post_thumbnail_url($recent["ID"]); ?>">
                <div class="slider-caption-box">
                    
                    <h3 class="slider-caption-text"><?php echo $recent["post_title"] ?></h3>
                    <?php if($recent["post_content"])
                        {
                            echo $recent["post_content"];
                        }
                    ?>
                    <?php
                    $meta=get_post_meta($recent["ID"]);
                    if(isset($meta['link_for_news']))
                    {
                        $link=get_post_meta($recent['ID'], 'link_for_news', true);
                        $text_link=get_post_meta($recent['ID'], 'text_button', true);
                        echo "<a class='slider-caption-link' href='".$link."'>".$text_link."</a>";
                    }
                    ?>
                    
                </div>
            </div>


        <?php
        }
        wp_reset_query();
        ?>

    </div>
</section>

<section class="section-news">
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

            <div class="col">
                <span id="news-prev" class="news-nav news-nav__left"></span>

                <div id="slider-news" class="owl-carousel ">

                  <?php
                  $args = array(
                    'numberposts' => 6,
                    'offset' => 0,
                    'category' => 4,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'include' => '',
                    'exclude' => '',
                    'meta_key' => '',
                    'meta_value' =>'',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                  );
                  	$recent_posts = wp_get_recent_posts($args);


                  	foreach( $recent_posts as $recent ){?>

                        <div class="news">
                            <a href="<?php echo get_permalink($recent['ID']) ?>">
                                <?php if ( has_post_thumbnail( $recent["ID"]) ) : ?>
                                    <div class="news-header owl-lazy" data-src="<?php echo get_the_post_thumbnail_url($recent["ID"]); ?>">
                                    </div>
                                <?php else: ?>
                                    <div class="news-header owl-lazy" data-src="http://bgklp.loc/wp-content/uploads/2019/08/no-image-icon.png" style="background-size: contain;"></div>
                                <?php endif; ?>
                                <div class="news-content">
                                    <h2 class="news-caption"><?php echo $recent["post_title"] ?></h2>
                                    <span class="news-date"><?php echo date_i18n('j F Y', strtotime($recent['post_date'])) ?></span>
                                    <p><?php echo $recent["post_excerpt"] ?></p>
                                    
                                </div>
                                <div class="news-footer">
                                    <span class="news-button">Читать</span>
                                </div>
                            </a>
                        </div>

                  <?php
                    }
                  	wp_reset_query();
                  ?>
                </div>

                <span id="news-next" class="news-nav news-nav__right" ></span>
            </div>

        </div>
    </div>
</section>

<section class="section-feature">
    <div class="bg-feature"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-caption-white"><?php
                    $idObj = get_category_by_slug('my_college');
                    $id = $idObj->term_id;
                    echo category_description($id);
                    ?>
                </h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : query_posts('cat=' . $id);
            while (have_posts()) : the_post(); ?>
            <div class="col-md-3 col-sm-6">
                <div class="feature">
                    <h3 class="feature-counter"><?php echo get_post_meta($post->ID, 'counter_count', true); ?></h3>
                    <span class="feature-desc"><?php the_title(); ?></span>
                </div>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>
        </div>
    </div>
</section>

<section class="section-spec">
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

<section class="section-partners">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-caption">Наши предприятия</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col">
                <span id="partner-prev" class="partner-nav partner-nav__left"></span>

                <div id="slider-partners" class="slider-partners owl-carousel ">
                    <a href="http://www.blakit.by/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner/blakit.png" style="width:128px" alt=""></a>
                    <a href="http://www.alesyaoao.by" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner/alesya.png" style="width:147px" alt=""></a>
                    <a href="http://www.belcredo.by/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner/belcredo.png" style="width:58px" alt=""></a>
                    <a href="https://elema.by/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner/elema.jpg" style="width:165px" alt=""></a>
                    <a href="http://www.gronitex.by/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner/gronitex.png" style="width:290px" alt=""></a>
                    <a href="http://www.kalinka.com.by/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner/kalinka.png" style="width:177px" alt=""></a>
                    <a href="http://www.kamvol.by/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner/kamvol.png" style="width:146px" alt=""></a>
                    <a href="http://www.kupalinka.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner/kupalinka.png" style="width:134px" alt=""></a>
                    <a href="https://mogotex.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner/mogotex.png" style="width:294px" alt=""></a>
                </div>

                <span id="partner-next" class="partner-nav partner-nav__right" ></span>
            </div>

        </div>

    </div>

</section>


<?php get_footer(); ?>
