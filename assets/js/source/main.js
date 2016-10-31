jQuery(document).ready(function($) {

	$(function() {
    $('.publication-title').matchHeight({
        target: $('.match-title')
    });

    $('.publication-subtitle').matchHeight({
        target: $('.match-subtitle')
    });  

    $('.publication-text').matchHeight({
        target: $('.match-text')
    });     
	});

});