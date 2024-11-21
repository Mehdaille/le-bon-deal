<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package xMag
 * @since xMag 1.0
 */
?>


<div id="secondary" class="sidebar widget-area  <?php xmag_widget_style(); ?>" role="complementary">

    <?php if (has_nav_menu('social_navigation')) {
        wp_nav_menu(
            array(
                'theme_location' => 'social_navigation',
                'container_class' => 'social-links',
                'menu_id' => 'social-links',
                'menu_class' => 'social-menu',
                'depth' => 1,
                'link_before' => '<span class="screen-reader-text">',
                'link_after' => '</span>',
                'fallback_cb' => '',
            )
        );
    } // Social Links ?>

    <?php if (is_active_sidebar('sidebar-1')) : ?>

        <?php dynamic_sidebar('sidebar-1'); ?>

    <?php else : ?>

        <!--		<aside id="search" class="widget widget_search">-->
        <!--			--><?php //get_search_form(); ?>
        <!--		</aside>-->

        <!--		<aside id="meta" class="widget widget_meta">-->
        <!--			<h3 class="widget-title"><span>--><?php //_e( 'Meta', 'xmag' ); ?><!--</span></h3>-->
        <!--			<ul>-->
        <!--				--><?php //wp_register(); ?>
        <!--				<li>--><?php //wp_loginout(); ?><!--</li>-->
        <!--				--><?php //wp_meta(); ?>
        <!--			</ul>-->
        <!--		</aside>-->

        <aside id="meta" class="widget widget_meta">
            <?php
            if (is_single()) {
                // Récupérer les catégories de l'article actuel
                $categories = get_the_category();
                if (!empty($categories)) {
                    // Extraire les IDs des catégories
                    $category_ids = wp_list_pluck($categories, 'term_id');

                    // Construire une requête pour récupérer les articles dans ces catégories
                    $args = [
                        'category__in'   => $category_ids, // Articles dans les catégories associées
                        'post__not_in'   => [get_the_ID()], // Exclure l'article actuel
//                        'posts_per_page' => 5,             // Limite d'articles
                    ];

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        echo '<h2>Les deals associées :</h2>';
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <h3><?php the_title(); ?></h3>
                            <div class="entry-meta">
                                <a id="voir" href="<?php the_permalink(); ?>">Voir</a>
                            </div>
                            <hr>
                            <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo '<p>Aucun deals trouvé dans les mêmes catégories.</p>';
                    }
                } else {
                    echo "<p>Cet article n'a pas de catégories associées.</p>";
                }
            } else {
                // Requête personnalisée pour les articles avec un tag spécifique
                $args = [
                    'tag'            => 'a-la-une', // Articles avec le tag "a-la-une"
                    'posts_per_page' => 5,         // Limite d'articles
                ];

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    echo '<h2>Les deals à la une :</h2>';
                    while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <h3><?php the_title(); ?></h3>
                        <div class="entry-meta">
                            <a id="voir" href="<?php the_permalink(); ?>">Voir</a>
                        </div>
                        <hr>
                        <?php
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>Aucun article trouvé.</p>';
                }
            }
            ?>
        </aside>
        </aside>

<!--        <aside id="meta" class="widget widget_meta">-->
<!--            --><?php
//            $post_template = xmag_archive_post_template();
//            if (is_single()) {
//                $args['category_name'] = the_category();
//            } else {
//                $args['tag'] = 'a-la-une';
//            }
//            $query = new WP_Query($args);
//            if ($query->have_posts()) {
//                while ($query->have_posts()) {
//                    $query->the_post();
//                    ?>
<!--                    <h2>--><?php //the_title(); ?><!--</h2>-->
<!--                    <div class="entry-meta">-->
<!--                        <a id="voir" href="--><?php //the_permalink(); ?><!--">Voir</a>-->
<!--                    </div>-->
<!--                    <hr>-->
<!--                    --><?php
//                }
//                wp_reset_postdata();
//            } else {
//                get_template_part('template-parts/content', 'none');
//            }
//            ?>
<!--        </aside>-->
    <?php endif; // Sidebar widget area ?>
</div><!-- #secondary .widget-area -->
