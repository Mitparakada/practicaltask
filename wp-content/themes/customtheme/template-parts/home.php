<?php
/**
 * Template name: Home
 *
 */

get_header(); 
?>
<?php $query = new WP_Query( [
    'post_type'      => 'portfolio-cpt',
    'posts_per_page' => '3',
	'orderby'   => 'date',
    'order' => 'DESC',
] ); ?>

<?php if ( $query->have_posts() ) : ?>
    <div class="roundedframe ">
        <div class="container-fluid">
            <div class="row">

                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="project-name">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        </a>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
<?php
get_footer();
