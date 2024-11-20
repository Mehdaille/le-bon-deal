<?php
/**
 * The template for displaying Single Post content.
 *
 * @package xMag
 * @since xMag 1.0
 */
?>
<?php
$thumb_size = xmag_thumb_size();
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if (has_post_thumbnail() && get_theme_mod('xmag_post_featured_image')) : ?>

            <?php if (get_theme_mod('xmag_post_featured_image_size', 'default') == 'default') : ?>
                <div id="cont2">
                    <div>
                        <figure class="entry-thumbnail">
                            <a href="#" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                                <span class="format-icon"></span>
                            </a>
                        </figure>
                    </div>
                    <div id="cont3">
                        <h2 class="has-x-large-font-size"> <?php the_title() ?></h2>
                        <header class="entry-header">
                            <div class="entry-meta">
                                <p class="category"><?php the_category(' '); ?></p>
                            </div>
                            <div class="entry-meta">
                                <p class="category"><?php the_tags(' '); ?></p>
                            </div>
                            <!--            --><?php //xmag_time_link(); ?>
                    </div>
                </div>
                <div class="stop-float"></div>
                <header class="entry-header">
                    <div class="entry-meta">
                      <p>Publié par <?php xmag_author_link(); ?> le <?php xmag_time_link();
                          ?></p>
                    </div>
                </header><!-- .entry-header -->

            <?php endif; ?>

        <?php else : ?>

            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <div class="entry-meta">
                    <?php
                    xmag_posted_on();
                    xmag_entry_comments();
                    ?>
                </div>
            </header><!-- .entry-header -->

        <?php endif; ?>

        <div class="entry-content">
            <?php
            the_content();
            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'xmag'),
                'after' => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after' => '</span>',
            ));
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php xmag_entry_footer(); ?>
        </footer><!-- .entry-footer -->

    </article><!-- #post-## -->

<?php
// Author bio.
if (get_the_author_meta('description')) :
    get_template_part('template-parts/author-bio');
endif;
?>

<?php
the_post_navigation(array(
    'prev_text' => __('Previous Post', 'xmag') . '<span>%title</span>',
    'next_text' => __('Next Post', 'xmag') . '<span>%title</span>',
));
?>