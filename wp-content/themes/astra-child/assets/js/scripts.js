$(document).ready(function() {
    function HajimiOnResize() {
        if( window.matchMedia("(max-width: 1199px)").matches ) {
            $(document).on('click', '#masthead .elementor-widget-eael-simple-menu .eael-simple-menu-toggle', function() {
                var $button = $(this);
                $button.toggleClass('is-active');
            });

        }
        else {
            $('#masthead .elementor-widget-eael-simple-menu .eael-simple-menu-toggle').removeClass('is-active');
        }

        
        if( window.matchMedia("(max-width: 767px)").matches ) {
            $(document).on('click', '.hajimi-searchbar > .btn.btn-search', function() {
                var $button = $(this),
                    $parent = $button.parents('.hajimi-searchbar');
                if( $parent.hasClass('searchbar-opened') ) {
                    $parent.removeClass('searchbar-opened');
                    $('.hajimi-searchbar .hajimi-search-form').fadeOut();
                }
                else {
                    $parent.addClass('searchbar-opened');
                    $('.hajimi-searchbar .hajimi-search-form').fadeIn();
                }
            });
        }
        else {
            if( $('.hajimi-searchbar').hasClass('searchbar-opened') ) {
                $('.hajimi-searchbar').removeClass('searchbar-opened');
                $('.hajimi-searchbar .hajimi-search-form').fadeOut();
            }
        }
    }
    $(window).on('resize', HajimiOnResize);
    HajimiOnResize();
});