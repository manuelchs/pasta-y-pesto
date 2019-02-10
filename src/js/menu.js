$(function(){
    $('.menu-opt').click(function(){
        var menuToHide = $('.menu-opt-active').attr('menu').toString();
        var menuToShow = $(this).attr('menu').toString();
        $('#' + menuToHide).addClass('no-display');
        $('.menu-opt-active').removeClass('menu-opt-active');
        $(this).addClass('menu-opt-active');
        $('#' + menuToShow).removeClass('no-display');
    });
});