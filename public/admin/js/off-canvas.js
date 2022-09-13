(function($) {
  'use strict';
  $(function() {
    $('[data-toogle="offcanvas"]').on("click", function() {
      $('.sidebar-offcanvas').toggleClass('active')
    });
  });
})(jQuery);
