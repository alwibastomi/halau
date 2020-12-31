(function($) {
  'use strict';
  $(function() {
    $('[data-toggle="offcanvas"]').on("click", function() {
      $('.sidebar-offcanvas').toggleClass('active'),
      $('.main-panel').toggleClass('active')
    });
  });
})(jQuery);