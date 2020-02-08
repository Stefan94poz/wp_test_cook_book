<article>
    <div class="container">
        <div class="row">
            <div class="tumbnail-img ">
                <!--Adding custom default post images -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <?php else : ?> 
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                            <img src="<?php echo get_option('default_thumbnail') ?>" alt="<?php the_title(); ?>" />  
                        </a>
                    <?php endif; ?>
                <div class="post-content">
                    <?php the_title(sprintf('<h3 class="entry-title"><a href="%s">', esc_url(get_permalink() ) ),'</a></h3>'); ?>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
    </div>
</article>
