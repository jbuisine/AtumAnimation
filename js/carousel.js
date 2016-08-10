$(document).ready(function() {
    var slide = window.location.search.charAt(10);
    if( slide == undefined || !(slide >= 0 && slide <=6)){
		slide = 0;
    }
	$("#Carousel").carousel(parseInt(slide));
});
