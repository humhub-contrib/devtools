humhub.module('devtools', function (module, require, $) {
    module.initOnPjaxLoad = true;
    var init = function () {
        $('.devpanel-head:not(.disabled)').on('click', function () {
            $(this).next('.devpanel-body').slideToggle();
            var $icon = $(this).find('i');
            if ($icon.hasClass('fa-chevron-circle-right')) {
                $icon.removeClass('fa-chevron-circle-right').addClass('fa-chevron-circle-down');
            } else {
                $icon.removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-right');
            }
        });

        $('.section:not(.disabled)').on('click', function () {
            $(this).find('a')[0].click();
        });

        $('.dev-panel-link').on('click', function () {
            var $panel = $($(this).attr('href'));
            if(!$panel.find('.devpanel-body').is(':visible')) {
                $panel.find('.devpanel-head').trigger('click');
            }
        });
    };

    module.export({
        init: init
    });
});

