function totalPrice(){
	total = 0;

	$(".ajaxcart__product").each(function(e) {
		total = total + parseInt($(this).find('.ajaxcart__qty-num').val())*parseInt($(this).find('.ajaxcart-item__price').find('.price').attr('price'));
	})

	$("#total_price").html(total);
}

$(".cartContainer").click(function(e){
	e.stopPropagation();
})

$(".cartContainer").on('click','.ajaxcart__qty--plus',function(e){
	quantity = parseInt($(this).parent().children('input').val())+1;
	$(this).parent().children('input').val(quantity);
	price = parseInt($(this).parent().parent().parent().find('.ajaxcart-item__price').find('.price').attr('price'));
	$(this).parent().parent().parent().find('.ajaxcart-item__price').find('.price').html(price*quantity);
	totalPrice();
});

$(".cartContainer").on('click','.ajaxcart__qty--minus',function(e){
	quantity = Math.max(1,parseInt($(this).parent().children('input').val())-1);
	$(this).parent().children('input').val(quantity);
	price = parseInt($(this).parent().parent().parent().find('.ajaxcart-item__price').find('.price').attr('price'));
	$(this).parent().parent().parent().find('.ajaxcart-item__price').find('.price').html(price*quantity);
	totalPrice();
});

