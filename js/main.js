$.fn.extend({
    animateCss: function(animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});



$(document).ready(function() {

    var window_width = $(window).width();
    var window_height = $(window).height();


    $('.page_box_top_iner h2').animateCss('zoomIn');

    $('#front_main_slider').on('cycle-before', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
        console.log('animate.css');
        var a = $(incomingSlideEl);
        var b = $(outgoingSlideEl);
        //   $('.slider_item_iner_text h2', a).animateCss('zoomIn');
        //   $('.slider_item_iner_text a', a).animateCss('zoomIn');
        //   $('.slider-iner-left p', a).animateCss('fadeInDown');
        //$('.slider-iner-left-bottom a', a).animateCss('fadeInDown');
        //  $('.slider-button', a).animateCss('fadeInUp');

    });






    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'swing');
        event.preventDefault();
    });


    $('.slider_holder').css('height', window_height - 70 + 'px');
    $('.slider_item').css('height', window_height - 70 + 'px');
    // $('.slider_holder').css('height', window_height - 70 + 'px');


    if (window_width > 780) {
        $('.front_box_services').css('min-height', $('.front_box_services').width() + 'px');
        $('.front_box_clients').css('min-height', $('.front_box_clients').width() + 'px');
    }



    $('.cell_cover').css('height', $('.cell_cover').height() + 'px');
    $('.cell_iner').css('height', $('.cell_iner').height() + 'px');


    //main_slider_control
    var arrowHeight = $('.main_slider_control').height();
    var marginArrow = window_height - arrowHeight;
    console.log(arrowHeight);

    $('.main_slider_control').css('margin-top', marginArrow / 2 - $('.navbar').height() + 'px');



    //=================================================

    /////////// animation on scroll //////////////////
    /*
    * dependencies:
    * - jQuery
    * - jquery.waypoints.min.js
    * - inview.min.js
    * - animate.css

    * options:
     paw-on-mobile = 'true' / 'false' - show on mobile
     paw-animate - type of animation
     paw-delay -delay animation

    */

    function paw_animation(element) {


        $.fn.extend({
            animateCss: function(animationName) {
                var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                $(this).addClass('animated ' + animationName).one(animationEnd, function() {
                    $(this).removeClass('animated ' + animationName);
                });
            }
        });

        var elementsTT = $(element).find("[paw-animate]");
        $.each(elementsTT, function(index, value) {
            var paw_element = $(this);
            if (paw_element[0].hasAttribute("paw-animate")) {
                //detect if IE or Microsoft Edge
                if (!/Edge\/\d./i.test(navigator.userAgent) & !/MSIE 9/i.test(navigator.userAgent) & !/rv:11.0/i.test(navigator.userAgent) & !/MSIE 10/i.test(navigator.userAgent)) {
                    $(this).css('opacity', '0'); // This will only run if browser is NOT Microsoft Edge
                }




                var paw_animation = $(this).attr("paw-animate");
                var attr = $(this);
                var inview = new Waypoint.Inview({
                    element: $(this)[0],

                    enter: function(direction) {

                        if (direction === 'down') {
                            if (paw_element[0].hasAttribute("paw-delay")) {
                                var deley_number = paw_element.attr("paw-delay");
                                var delay_secends = deley_number / 1000;
                                setTimeout(function() {
                                    paw_element.css('opacity', '1');
                                }, deley_number);
                                paw_element.css('-vendor-animation-delay', delay_secends + 's');
                                paw_element.css('animation-delay', delay_secends + 's');
                            }

                            attr.animateCss(paw_animation);
                        }

                    },
                    exited: function(direction) {
                        if (direction === 'up') {
                            paw_element.css('opacity', '0');
                        }
                    }
                });
            }
        });

    } //paw_animation



    paw_animation($('body')); //animate all elements with attribute "paw-animate"
    //==============================================
});

var $cell = $('.image__cell');


$cell.find('.image--basic').click(function() {
    var $thisCell = $(this).closest('.image__cell');

    if ($thisCell.hasClass('is-collapsed')) {
        $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed');
        $thisCell.removeClass('is-collapsed').addClass('is-expanded');

    } else {
        $thisCell.removeClass('is-expanded').addClass('is-collapsed');
    }
});

$cell.find('.expand__close').click(function() {

    var $thisCell = $(this).closest('.image__cell');

    $thisCell.removeClass('is-expanded').addClass('is-collapsed');
});