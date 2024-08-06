<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); 
the_post();
?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<h3><strong>Title:</strong> <?php echo get_the_title(); ?></h3>
			<h3><strong>Project Date: </strong><?php echo get_post_meta( get_the_ID(), 'project_date', true ); ?></h3>
			<?php echo wpautop(get_the_content()); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
