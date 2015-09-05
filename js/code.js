jQuery(document).ready(function() {
    jQuery("#mtr-menu").click(function() {
        jQuery("#mtr-menu").css('visibility', 'hidden');
        jQuery("#mtr-sidenav").animate({
            left: '0px'
        });
    });
    jQuery("#close-menu").click(function() {
        jQuery("#mtr-sidenav").animate({
            left: '-60px'
        });
        jQuery("#mtr-menu").css('visibility', 'visible');
    });

    jQuery("#open-sidebar").click(function() {
        jQuery("#open-sidebar").css('visibility', 'hidden');
        jQuery("#mtr-sidebar").animate({
            right: '0'
        });
    });
    jQuery("#close-sidebar").click(function() {
        jQuery("#mtr-sidebar").animate({
            right: '-300px'
        });
        jQuery("#open-sidebar").css('visibility', 'visible');
    });


    jQuery('#mtr-main').masonry({
        itemSelector: '.mtr-brick',
        columnWidth: '.mtr-brick'
    });
    
    jQuery(window).scroll(function(){
        if ($(window).scrollTop() > 30){
            jQuery('#mtr-masthead').css('opacity','.8');
        }
    });
    jQuery(window).scroll(function(){
        if ($(window).scrollTop() < 30){
            jQuery('#mtr-masthead').css('opacity','1');
        }
    });   
   
});