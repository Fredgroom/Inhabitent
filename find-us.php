<?php /* Template Name: Find US Template */ 
get_header(); ?>

<div class="find-us-article">
    <div class="find-us">
        <h1>FIND US</h1>
                <iframe
                width="600"
                height="450"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDjA4Eebws3UHnF5fo_UqhRqflkFuxEMGQ&q=1490+W+Broadway,+Vancouver,+BC,+Canada
                " allowfullscreen>
                </iframe>

        <h1>WE TAKE CAMPING VERY SERIOUSLY</h1>
            <p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>

        <h1>SEND US EMAIL!</h1>


        <div id"primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php echo the_content(); ?>
                <?php endwhile; ?>

            </main>
        </div>
    </div>

    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>