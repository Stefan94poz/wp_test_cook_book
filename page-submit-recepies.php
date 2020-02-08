<?php 
/*
    Template Name: Submit recepie
*/
get_header();
function register_team_show_case_setting() {
    //register our settings
        register_setting('my_team_show_case_setting', 'my_file_upload');
    }
    add_action('admin_init', 'register_team_show_case_setting');
    
if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == "recepie") {

    $title     = $_POST['title'];
    $description = $_POST['description'];
    $short_desc = $_POST['short_desc'];
    $post_type = 'recipes';
    
    
    //the array of arguements to be inserted with wp_insert_post
    $front_post = array(
    'post_title'    => $title,
    'post_content'  => $description,
    'post_excerpt'  => $short_desc,
    'post_status'   => 'pending',          
    'post_type'     => $post_type 
    );

    //insert the the post into database by passing $new_post to wp_insert_post
    //store our post ID in a variable $pid
    $post_id = wp_insert_post($front_post);
    //we now use $pid (post id) to help add out post meta data
    update_post_meta($post_id, "description", @$_POST["short_description"]);
    set_post_thumbnail( $post_id,  $image );

    if($_POST){
        echo "<p class='alert'>Your recipe has been submitted!</p>";
    }
}
echo 

'<div class="container">
<h1>Add your recipe</h1>

<form class="recepie-form" method="POST">
   
        <label>Recipe title</label>
        <input type="text" value="" class="input-xlarge" name="title">

        <label>Short Description</label>
        <input value=""   name="short_desc" />


        <label>Recipe Description</label>
        <textarea value="" name="description"></textarea>
    
        <button class="btn btn-primary">Add Recipe</button>
        
        <input type="hidden" name="action" value="recepie" />
 </from>

 </div>
';

get_footer(); 