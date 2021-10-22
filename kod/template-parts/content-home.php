<?php
/**
 * Template part for displaying Homepage content in home-page.php
 *
 * @package KOD
 */

?>
<div class="wrapper-home">
    <div class="container">

        <!-- Section SLIDER -->
        <section id="slideshow">
            <div class="row">
                <div class="col-lg-8 col">
                    <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
                </div><!-- End of column -->

                <div class="col-lg-4 d-flex flex-column">

                    <!-- Zelena priča Loop function -->
                    <div class="zelena-prica-entry">
                        <?php loop_category_posts( 5, 1, 'post-thumb', 'zeleni-content', 'zeleni-overlay' ); ?>

                        <div class="play-icon d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tree-icon.png" alt="tree-icon">
                        </div>
                    </div>

                    <!-- Dekodiranje Loop function -->
                    <div class="dekodiranje-entry mt-4">
                        <?php loop_category_posts( 4, 1, 'post-thumb', 'dekodiranje-content', 'dekodiranje-overlay' ); ?>

                        <div class="play-icon d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/white-play.png" alt="play-icon">
                        </div>
                    </div>
                        
                </div> <!-- End of column -->
            </div> <!-- End of row -->
        </section>

        <!-- DIVIDERS -->
        <div class="divider"></div>
        <div class="red-divider"></div>

        <!-- Section KOD POSTS -->
        <section id="kod-posts">
            <div class="container">
                <div class="row">

                    <!-- Posts loop -->
                    <?php loop_cat_comments(6, 4); ?>
                      
                </div>      
            </div>
        </section>

        <!-- DIVIDERS -->
        <div class="divider"></div>
        <div class="red-divider"></div>

        <!-- Section KOD VIDEOS -->
        <section id="kod-videos">
            <div class="container">
                <div class="row">

                    <!-- Video Posts loop -->
                    <?php loop_cat_comments(4, 4); ?>

                </div>      
            </div>
        </section>

        <!-- DIVIDERS -->
        <div class="divider"></div>
        <div class="red-divider"></div>

        <!-- Section RANDOM BLOG POSTS -->
        <section id="popular-blog">
            <div class="container">
                <div class="row">

                    <!-- Posts loop -->
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '3',
                            'orderby' => 'rand',
                            'category__not_in' => 4 ,
                        ); 
                        // The Query
                        $the_query = new WP_Query( $args );
                        
                        // The Loop
                        if ( $the_query->have_posts() ) : ?>
                            <div class="kod-section-wrapper grid-wrapp">
                            <?php
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post(); ?>
                                    
                                        <div class="kod-content-wrapper">

                                            <div class="kod-cards">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                                    <?php the_post_thumbnail(); ?>
                                                </a>
                                            </div> 
                                            
                                            <div class="kod-card-content">
                                                <h2><a href="<?php echo the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 6 ); ?></a></h2>
                                                <?php echo wp_trim_words ( the_excerpt(), 15 ); ?>

                                                <div class="date-comments">
                                                    <?php 
                                                        echo get_the_date( 'd. m. Y ' );

                                                        if (  get_comments_number() > 0 ) : //Ako postoji komentar
                                                                    
                                                                echo ', '. '<i class="bi bi-chat-dots-fill icon-chat"></i>' . get_comments_number(); //PrikaŽi komentar

                                                        endif;
                                                    ?>
                                                </div>
                                            </div>

                                        </div>
                                    <?php
                                /* Restore original Post Data */
                                wp_reset_postdata(); 
                            endwhile;?>

                            </div> <?php
                        endif; ?>
                </div> <!-- End of row -->   
            </div> <!-- End container -->
        </section>

        <!-- DIVIDERS -->
        <div class="divider"></div>
        <div class="red-divider"></div>

        <!-- Section POPULAR VIDEO POSTS -->
        <section id="popular-video">
            <div class="container">
                <div class="row">

                    <!-- Posts loop -->
                    <?php
                        $args = array(
                            'category_name' => 'dekodiranje',
                            'posts_per_page' => '4',
                            'meta_key'=>'post_views_count',
		                    'orderby' => 'meta_value_num'
		                    //'orderby' => 'rand'
                        ); 
                        // The Query
                        $the_query = new WP_Query( $args );
                    
                        // The Loop
                        if ( $the_query->have_posts() ) : ?>
                        
                            <?php
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post(); ?>
                                    <div class="col-lg-3 col-md-6">

                                        <div class="kod-section-wrapper">

                                            <div class="kod-cards">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>">

                                                    <?php the_post_thumbnail(); ?>
                                                    <?php playIcon('Da', 'white-play.png'); ?>

                                                </a>
                                            </div> 

                                            <div class="date-comments">
                                                <?php 
                                                    echo get_the_date( 'd. m. Y ' );

                                                    if (  get_comments_number() > 0 ) : //Ako postoji komentar
                                                                
                                                            echo ', '. '<i class="bi bi-chat-dots-fill icon-chat"></i>' . get_comments_number(); //PrikaŽi komentar

                                                    endif;
                                                ?>
                                            </div>

                                            <div class="kod-card-content">
                                                <?php //get_field('play-ikonica'); ?>
                                                <h5><a href="<?php echo the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 6 ); ?></a></h4>
                                            </div> 

                                        </div>
                                    </div>
                                    <?php
                                /* Restore original Post Data */
                                wp_reset_postdata(); 
                            endwhile;
                        endif; ?>
                </div>      
            </div>
        </section>

        <!-- DIVIDERS -->
        <div class="divider"></div>

        <!-- Section PRESS CLIPPING -->
        <h4 class="press-clipping">PRESS CLIPPING</h4>
        <div class="red-divider"></div>
        
        <section id="press-clipping">
            
            <div class="container">
                <div class="row">
               
                    <!-- Posts loop -->
                    <?php
                        $args = array(
                            'category_name' => 'blog',
                            'posts_per_page' => '4'
                        ); 
                        // The Query
                        $the_query = new WP_Query( $args );
                    
                        // The Loop
                        if ( $the_query->have_posts() ) : ?>
                        
                            <?php
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post(); ?>
                                    <div class="col-lg-3 col-md-6 gy-4">
                                        <div class="kod-press-clip m-auto"
                                            <?php if ( has_post_thumbnail()) : ?>
                                                style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"
                                            <?php endif; ?>>
                                        
                                        </div> 
                                    </div>
                                    <?php
                                /* Restore original Post Data */
                                wp_reset_postdata(); 
                            endwhile;
                        endif; ?>
                </div>      
            </div>
        </section>


    </div> <!-- end of container content -->       
</div> <!-- end of wrapper home content -->


