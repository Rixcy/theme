(function ($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 100
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function () {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 50
        }
    })

    $('.back-to-top').css({ "display": "none" });

})(jQuery); // End of use strict

// function to show/hide the back-to-top icon
jQuery(document).ready(function() {
 
    var offset = 250;
    var duration = 300;
 
    jQuery(window).scroll(function() {
 
        if (jQuery(this).scrollTop() > offset)
        {
            jQuery('.back-to-top').fadeIn(duration);
        }
        else
        {
            jQuery('.back-to-top').fadeOut(duration);
        }
    })});