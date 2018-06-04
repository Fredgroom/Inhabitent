<?php /* Template Name: About Us Template */ 
get_header(); ?>

<div class="header-banner">
    <h1>About</h1>
    </div>

    <div id"primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <h2>Our Story</h2>
                <?php echo CFS()->get('our_story'); ?>
                <h2>Our Team</h2>
                <?php echo CFS()->get('our_team'); ?>
            <?php endwhile; ?>

        </main>
    </div>

<?php get_footer(); ?>