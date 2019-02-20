$(document).ready(function() {
/* Sidebar hide / show */
    let toggle = 0;
    $("#sidebar_toggle").click(function() {
        if (toggle == 0) {
            $("#sidebar, #sidebar_toggle, #sidebar::before").animate({ right: "-=205" }, 750);
            $("#sidebar_toggle_symbol").html("&laquo;");
            toggle = 1;
        } else if (toggle == 1) {
            $("#sidebar, #sidebar_toggle, #sidebar::before").animate({ right: "+=205" }, 750);
            $("#sidebar_toggle_symbol").html("&raquo;");
            toggle = 0;
        }
    });
/* Equipment display */
	function removeEquipBox(box) {
		box.animate({ opacity: 0 }, 300, function() {
			box.removeClass("equipboxvisi").addClass("equipitmbox");
			box.remove();
		});
	}
	function insertEquipBox(newBox) {
		var newelem = newBox.clone().appendTo("#flexequipcontainer");
		newelem.removeClass("equipitmbox").addClass("equipboxvisi");
		newelem.animate({ opacity: 1 }, 300);
		$('.closeItmWindow').off('click').click(function(){
			var box = $(this).parent('.equipboxvisi');
			removeEquipBox(box);
		});
		if ($('.equipboxvisi').length >= 2 && $('#closeAll').length == 0) {
			$( "#flexequipcontainer" ).append( "\
				<div id='closeAll'><h3>Tout Fermer</h3></div>\
				" );
			console.log($('#closeAll'));
			$('#closeAll').click(function(){
				$('.equipboxvisi').remove();
				$(this).remove();
			});
		}
	}
	$('.equipitm').off('click').click(function(){
		var box = $(this).parent('div').find('.equipitmbox');
		insertEquipBox(box);
	});
});