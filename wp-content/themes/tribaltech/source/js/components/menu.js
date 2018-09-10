$('.menu-mobile').click(function() {
    $('.nav-mobile').slideToggle().css('display', 'flex')
    $('.overlay-menu').fadeToggle()
    return false
})

$('.overlay-menu').click(function() {
    $('.nav-mobile').slideToggle()
    $(this).fadeToggle()
})

$('.nav-mobile a').click(function () {
    $('.nav-mobile').slideToggle()
    $('.overlay-menu').fadeToggle()
})