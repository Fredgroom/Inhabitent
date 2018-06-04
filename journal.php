<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="journal-header">
</div>
	
<h1>Inhabitent Journal</h1>
<div class="journal-grid">
<div id"journal-main" class="journal-content-area">
        <main id="main" class="site-journal" role="main">
        <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 5)?>
        <?php $posts = new WP_Query( $args ); /* $args set above*/ ?>
        <?php if ( $posts->have_posts() ) : ?>
        <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
        <div class="journal-posts">
        <?php the_post_thumbnail(); ?>   
        <div class="journal-posts-border">
        <h1><?php the_title(); ?></h1>
        <button href="">Read More</button>
            </div>
        </div>
        <?php endwhile; ?>
        <?php the_posts_navigation(); ?>
        <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
</main>
    </div>

<div class="sidebar">
<?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>

