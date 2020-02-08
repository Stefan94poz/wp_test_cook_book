<?php get_header(); ?>

<?php if (have_posts()):  ?>
    <?php while(have_posts()): the_post(); ?>
    <article>
        <div class="container">
            <div class="row">
                <div class="content-wraper col-md-8">
                    <div class="tumbnail-img col-md-12">
                        <h1><?php the_title(); ?></h1>
                        <!--Adding custom default post image -->
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                            } else { ?>
                            <img src="<?php echo get_option('default_thumbnail') ?>" alt="<?php the_title(); ?>" />  
                        <?php } ?>
                    </div>
                    <div class="content-text col-md-12">
                        <p><?php the_content(); ?></p>
                        
                        
                    </div>
                </div>
                
                <div class="sidebar-wraper col-md-4">
                    <?php get_sidebar(); ?>
                </div>
                
            </div>
            <div class="row pagination-wraper">
                <div class="col-md-6 text-left">
                    <?php previous_post_link('%link'); ?>
                </div>
                <div class="col-md-6  text-right">
                        <?php next_post_link('%link'); ?>
                </div>
            </div>
        </div>
    </article>
    <?php endwhile; ?>
<?php endif; ?> 

<?php get_footer(); ?>