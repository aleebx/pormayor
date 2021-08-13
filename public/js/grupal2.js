$(document).ready(function() {
	if (mediaqueryPC.matches) {
    $(".unidadSticky").stick_in_parent({inner_scrolling: false,offset_top: 70,}).on("sticky_kit:stick", function(e) {
      $(this).css("z-index",200);
    }).on("sticky_kit:bottom", function(e) {
      $(this).css("z-index",10);
    }).on("sticky_kit:unbottom", function(e) {
      $(this).css("z-index",200);
    });
  }
});