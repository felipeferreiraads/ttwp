$('.artist').height($('.artist').width())
$(window).on('load resize', function() {
    $('.artist').height($('.artist').width())
})