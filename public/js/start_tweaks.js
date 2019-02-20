/* AJAX loader */
$(document).ajaxStart(function(){
    $('#ajaxload').show();
});
$(document).ajaxComplete(function(){
    $('#ajaxload').hide();
});
$(document).ready(function() {
  function menuClick(elem) {
    const menuItemID = elem.attr('id');
    var route = "mm_"+menuItemID;
        $.ajax({
            type: 'GET', 
            url : route, 
            success : function (menuContent) {
                $('#mainMenuDiv').html(menuContent)
                    .delay(125)
                    .animate({ opacity: 1 }, 375)
                    .css({"display":"block"});
                $("#playview").css({filter:"blur(2px) brightness(50%)"});
                $('[role="tooltip"]').removeClass('isVisible');
            }
        });
  }
  $('.menu_item').click(function(){
    menuClick($(this))
  });
  /* Box-resizing to make it a 16px multiple */
    $(function() {
        $div = $('.secondarycontainer');
        let remainderHeight = $div.height() % 16;	
        let newHeight = $div.height() + (16-remainderHeight);
        let remainderWidth = $div.width() % 16;
        let newWidth = $div.width() + (16-remainderWidth);
        $div.css('height', newHeight);
        $div.css('width', newWidth);
    });

  /* Make Welcome Box disappear after timeout */
    setTimeout(function() {
        $("#welcome_popup").fadeOut(2500);
    },5000);
});