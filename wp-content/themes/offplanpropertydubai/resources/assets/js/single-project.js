var Flickity = require('flickity-as-nav-for');
var $ = require('jquery');

$(document).ready(function() {
    new Flickity('.single-project-carousel', {
        autoPlay: true,
        contain: true,
        pageDots: false,
        prevNextButtons: true,
    })
    new Flickity('.single-project-carousel--nav', {
    	asNavFor: '.single-project-carousel',
        contain: true,
        pageDots: false,
        prevNextButtons: false,
    })    
});