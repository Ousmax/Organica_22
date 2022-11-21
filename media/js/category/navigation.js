function showProducts(productsArray){
	productsHTML = "";
	for (var i = 0; i < productsArray.length; i++) {
	productsHTML = productsHTML + `<div class="col-lg-4 col-md-6 col-sm-6 shop_product" product_id=${productsArray[i]['id']}>
									<a href="/organica22/product/${productsArray[i]['id']}">	
									<div class="product__item sale">
									<div class="product__item__pic set-bg" style='background-image: url("/organica22/`+productsArray[i]['img']+`");'>
									</div>
									</a>
									<div class="product__item__text">
										<h6>${productsArray[i]['product']}</h6>
										<a class="add-cart" product_id='${productsArray[i]['id']}'>+ Add To Cart</a>
									</div>
								</div>
							</div>`;
}
$("#products_row").html(productsHTML);

/*$(".shop_product").click(function(e){

	loadProductPage($(this).attr('product_id'));

});*/
}

function loadProducts(criterion,value,critvalue,category='all'){

	productsHTML = "";

	productsArray = [];

	if(criterion=='search'){

		for (var i = 0; i < products.length; i++) {
		
			words = value.split(" ");

			for (var j = 0; j < words.length; j++) {

				if( products[i]['product'].toLowerCase().includes(words[j].toLowerCase()) ){

					productsArray.push(products[i]);

					break

				}

				if( products[i]['category'].toLowerCase().includes(words[j].toLowerCase()) ){

					productsArray.push(products[i]);

					break

				}

				if( products[i]['benefits'].toLowerCase().includes(words[j].toLowerCase()) ){

					productsArray.push(products[i]);

					break

				}

				if( products[i]['concern'].toLowerCase().includes(words[j].toLowerCase()) ){

					productsArray.push(products[i]);

					break

				}

			}

		}

	}

	else if(criterion=='all'){
		
		productsArray = products;

	}else{

	for (var i = 0; i < products.length; i++) {
		
		for (var j = 0; j < criteria[criterion].length; j++) {
			if( products[i][criterion].toLowerCase().includes(criteria[criterion][value][j]) ){
				productsArray.push(products[i]);
				break;
			}
		}
	}

	}

	currentCategory = category;

	initialProducts = productsArray;

	showProducts(productsArray);

	if(criterion=='all'){
		$(".breadcrumb__links .criterion").hide();
		$(".breadcrumb__links .critvalue").html('all');

	}else{
		$(".breadcrumb__links .criterion").show();
		$(".breadcrumb__links .criterion").html(criterion);
		$(".breadcrumb__links .critvalue").html(critvalue);
	}

}

function loadShop(criterion,value,critvalue,category='all'){	

	$(document).ready(()=>{
		$("#main_nav").trigger('click');
		loadProducts(criterion,value,critvalue);
		$("#page_content").append('<script src="/organica22/media/js/tagsHandler.js"></script>');
	});
}
