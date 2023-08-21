<?php /* Template Name: Projects Archive */ ?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="project-card-container">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(
                'post_type'      => 'project',
                'posts_per_page' => 6,
                'paged'          => $paged,
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
            ?>
                <div class="project-card">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="project-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                    <div class="project-content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php
                endwhile;
            endif;

            // Reset post data
            wp_reset_postdata();
            ?>
        </div><!-- .project-card-container -->

        <!-- Astra Pagination -->
        <div class="pagination">
    <!-- <?php
    echo paginate_links( array(
        'prev_text' => __( 'Previous', 'astra' ),
        'next_text' => __( 'Next', 'astra' ),
    ) );
    ?> -->
    <?php
$big = 999999999; // need an unlikely integer
echo paginate_links( array(
    'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format'  => '?paged=%#%',
    'current' => max( 1, get_query_var( 'paged' ) ),
    'total'   => $query->max_num_pages,
) );
?>
</div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
