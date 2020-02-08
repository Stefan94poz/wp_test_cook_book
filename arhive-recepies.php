<?php get_header(); ?>

<?php if (have_posts()):  ?>
    <?php while(have_posts()): the_post(); ?>
    <article>
        <div class="container">
            <div class="row">
                <div class="tumbnail-img col-md-12">
                    <h1><?php the_title(); ?></h1>
                    <!--Adding custom default post image -->
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                        } else { ?>
                        <img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" style="height:400px" alt="<?php the_title(); ?>" />
                    <?php } ?>
                </div>
                <div class="content-text col-md-12">
                    
                    <p><?php the_content(); ?></p>
                
                </div>
            </div>
        </div>
    </article>
    <?php endwhile; ?>
<?php endif; ?> 

<?php get_footer(); ?>