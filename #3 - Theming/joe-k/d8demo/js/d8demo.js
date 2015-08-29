// d8demo.js
(function ($, Drupal) {

  "use strict";

  $(function () {

      var _d8demo = {

        blogInfo: function() {
          var blogInfo = $('div.field-node--field-author').data('quickedit-field-id');
          console.log(blogInfo);
        },

        init: function() {
          this.blogInfo();
        }
      } // end _d8demo{}

      _d8demo.init();

  })
})(jQuery, Drupal);
