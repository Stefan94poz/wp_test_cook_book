jQuery(document).ready( function(){
    var mediaUploader;

    jQuery('#upload-button').on('click', function(e){
        e.preventDefault();
        if(mediaUploader){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Chose Thumbnail Picture',
            button: {
                text: 'Chose Picture'
            },
            multiple:false
        });

        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            jQuery('#default-thumbnail').val(attachment.url);
            jQuery("img").attr("src", attachment.url);

        });
        mediaUploader.open();
    });
});