// To simulate fade in effect when page is loaded instead of the mundane sudden display of elements

$(document).ready(function () {
    $('body').fadeIn(3000);

    $('svg').click(function () {
        event.preventDefault();

        newLocation = 'http://platinumvine.com/home/';
        $('#intro').fadeOut(2000, newPage);
    });

    function newPage() {
        window.location = newLocation;
    }
});