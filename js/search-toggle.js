(function($) {

    /**
     search box toggle
     **/

     $(function() {
         $('.search-toggle').on('click', function(event) {
             event.preventDefault();

             var $label = $(this).siblings('label');
                $label.animate({width: 'toggle'});
                $label.children('[type="seach"]').focus();
                $label.removeAttr('style');
         });

         $('.search-field').on('blur', function() {
            if ($(this).val() === '') {
                $('.header-search label').animate({width: 'hide'});
            }
         });

     });
})(jQuery);