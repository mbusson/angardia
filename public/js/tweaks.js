/* Box-resizing to make it a 16px multiple */
$(function() {
    $div = $('.secondarycontainer');
    var remainderHeight = $div.height() % 16;	
    var newHeight = $div.height() + (16-remainderHeight);
    var remainderWidth = $div.width() % 16;
    var newWidth = $div.width() + (16-remainderWidth);
    $div.css('height', newHeight);
    $div.css('width', newWidth);
});

/* Make Welcome Box disappear after timeout */
$(document).ready(function() {
	    setTimeout(function() {
	        $("#welcome_popup").fadeOut(2500);
	    },5000);
});


/* Tabs system */
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
} 

/* Character Creation Stats Distributer */
$(document).ready(function(){
    
    $(".statdistrib").on("click", function() {

      var $button = $(this);
      var oldValue = $button.parent().find(".value").val();
      console.log(oldValue);

      if ($button.text() == "+") {
          var newVal = parseFloat(oldValue) + 1;
        } else {
       // Don't allow decrementing below zero
        if (oldValue > 0) {
          var newVal = parseFloat(oldValue) - 1;
        } else {
          newVal = 0;
        }
      }

      $button.parent().find(".value").val(newVal);
      console.log(newVal);

    });
});