$(document).ready(function() {
  $(".toggle").click(function() {
    $(".left_menu").css("display","block");
  });
  $(".left_menu_x").click(function() {
    $(".left_menu").css("display","none");
  });
});
