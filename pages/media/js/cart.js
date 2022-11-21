function NametoId(product_name){
    product_id = -1;
    for (var i = products.length - 1; i >= 0; i--) {
        if(products[i]['product'].includes(product_name)){
            product_id = products[i]['id'];
        }
    }

    return product_id;
}

function addToCart(id){
    cart_product= `<div class="ajaxcart__product">
                    <div class="ajaxcart__row" data-line="1">

                        <div class="o-layout o-layout--tiny u-flex u-flex--middle">

                            <div class="o-layout__item u-1/1 u-6/10@tab">
                                <div class="o-layout o-layout--tiny u-flex u-flex--middle">
                                    <div class="o-layout__item u-1/3 u-1/4@tab">
                                        <a class="ajaxcart__product-image">
                                            <div class="o-ratio o-ratio--bg-grey">
                                                <img src="`+products[id]['img']+`" class="o-ratio__content" alt="`+products[id]['product']+`">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="o-layout__item u-2/3 u-3/4@tab">
                                        <a href="/products/coconut-bergamot-moisturizing-bath-soak?variant=26032760129"><h3 class="ajaxcart__product-name">`+products[id]['product']+`</h3></a>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="o-layout__item u-2/3 u-2/10@tab">
                                <div class="ajaxcart__qty">
                                    <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus" data-id="26032760129:82c8f9de8764c61db018312113e132df" data-qty="0" data-line="1">
                                        <span aria-hidden="true">−</span>
                                        <span class="u-hidden-visually">Reduce item quantity by one</span>
                                    </button>
                                    <input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-id="26032760129:82c8f9de8764c61db018312113e132df" data-line="1" aria-label="quantity" pattern="[0-9]*">
                                    <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus" data-id="26032760129:82c8f9de8764c61db018312113e132df" data-line="1" data-qty="2">
                                        <span aria-hidden="true">+</span>
                                        <span class="u-hidden-visually">Increase item quantity by one</span>
                                    </button>
                                </div>
                            </div>

                    <div class="o-layout__item u-1/3 u-2/10@tab">
                            <div class="ajaxcart-item__price"><span class='price' price=`+products[id]['price'][0]+`>`+products[id]['price'][0]+`</span><span class="money">€</span></div>
                        
                    </div>

                        </div>

                    </div>
                </div>`;
    $(".ajaxcart__products").append(cart_product);
    totalPrice();
    $('#cart').trigger('click');
}

$( document ).ready(function() {

    $(".add-cart").click(function(e){
    	e.stopPropagation();
    	id = parseInt($(this).attr('product_id'));
    	addToCart(id);
    });

})