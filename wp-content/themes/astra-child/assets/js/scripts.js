$(document).ready(function() {
    function HajimiOnResize() {
        if( window.matchMedia("(max-width: 1199px)").matches ) {
            $(document).on('click', '#masthead .elementor-widget-eael-simple-menu .eael-simple-menu-toggle', function() {
                var $button = $(this);
                $button.toggleClass('is-active');
            })
        }
        else {
            $('#masthead .elementor-widget-eael-simple-menu .eael-simple-menu-toggle').removeClass('is-active');
        }
    }
    $(window).on('resize', HajimiOnResize);
    HajimiOnResize();
});