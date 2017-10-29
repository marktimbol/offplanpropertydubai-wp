var Flickity = require('flickity');
var $ = require('jquery');

$(document).ready(function() {
    new Flickity('.main-carousel', {
        autoPlay: true,
        contain: true,
        pageDots: true,
        prevNextButtons: true,
    })

    new Flickity('.developers-carousel', {
        autoPlay: true,
        contain: false,
        pageDots: false,
        cellAlign: 'left',
        prevNextButtons: true,
    })    
});