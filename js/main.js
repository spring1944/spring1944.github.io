// Number of background images available in videos folder
N_BACKGROUND_IMAGES = 7;

$( document ).ready(function() {
    // Mobile devices may have some data download limitations, such that a video
    // might be a bit an abuse. In such a case we better move to a static image
    if ( jQuery.browser.mobile ) {
        // Mobile platform, try to reduce the page size using a static image
        img = Math.floor((Math.random() * N_BACKGROUND_IMAGES) + 1);
        $("#video_background").html(
            "<img src='videos/" + img + ".png' width='100%' />"
        );
    }
    else {
        // Desktop, download the background video
        $("#video_background").html("                                             \
<video preload='auto' autoplay='true' loop='loop' muted volume='0' width='100%'>  \
    <source src='./videos/s44_bg.webm' type='video/webm' />                       \
</video>                                                                          \
        ");
    }

    
}); 
