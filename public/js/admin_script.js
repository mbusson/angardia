/* --- MENU --- */
// delay function (e.g. objmenu_ajax)
function delay(callback, ms) {
  var timer = 0;
  return function() {
    var context = this, args = arguments;
    clearTimeout(timer);
    timer = setTimeout(function () {
      callback.apply(context, args);
    }, ms || 0);
  };
}
$(document).ready( function() {
	// menu handler
	var indicator = $('#indicator');
	$('nav ul li').click( function() {
		$('li').removeClass('current');
		$(this).addClass('current');
		// manage indicator
		var liOffset = $(this).offset(), liHalfWidth = $(this).width()/10;
		indicator.offset({left: liOffset.left+liHalfWidth});
		// manage redirect
		var menu = $(this).attr('id');
		$.ajax({
		    type: 'GET', 
		    url : menu, 
		    success : function (data) {
		    	$('#content').empty();
		        $('#content').html(data);
		    }
		});
	});
	// display change & redirect function
	displayAdminAction = function (message){
		$('div#changelog').html(message);
	      $('#changelog').fadeIn( 750, function() {
		    $('#changelog').fadeOut(1750);
		  });
	}
});