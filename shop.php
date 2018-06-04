<?php /* Template Name: Shop Template */ 
get_header(); ?>



<h1>Shop Stuff</h1>
<div id"primary" class="content-area">
        <main id="main" class="site-main" role="main">

        
    <?php $args = array( 'post_type' => 'product')?>
    <?php $posts = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $posts->have_posts() ) : ?>
   <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
   <div class="shop-item">
      <h1><?php the_title(); ?></h1>
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>
    </div>
   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
</main>
    </div>





<?php get_footer(); ?>