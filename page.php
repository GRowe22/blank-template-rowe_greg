<?php get_header(); ?>

    <section class="row">
        <div class="nine columns">
<!-- BEGIN PAGE PHP -->
            <?php if (have_posts()) {
                while (have_posts()) {
                    /*OUR DATA CONTEXT IS DEFINED */
                    the_post(); ?>

                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
                }
            } ?>
<!-- END PAGE PHP -->
        </div>

        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>
        
    </section>

<?php get_footer(); ?>
