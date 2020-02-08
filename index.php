<?php get_header(); ?>

<?php 
$curent_page = get_query_var('paged');

$args = array('post_per_page' => 2, 'paged');
query_posts($args);

if (have_posts()):  ?>
    <?php while(have_posts()): the_post(); ?>
          <?php get_template_part('content', get_post_format())?>      
    <?php endwhile; ?>
<?php endif; ?> 

<?php get_footer(); ?>