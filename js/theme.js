jQuery('.carousel').carousel();

(function() {
	var header = new Headroom(document.querySelector("#header-head"), {
		"tolerance": 4,
		"offset": 205,
		"classes": {
			"initial": "animated",
			"pinned": "swingInX",
			"unpinned": "swingOutX",
			"top": "headroom--top",
			"notTop": "headroom--not-top"
		}
	});
	header.init();

}());

(function($) {
   $( ".front-widgets img" ).hover(
  function() {
    $( this ).addClass( "animated swing" );
  }, function() {
    $( this ).removeClass( "animated swing" );
  }
);
})(jQuery);