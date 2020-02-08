<?php 
/*
    Template Name: Recepise Homepage
*/

get_header();


if ( get_query_var( 'paged' ) ) {
     $paged = get_query_var( 'paged' ); 
    }
elseif ( get_query_var( 'page' ) ) { 
    $paged = get_query_var( 'page' ); 
}
else { 
    $paged = 1; 
}
$args = array(
    'post_type' => 'Recipes',
    'post_status' => 'publish',
    'post_per_page' => 8 ,
    'paged' => $paged
);

$loop = new WP_Query($args);
query_posts($args);

if (have_posts()){
    while(have_posts()){
        the_post();
        get_template_part('content', 'arhive'); 
    }
    echo '<div class="pagination-wraper col-md-12">';
    echo '<div class="col-xs-6 text-left">';
    previous_posts_link();
    echo "</div>";

    echo '<div class="col-xs-6 text-right">';
    next_posts_link();
    echo "</div>";
    echo '</div>';
    wp_reset_postdata(); 

}  
   

get_footer(); 

