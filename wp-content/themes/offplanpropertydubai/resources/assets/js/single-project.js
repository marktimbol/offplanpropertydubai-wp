var Flickity = require('flickity');
var $ = require('jquery');

$(document).ready(function() {
    new Flickity('.single-project-carousel', {
        autoPlay: true,
        contain: true,
        pageDots: true,
        prevNextButtons: true,
    })
});