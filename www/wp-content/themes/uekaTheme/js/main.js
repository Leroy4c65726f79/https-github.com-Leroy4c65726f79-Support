jQuery(document).ready(function($) {

  //gen Loupe
  $(".main-navi > ul > .page_item:last-child").append('<div class="seartchloope"></div> ');



  function openseartch() {
      // $("header").after('<div class="seartchc"><?php get_search_form(); ?></div>');
      $("header").css('position', 'absolute');
      $(".seartchc").css('display', 'block');
      $( ".seartchc" ).animate({
        height: "+=180px"
      }, 600, function() {
        // Animation complete.
      });
    };

function closeSeartch() {
      $( ".seartchc" ).animate({
        height: "-=180px"
      }, 600, function() {
        // Animation complete.
        $("header").css('position', 'relative');
        $(".seartchc").css('display', 'none');
      });
}



var state = true;
  $(".seartchloope").click(function(){
    if (state) {
      openseartch();
      state = false;
    } else {
      closeSeartch();
      state = true;
    }
  });







document.getElementById("inputindefier1").oninput = function() {changealain()};
  function changealain() {
    console.log("klj");
    $("#inputindefier1").css('text-align', 'center');
    $("#inputindefier1").css('width', '100%');
    $(".form-group").css('margin-left', '0%');
  }





});
