<?php settings_errors(); ?>

<?php $thumbnail = get_option('default_thumbnail'); ?>
<img id='admin-thumbnail-image' src='<?php echo $thumbnail ?>' alt="Default thumbnail">
    
<h1 class='admin-thumbnail-h1'>Thumbnail Default Image</h1>

<form method="post" action="options.php">
    <?php settings_fields('admin-thumbnail-group'); ?>
    <?php do_settings_sections('wp_test'); ?>
    <p class='admin-thumbnail-p'>Please upload your image:</p>
    <input type='button' class='button button-secondary' value='Upload Image' id='upload-button' />
    <input id='default-thumbnail' type='hidden' name='default_thumbnail' value='<?php echo $thumbnail ?>' />
    
    <?php submit_button(); ?>
 </form>

