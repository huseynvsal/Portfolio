$('.categories').on('click','.category',function(){
    var category = $(this).attr('id');
    if (category == 'all'){
        $('.project').css('display','flex');
    }
    else if(category == 'fe'){
        $('.front_end').css('display','none');
        $('.back_end').css('display','none');
        $('.full_stack').css('display','none');
        $('.front_end').css('display','flex');
    }
    else if(category == 'be'){
        $('.back_end').css('display','none');
        $('.front_end').css('display','none');
        $('.full_stack').css('display','none');
        $('.back_end').css('display','flex');
    }
    else if(category == 'fs'){
        $('.full_stack').css('display','none');
        $('.back_end').css('display','none');
        $('.front_end').css('display','none');
        $('.full_stack').css('display','flex');
    }
    $('.active_category').removeClass('active_category');
    $(this).addClass('active_category');
});

$('.categories').on('click','.category:nth-child(1)',function() {
    $('.float_bar').css('left','25px');
    $('.float_bar').css('width','110px');
});
$('.categories').on('click','.category:nth-child(2)',function() {
    $('.float_bar').css('left','185px');
    $('.float_bar').css('width','175px');
});
$('.categories').on('click','.category:nth-child(3)',function() {
    $('.float_bar').css('left','410px');
    $('.float_bar').css('width','160px');
});
$('.categories').on('click','.category:nth-child(4)',function() {
    $('.float_bar').css('left','620px');
    $('.float_bar').css('width','175px');
});


$('.hex_div').on('click','#log_in',function(){
    var opacity = $('.login').css('opacity');
    if (opacity == 0){
        $('.login').css('position','relative');
        $('.login').css('opacity','1');
        $('.login').css('z-index','1');
        $('.login').css('height','450px');
    }
    else{
        $('.login').css('position','absolute');
        $('.login').css('opacity','0');
        $('.login').css('z-index','-1000');
        $('.login').css('height','0');
    }
});
$('.navbar_links').on('click','#log_in2',function(){
    $('.login').css('position','relative');
    $('.login').css('opacity','1');
    $('.login').css('z-index','1');
    $('.login').css('height','450px');
});
$("#log_in").click(function() {
    $('html, body').animate({
        scrollTop: $("#login").offset().top
    }, 500);
});
$("#home_").click(function() {
    $('html, body').animate({
        scrollTop: $("#home").offset().top
    }, 500);
});
$("#about_").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 500);
});
$("#contact_").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 500);
});
$("#projects_").click(function() {
    $('html, body').animate({
        scrollTop: $("#projects").offset().top
    }, 500);
});

