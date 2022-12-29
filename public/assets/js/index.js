$(function(){
  $(".like1 , .like2" ).on("click", function(){
    $(this).toggleClass("change")
    $(this).toggleClass("change2")
  });
});