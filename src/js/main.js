$(function(){
    $('#burger').click(function() {
        if( $(this).hasClass('opened') ) {
            hideMenu(this);
        } else {
            showMenu(this);

        }
    });
});

function showMenu(e) {
    $(e).addClass('opened');
    $('#menuList').removeClass('no-show');
    $('#logo').addClass('non-opacity');

}

function hideMenu(e) {
    $(e).removeClass('opened');
    $('#menuList').animate({marginLeft: '-30px', opacity: 0}, 300, function() {
        $('#menuList').addClass('no-show');
        $('#menuList').removeAttr('style');
        $('#logo').removeClass('non-opacity');
    });

}