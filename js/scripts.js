$(document).ready(function() {
    $('.loader').remove();
    $('#mainbody').removeClass('hide');
    //initialization
    $('.scrollspy').scrollSpy();
    $('.fixed-action-btn').openFAB();
    $('.slider').slider({full_width: true, indicators: false});
    $(".button-collapse").sideNav();
    $('.collapsible').collapsible();
    $('.modal-trigger').leanModal();
    $(".dropdown-button").dropdown();
        
    $(window).scroll(function() {
        var h = $('.top-nav').height() + $('.slider').height() + $('.navbar').height();
        if ($(document).scrollTop() >  h) {
            $('.tble').css("position", "fixed");
            $('.tble').css("top", "0px");
            $('.tble').css("right", "0px");
        } else {
            $('.tble').css("position", "inherit");
        }
    });

});

$(function()
{
	
	$('marquee').mouseover(function() {$(this).attr('scrollamount',0);})
	.mouseout(function() {$(this).attr('scrollamount',3);});
});