$("#log_in2").click(function() {
    $('html, body').animate({
        scrollTop: $("#login").offset().top
    }, 250);
});
$("#home_2").click(function() {
    $('html, body').animate({
        scrollTop: $("#home").offset().top
    }, 500);
});
$("#about_2").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 500);
});
$("#contact_2").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 500);
});
$("#projects_2").click(function() {
    $('html, body').animate({
        scrollTop: $("#projects").offset().top
    }, 500);
});
$(".t_contact").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 500);
});
$(function(){
    var height = ($('#home').height());
    $(window).scroll(function(){
        if ($(this).scrollTop() > height) {
            $('.none').addClass('fixed');
            $('.fixed').removeClass('none');
        }
        else{
            $('.fixed').addClass('none');
            $('.none').removeClass('fixed');
        }
    })
});
$(function(){
    $(window).scroll(function(){
        var about_top = $('#about').offset().top - 50;
        var projects_top = $('#projects').offset().top - 50;
        var contact_top = $('#contact').offset().top - 50;
        var footer_top = $('.footer').offset().top - 50;
        var login_top = $('.login').offset().top - 50;

        if ($(this).scrollTop() >= about_top  && $(this).scrollTop() <= projects_top) {
            $('.navbar_link_active').addClass('navbar_link');
            $('.navbar_link_active').removeClass('navbar_link_active');
            $('#about_2').addClass('navbar_link_active');
            $('#about_2').removeClass('navbar_link');
        }
        if($(this).scrollTop() >= projects_top && $(this).scrollTop() <= contact_top){
            $('.navbar_link_active').addClass('navbar_link');
            $('.navbar_link_active').removeClass('navbar_link_active');
            $('#projects_2').addClass('navbar_link_active');
            $('#projects_2').removeClass('navbar_link');
        }
        if($(this).scrollTop() >= contact_top && $(this).scrollTop() <= footer_top){
            $('.navbar_link_active').addClass('navbar_link');
            $('.navbar_link_active').removeClass('navbar_link_active');
            $('#contact_2').addClass('navbar_link_active');
            $('#contact_2').removeClass('navbar_link');
        }
        if($(this).scrollTop() >= login_top && $(this).scrollTop() <= about_top){
            $('.navbar_link_active').addClass('navbar_link');
            $('.navbar_link_active').removeClass('navbar_link_active');
            $('#log_in2').addClass('navbar_link_active');
            $('#log_in2').removeClass('navbar_link');
        }
    })
});
$(function(){
    $(window).scroll(function(){
        var opacity = $('.login').css('opacity');
        if(opacity == 0){
            var login_height = 0;
        }
        else{
            var login_height = $('.login').height();
        }
        if ($(this).height() > 1500){
            var res_height = -1500;
        }
        else{
            res_height = 0;
        }
        if ($(this).scrollTop() > 350 + login_height + res_height) {
            setTimeout(function(){$('.about .page_texts').css('animation','slideInLeft 0.75s ease both');}, 500);
            setTimeout(function(){$('.about .page_underlines').css('animation','slideInLeft 0.75s ease both');}, 1000);
        }
        if ($(this).scrollTop() > 1500 + login_height + res_height) {
            setTimeout(function(){$('.projects .page_texts').css('animation','slideInRight 0.75s ease both');}, 500);
            setTimeout(function(){$('.projects .page_underlines').css('animation','slideInRight 0.75s ease both');}, 1000);
        }
        if ($(this).scrollTop() > 2125 + login_height + res_height) {
            setTimeout(function(){$('.contact .page_texts').css('animation','slideInLeft 0.75s ease both');}, 500);
            setTimeout(function(){$('.contact .page_underlines').css('animation','slideInRight 0.75s ease both');}, 1000);
        }

        if ($(this).scrollTop() > 500 + login_height + res_height) {
            var timeout = 500;
            $('.hexagons_rotate').each(function( index ) {
                setTimeout(function(){$('.about_hexagons:nth-child('+(index+1)+') .hexagons_rotate').css('animation','flipInX 0.75s ease both');}, timeout);
                timeout+=150;
            });
        }

        if ($(this).scrollTop() > 600 + login_height + res_height) {
            var timeout = 500;
            $('.hex_info, .hex_header').each(function( index ) {
                setTimeout(function(){$('.about_hexagons:nth-child('+(index+1)+') .hex_info, .hex_header').css('animation','opacity 0.75s ease both');}, timeout);
                timeout+=150;
            });
        }

        if ($(this).scrollTop() > 900 + login_height + res_height) {
            $('.info').css('animation','slideInLeft 0.75s ease both');
            $('.lang_main').css('animation','slideInRight 0.75s ease both');

            var timeout = 750;
            $('.lang_animated').each(function( index ) {
                setTimeout(function(){$('.lang:nth-child('+(index+1)+') .lang_animated').css('animation','slideWidthLeft 0.75s ease both');}, timeout);
                timeout+=100;
            });
        }

        if ($(this).scrollTop() > 1650 + login_height + res_height) {
            setTimeout(function(){$('.categories').css('animation','opacity 0.75s ease both');}, 500);
        }

        if ($(this).scrollTop() > 1700 + login_height + res_height) {
            var timeout = 500;
            $('.project_animated').each(function(index) {
                setTimeout(function(){$('.project:nth-child('+(index+3)+') .project_animated').css('animation','slideBottom 0.75s ease both');}, timeout);
                timeout+=100;
            });
        }

        if ($(this).scrollTop() > 2175 + login_height + res_height) {
            setTimeout(function(){$('.contact .contact_text').css('animation','slideInRight 0.75s ease both');}, 500);
        }

        if ($(this).scrollTop() > 2325 + login_height + res_height) {
            setTimeout(function(){$('.contact .contact_infos').css('animation','popIn 1s both');}, 500);
        }
    });
});

$('.contact_inner .contact_infos').on('click', '.submit', function(){
    var name = $('input[name=name]').val();
    var email = $('input[name=email]').val();
    var message = $('textarea[name=message]').val();
    $.ajax({
        type: "POST",
        url: url,
        data: {"_token": token,'name':name,'email':email,'message':message},
        success:function(response){
            console.log(response);
            if (response.message == 'success') {
                toastr.success('Message sent');
                $('input[name=name]').val('');

                $('input[name=email]').val('');
                $('textarea[name=message]').val('');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});



