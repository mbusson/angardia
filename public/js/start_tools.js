$(document).ready(function(){
  /* on-hover tooltips */
  (function ($) {
    $.fn.tooltip = function () {
      this.on('mouseenter', '.help', function (e) {
          e.stopPropagation();
          $(this).removeClass('isVisible');
        })
        .on('mouseenter focus', ':has(>.help)', function (e) {
          if (!$(this).prop('disabled')) { // IE 8 fix
            $(this)
              .find('.help')
              .addClass('isVisible');
          }
        })
        .on('mouseleave blur keydown', ':has(>.help)', function (e) {
          if (e.type === 'keydown') {
            if(e.which === 27) {
              $(this)
                .find('.help')
                .removeClass('isVisible');
            }
          } else {
            $(this)
              .find('.help')
              .removeClass('isVisible');
          }
        });
      return this;
    };
  }(jQuery));
  $('body').tooltip();

});