$(document).ready(function() {
  $(".toggle").click(function() {
    $(".left_menu").css("display","block");
  });
  $(".left_menu_x").click(function() {
    $(".left_menu").css("display","none");
  });

  $(".logo").click(function() {
    $(".right_menu").css("display","block");
  });
  $(".right_menu_x").click(function() {
    $(".right_menu").css("display","none");
  });
});
