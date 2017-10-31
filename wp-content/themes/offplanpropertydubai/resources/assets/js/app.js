var Flickity = require('flickity');
var $ = require('jquery');

$(document).ready(function() {
    new Flickity('.developers-carousel', {
        autoPlay: true,
        contain: true,
        pageDots: false,
        prevNextButtons: true,
    })
});