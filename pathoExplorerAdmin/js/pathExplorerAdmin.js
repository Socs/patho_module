$(document).ready(function() {

$('.accordion').on('click', '.accordion-toggle', function(){
      //Expand or collapse this panel
      var that = $(this);
      $(this).toggleClass('open').next().slideToggle('fast', function() {
        $('html,body').animate({ scrollTop: (that.offset().top - 80) }, 1000);
        // Get images
        var dailyImages = $(this).find('img');
        // Lazy load the src
        dailyImages.each(function() {
          var newSrc = $(this).data('src');
          $(this).attr('src', newSrc);
        });
        // Add drag and drop
        $('.sortable').sortable({
          revert     : true,
          placeholder: 'ui-state-highlight',
          cursor     : 'move',
          opacity    : '.8',
          helper: function(event, ui){
            var $clone =  $(ui).clone();
            $clone .css('position','absolute');
            return $clone.get(0);
          },
        }).disableSelection();
      });
      //Hide the other panels
      $(".accordion-content").not($(this).next()).slideUp('fast').prev().removeClass('open');
    });

});