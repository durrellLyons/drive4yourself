function mobileMenu() {
    $('#mobileMenuButton').click(function(){
        $('.mobileNav ul').toggle(500);
    });
}

function navigation(selector, div_id){
    $(selector).click(function() {
        $.scrollTo(document.getElementById(div_id), 800);
        if($('nav').hasClass('mobileNav')) {
            $('.mobileNav ul').hide(500);
        }
    });
}