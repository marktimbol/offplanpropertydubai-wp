var Flickity = require('flickity');
var $ = require('jquery');

$(document).ready(function() {
    new Flickity('.main-carousel', {
        autoPlay: true,
        contain: true,
        pageDots: true,
        prevNextButtons: true,
    })
});