/**
 * FigmaToWoo Interactive Blocks JS
 */

(function ($) {
  'use strict';

  var FTW = {
    init: function () {
      this.bindAccordion();
      this.bindTabSwitchers();
    },

    bindAccordion: function () {
      $(document).on('click', '.ftw-accordion-header', function () {
        var $item = $(this).closest('.ftw-accordion-item');
        $item.toggleClass('is-active');
        $item.find('.ftw-accordion-content').slideToggle(200);
      });
    },

    bindTabSwitchers: function () {
      $(document).on('click', '.ftw-tab-btn', function () {
        var $btn = $(this);
        var target = $btn.data('target');

        $btn.siblings().removeClass('active');
        $btn.addClass('active');

        var $container = $btn.closest('.ftw-tabs-wrapper');
        $container.find('.ftw-tab-pane').removeClass('active');
        $container.find(target).addClass('active');
      });
    }
  };

  $(document).ready(function () {
    FTW.init();
  });
})(jQuery);

