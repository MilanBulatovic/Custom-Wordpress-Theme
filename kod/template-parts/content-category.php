<?php
/**
 * Template part for displaying content in archive.php - Category listing
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KOD
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- <div class="content-wrapper"> -->

            <div class="post-category-thumb"
                <?php if ( has_post_thumbnail() ) : ?>
                    style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"
                <?php endif; ?>>
                <div class="overlay-content"></div>
            </div> <!-- End of post-category-thumb-->

            <div class="content-holder">

                <?php
                if (is_archive()):
                    
                    echo '<h5 class="post-category-title"><a href="' . get_permalink() . '">' . wp_trim_words( get_the_title(), 7 ) . '</a></h5>';
                    the_excerpt();

                else:

                    echo '<h5>' . get_the_title() . '</h5>';
                    echo the_content();

                endif; ?>

                <div class="post-meta">
                    <span class="date"><?php echo get_the_date( 'd. m. Y. ' );?></span>
                    
                    <?php 
                        if( get_comments_number() > 0 ) : ?>
                            <i class="bi bi-chat-right-text-fill"></i><span class="comment-number"><?php echo get_comments_number($post->ID); ?></span>
                        <?php endif; ?>

                </div>
           </div>  <!-- Енд оф content-holder ?> -->
            
           
	</article><!-- #post-<?php the_ID(); ?> -->
