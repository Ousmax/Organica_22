$(document).ready(function(e){

$(".product_size1").click(function(e){
  $(".product_price").html($(".product_price").attr('price1')+"€");
  $(".product_size1").toggleClass('selected');
  $(".product_size2").toggleClass('selected');
})

$(".product_size2").click(function(e){
  $(".product_price").html($(".product_price").attr('price2')+"€");
  $(".product_size1").toggleClass('selected');
  $(".product_size2").toggleClass('selected');
})

})