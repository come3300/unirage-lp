
jQuery(function(){
   var state = false;
   var pos;
  $("#overlay-input").click(function(){
    if (state == false) {
pos = $(window).scrollTop();
$("body").addClass("fixed").css({"top": -pos});
state = true;
} else {
$("body").removeClass("fixed").css({"top": 0});
window.scrollTo(0, pos);
state = false;
}
});
  });

  jQuery(function() {
    $('#overlay ul li').on('click', function(event) {
        $('#overlay-input').prop('checked', false);
        $("body").removeClass("fixed").css({"top": 0});
        $('.site-logo').removeClass('dis-none');
        $("#page-top").removeClass('dis-none');
    });
});
$('#overlay-button').on('click',function(){
  $('.site-logo').toggleClass('dis-none');
  $("#page-top").toggleClass('dis-none');
  $(".under-contact-tab").toggleClass('dis-none');
  console.log("クリックできます")
 });

 
