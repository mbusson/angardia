/* AJAX setup */
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

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

/* Character Creation Stats Distributer */
$(document).ready(function(){  
    $(".statdistrib").on("click", function() {
      var $button = $(this);
      var oldValue = $button.parent().find(".value").val();
      var sum = 0;
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
    });
});

/* Character Creation Stats Comparator */
$(document).ready(function(){  
    // Display sum of inputs every time a button is clicked
    $(".statdistrib").on("click", function() {
        var mainsum = 0;
        $(".mainstats").each(function(){
            mainsum += +$(this).val();
        });
        var mainsumdisplay = '<h3>Votre total: ' + mainsum + '</h3>';
        $("#totalpoints").html(mainsumdisplay);
        var secsum = 0;
        $(".secstats").each(function(){
            secsum += +$(this).val();
        });
        var secsumdisplay = '<h3>Votre total: ' + secsum + '</h3>';
        $("#sectotalpoints").html(secsumdisplay);
        // Check if sum == total
        var totalmainvalue = $("#maintotal").html();
        var totalsecvalue = $("#sectotal").html();
        if (totalmainvalue == mainsum && totalsecvalue == secsum) {
            console.log("C'est égal!");
            $("#submissiondiv").html('<input type="submit" value="Valider"/>');
        } else {
            console.log("Nope!");
            $("#submissiondiv").html('Les valeurs ne correspondent pas à vos lancers de dés.');
        }
    });
});