initialProducts = [];

currentCategory = 'all';

function content(page){

	$(document).ready(()=>{
		$.ajax({
			headers: { "X-CSRFToken": token },
			url :"/organicaa/"+page,
			method : "post",
			data : {},
			success : (res)=>{
				$("#page_content").html(res);
			},
			error : (err)=>{}
		});
	});
}

function loadShop(criterion,value,critvalue,category='all'){	

	$(document).ready(()=>{
		$.ajax({
			headers: { "X-CSRFToken": token },
			url :"/organicaa/products",
			method : "post",
			data : {},
			success : (res)=>{
				$("#page_content").html(res);
				$("#main_nav").trigger('click');
				loadProducts(criterion,value,critvalue);
				$("#page_content").append('<script src="/media/js/tagsHandler.js"></script>');
			},
			error : (err)=>{}
		});
	});
}

function loadProductPage(product_id){

	$(document).ready(()=>{
		$.ajax({
			headers: { "X-CSRFToken": token },
			url :"/organicaa/productpage",
			method : "post",
			data : {},
			success : (res)=>{
				product_id  = parseInt(product_id);
				pageHTML = $(res);
				$(pageHTML).find(".product_name").html(products[product_id]['product']);
				$(pageHTML).find(".product_tips").html(products[product_id]['foruse']);
				$(pageHTML).find(".product_storage").html(products[product_id]['nb']);
				$(pageHTML).find(".product_description").html(products[product_id]['benefitsText']);
				$(pageHTML).find(".product_img").attr('src',products[product_id]['img']);
				$(pageHTML).find(".product_filler").attr('src',products[product_id]['filler']);
				$(pageHTML).find(".add-cart").attr('product_id',product_id);
				if(products[product_id]['price'].length>1){
					$(pageHTML).find(".product_price").attr('price1',products[product_id]['price'][0]);
					$(pageHTML).find(".product_price").attr('price2',products[product_id]['price'][1]);
					$(pageHTML).find(".product_size1").html(products[product_id]['sizes'][0]);
					$(pageHTML).find(".product_size2").html(products[product_id]['sizes'][1]);
					$(pageHTML).find(".product_price").html(products[product_id]['price'][0]+"€");
				}else{
					$(pageHTML).find(".product_price").html(products[product_id]['price'][0]+"€");
					$(pageHTML).find(".product_sizes").hide();
				}
				
				$("#page_content").html(pageHTML);

				//$("#main_nav").trigger('click');
				//loadProductInfo(product_id);
				$("#page_content").append(`<script src="/media/vendor/slick/slick.min.js"></script>
				<script src="/media/js/slick-custom.js"></script>
				<script src="/media/js/jquery.slicknav.js"></script>
				<script src="/media/js/cart.js"></script>
				<script src="/media/js/productDetails.js"></script>
				`);
			},
			error : (err)=>{}
		});
	});
}


function loadProductPageByName(product_name){
	
	product_id=-1;

	for (var i = products.length - 1; i >= 0; i--) {
		if(products[i]['product'].includes(product_name)){
			product_id = products[i]['id'];
		}
	}

	if (product_id == -1){
		return 0
	}
	$(window).scrollTop(0);
	$(document).ready(()=>{
		$.ajax({
			headers: { "X-CSRFToken": token },
			url :"/organicaa/productpage",
			method : "post",
			data : {},
			success : (res)=>{
				product_id  = parseInt(product_id);
				pageHTML = $(res);
				$(pageHTML).find(".product_name").html(products[product_id]['product']);
				$(pageHTML).find(".product_tips").html(products[product_id]['foruse']);
				$(pageHTML).find(".product_storage").html(products[product_id]['nb']);
				$(pageHTML).find(".product_description").html(products[product_id]['benefitsText']);
				$(pageHTML).find(".product_img").attr('src',products[product_id]['img']);
				$(pageHTML).find(".product_filler").attr('src',products[product_id]['filler']);
				$(pageHTML).find(".add-cart").attr('product_id',product_id);
				if(products[product_id]['price'].length>1){
					$(pageHTML).find(".product_price").attr('price1',products[product_id]['price'][0]);
					$(pageHTML).find(".product_price").attr('price2',products[product_id]['price'][1]);
					$(pageHTML).find(".product_size1").html(products[product_id]['sizes'][0]);
					$(pageHTML).find(".product_size2").html(products[product_id]['sizes'][1]);
					$(pageHTML).find(".product_price").html(products[product_id]['price'][0]+"€");
				}else{
					$(pageHTML).find(".product_price").html(products[product_id]['price'][0]+"€");
					$(pageHTML).find(".product_sizes").hide();
				}
				
				$("#page_content").html(pageHTML);

				//$("#main_nav").trigger('click');
				//loadProductInfo(product_id);
				$("#page_content").append(`<script src="/media/vendor/slick/slick.min.js"></script>
				<script src="/media/js/slick-custom.js"></script>
				<script src="/media/js/jquery.slicknav.js"></script>
				<script src="/media/js/cart.js"></script>
				<script src="/media/js/productDetails.js"></script>`);
			},
			error : (err)=>{}
		});
	});
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

function showProducts(productsArray){
		productsHTML = "";
		for (var i = 0; i < productsArray.length; i++) {
		productsHTML = productsHTML + `<div class="col-lg-4 col-md-6 col-sm-6 shop_product" product_id=`+productsArray[i]['id']+`>
                               		<div class="product__item sale">
                                		<div class="product__item__pic set-bg" style='background-image: url("`+productsArray[i]['img']+`");'>
                                		</div>
                                		<div class="product__item__text">
		                                    <h6>`+productsArray[i]['product']+`</h6>
		                                    <a class="add-cart" product_id='`+productsArray[i]['id']+`'>+ Add To Cart</a>
                                		</div>
                            		</div>
                        		</div>`;
	}

	$("#products_row").html(productsHTML);

	$(".shop_product").click(function(e){

		loadProductPage($(this).attr('product_id'));

	});
}

function loadProductInfo(id) {
	id = parseInt(id);
	$(".product_name").html(products[id]['product']);
	$(".product_img").attr('src',products[id]['img']);
	$(".product_filler").attr('src',products[id]['filler']);
	$(".add-cart").attr('product_id',id);
}


function loadSearch(criterion,value){	

	$(document).ready(()=>{
		$.ajax({
			headers: { "X-CSRFToken": token },
			url :"/organicaa/products",
			method : "post",
			data : {},
			success : (res)=>{
				$("#page_content").html(res);
				$("#main_nav").trigger('click');
				loadProducts('search',value,"Search");
			},
			error : (err)=>{}
		});
	});
}

$(document).ready(()=>{

$("#searchBar").keyup(function (event) {

if (event.keyCode == 13) {
		
	loadSearch('search',$(this).val());

}

});

})

//content('products');

//loadShop('category',1,'Hair');

//loadProductPage(0);