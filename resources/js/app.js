require('./bootstrap');

var $ = require('jquery');

$(document).ready(function(){
    $('.finder-icon').click(function(){
        $('.finder').toggleClass('d-none');
    });

    $('.finder svg').click(function(){
        $('.finder').toggleClass('d-none');
    });


    $(window).scroll(function(){

        let userScroll = window.scrollY;
        // console.log(userScroll);

        if (userScroll > 650) {
            $('.scroll-top').addClass('active');
        } else {
            $('.scroll-top').removeClass('active');
        }
    });

    $('.scroll-top').click(function(){
        window.scrollTo(0,0);
    });
});
