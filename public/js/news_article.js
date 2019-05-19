$(document).ready(function() {
    $('.js-like-article').on('click', function(e) {
        e.preventDefault();
        var $link = $(e.currentTarget);
        $link.toggleClass('fab fa-hotjar cold').toggleClass('fab fa-hotjar hot');
        $.ajax({
            method: 'POST',
            url: $link.attr('href')
        }).done(function(data) {
            $('.js-like-article-count').html(data.likes);
        })
    });
});