/*box-resizing to make it a 16px multiple*/
$(function() {
    $div = $('.secondarycontainer');
    var restHeight = $div.height() % 16;	
    var newHeight = $div.height() + (16-restHeight);
    var restWidth = $div.width() % 16;
    var newWidth = $div.width() + (16-restWidth);
    $div.css('height', newHeight);
    $div.css('width', newWidth);
});