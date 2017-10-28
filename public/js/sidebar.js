$(document).ready(function () {
 $( ".change_to_left" ).click(function() {
  $('.wrap').removeClass('sidebar-right');
   $('.wrap').addClass('sidebar-left');
});

   $( ".change_to_right" ).click(function() {
  $('.wrap').removeClass('sidebar-left');
   $('.wrap').addClass('sidebar-right');
});

  }); 
