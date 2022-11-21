initialProducts = [];

currentCategory = 'all';

productsFile = `
<section class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__text">
					<h4>Shop</h4>
					<div class="breadcrumb__links">
						<a href="./index.html">Shop</a>
						<a class='criterion'>Concerns</a>
						<span class='critvalue'>Shop</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="shop spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="shop__sidebar">

					<div class="shop__sidebar__accordion">
						<div class="accordion" id="accordionExample">

							<div class="card">
								<div class="card-heading">
									<a>Tags</a>
								</div>
								<div id="collapseSix" class="collapse show" data-parent="#accordionExample">
									<div class="card-body">
										<div class="shop__sidebar__tags" id="tagsList">
											<!--div>
											<a>Product</a>
											<a>Bags</a>
											<a>Shoes</a>
											<a>Fashio</a>
											<a>Clothing</a>
											<a>Hats</a>
											<a>Accessories</a>
											</div-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="row" id="products_row">
				   
			</div>
		</div>
	</div>
</section>



<script type="text/javascript" src="media/js/cart.js"></script>
`

productPageFile = `<link rel="stylesheet" type="text/css" href="media/fonts/iconic/css/material-design-iconic-font.min.css">

<!-- breadcrumb -->

<section class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__text">
					<h4>Shop</h4>
					<div class="breadcrumb__links">
						<a href="">Home</a>
						<a onclick="loadShop('all','','');">Shop</a>
						<span class="product_name">Mahalo treatment balm</span>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-7 p-b-30">
				<div class='col-md-12'>
				<img class='product_img' src="img/product-detail/product-detail-01.jpg" alt="IMG-PRODUCT">
				</div>
		<div class="col-md-10 bor10 p-t-20 p-b-40 m-t-40 mx-auto">
			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item p-b-10">
						<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Tips</a>
					</li>
					<li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#information" role="tab">Storage</a>
					</li>
					<!--li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
					</li-->
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-43">
					<!-- - -->
					<div class="tab-pane fade show active" id="description" role="tabpanel">
						<div class="how-pos2 p-lr-15-md">
							<p class="stext-102 cl6 product_tips">
								Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
							</p>
						</div>
					</div>

					<div class="tab-pane fade" id="information" role="tabpanel">
						<div class="how-pos2 p-lr-15-md">
							<p class="stext-102 cl6 product_storage">
								Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
							</p>
						</div>
					</div>


				</div>
			</div>
		</div>

			</div>
				
			<div class="col-md-6 col-lg-5 p-b-30">
				<div class="p-r-50 p-t-5 p-lr-0-lg">
					<h4 class="mtext-105 cl2 js-name-detail p-b-14 product_name">
						Mahalo treatment balm
					</h4>

					<span class="mtext-106 cl2 product_price">
						$58.79
					</span>

					<p class="stext-102 cl3 p-t-23 product_description">
						Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
					</p>
					
					<!--  -->
						<div class="">

							<div class='labelsDiv'>

								<img src="img/labels.png">

							</div>

							<div class="product-options-wrapper">
								<!-- rivets: each-option --><div class="product-option" rv-data-option-index="option.index" rv-data-option-name="option.name" data-option-index="0" data-option-name="Size">

									<div class="product-option-values-wrapper clearfix product_sizes">
										<!-- rivets: each-value --><div class="product-option-value selected product_size1" rv-data-option-value="value" rv-text="value" data-option-value="20mL">20mL</div><div class="product-option-value product_size2" rv-data-option-value="value" rv-text="value" data-option-value="5mL">5mL</div>
									</div>

								</div>
							</div>

							<div class='flex-w col-12 m-b-10'>
							<div class="mx-auto">
								<div class="wrap-num-product flex-w m-r-20 m-tb-10">
									<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
										<i class="fs-16 zmdi zmdi-minus"></i>
									</div>

									<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

									<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
										<i class="fs-16 zmdi zmdi-plus"></i>
									</div>
								</div>

								<!--button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
									Add to cart
								</button-->
							</div>
							</div>

							<div class='add-cart'>
								ADD TO CART +
							</div>
						</div>	



				</div>

				<div class="item-slick3 slickitem1 m-t-40">
					<div class="wrap-pic-w pos-relative">
						<img class='product_filler' src="img/product-detail/product-detail-01.jpg" alt="IMG-PRODUCT">
					</div>
				</div>

			</div>
		</div>


	</div>

</section>

<script type="text/javascript">

reloadJs("media/js/main2.js");
reloadJs("media/vendor/jquery/jquery-3.2.1.min.js");
reloadJs("media/vendor/jqueryui/jquery-ui.min.js");
reloadJs("media/vendor/animsition/js/animsition.min.js");
reloadJs("media/vendor/bootstrap/js/popper.js");
reloadJs("media/vendor/bootstrap/js/bootstrap.min.js");
reloadJs("media/vendor/select2/select2.min.js");
reloadJs("media/js/jquery.nice-select.min.js");
reloadJs("media/js/productDetails.js");
</script>

`

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
		$("#page_content").html(productsFile);
		$("#main_nav").trigger('click');
		loadProducts(criterion,value,critvalue);
		$("#page_content").append('<script src="media/js/tagsHandler.js"></script>');
	});
}

function loadProductPage(product_id){

	$(document).ready(()=>{
		product_id  = parseInt(product_id);
		pageHTML = $(productPageFile);
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
		$("#page_content").append(`<script src="media/vendor/slick/slick.min.js"></script>
		<script src="media/js/slick-custom.js"></script>
		<script src="media/js/jquery.slicknav.js"></script>
		<script src="media/js/cart.js"></script>
		<script src="media/js/productDetails.js"></script>
		`);
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
	loadProductPage(product_id);
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
		$("#page_content").html(productsFile);
		$("#main_nav").trigger('click');
		loadProducts('search',value,"Search");
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