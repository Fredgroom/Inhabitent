
<?php /*  */ 


get_header(); ?>
<div class="header-banner">
<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'?>" alt="Inhabitent Logo">
</div>

    
<h1>Shop Stuff</h1>
<section class="shop-stuff">    
    <div class="do stuff">
        <img src="wp-content/themes/redstarter/images/product-type-icons/do.svg" alt="Map icon">
        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
        <button class="shop do-stuff">DO STUFF</button>
    </div>
    <div class="eat stuff">
        <img src="wp-content/themes/redstarter/images/product-type-icons/eat.svg" alt="Mug icon">
        <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
        <button class="shop eat-stuff">EAT STUFF</button>
    </div>
    <div class="sleep stuff">
        <img src="wp-content/themes/redstarter/images/product-type-icons/sleep.svg" alt="Sleeping-bag icon">
        <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
        <button class="shop sleep-stuff">SLEEP STUFF</button>
    </div>
    <div class="wear stuff">
        <img src="wp-content/themes/redstarter/images/product-type-icons/wear.svg" alt="Toque icon">
        <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
        <button class="shop wear-stuff">WEAR STUFF</button>
    </div>
</section>

<h1>Inhabitent Journal</h1>
<div id"secondary" class="content-area">
        <main id="main" class="site-journal" role="main">
        <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3)?>
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


<?php get_footer(); ?>
