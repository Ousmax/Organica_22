<?php 

use Pecee\SimpleRouter\SimpleRouter as Router;

$url =  explode('organica/product-page',Router::getUrl());

$parts = explode('/',$url[1]);

$product_id = $parts[1];

include_once('data/products.php');

$product = $products[$product_id];

?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Organica store">
    <meta name="keywords" content="Organica, Beauty">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organica</title>
    <link rel="icon" href="/organica/img/minilogo.png" type="image/icon type">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=IBM+Plex+Serif:ital,wght@0,200;1,200&family=Karla:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=IBM+Plex+Serif:ital,wght@0,200;1,200&family=Karla:wght@500&display=swap" rel="stylesheet"> 
    <!-- Css Styles -->
    <link rel="stylesheet" type="text/css" href="/organica/media/css/main.css">
    <link rel="stylesheet" type="text/css" href="/organica/media/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/organica/media/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/organica/media/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/organica/media/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/organica/media/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/organica/media/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/organica/media/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/organica/media/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/organica/media/css/style.css" type="text/css">
    <link rel="stylesheet" href="/organica/media/css/main.scss.css" type="text/css">
    <link rel="stylesheet" href="/organica/media/css/chatroom.css">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
    <link data-instant-track="" class="gf_fonts" data-fonts="Alegreya" href="//fonts.googleapis.com/css?family=Alegreya" rel="stylesheet" type="text/css"> 
    
    <link rel="stylesheet" href="/organica/media/css/nice-select.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="/organica/media/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="/organica/media/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/organica/media/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/organica/media/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="/organica/media/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/organica/media/vendor/slick/slick.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/organica/media/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->

    <script src="/organica/media/js/jquery-3.3.1.min.js"></script>
    <script src="/organica/media/js/bootstrap.min.js"></script>
    <script src="/organica/media/js/jquery.nice-select.min.js"></script>
    <script src="/organica/media/js/jquery.nicescroll.min.js"></script>
    <script src="/organica/media/js/jquery.magnific-popup.min.js"></script>
    <script src="/organica/media/js/jquery.countdown.min.js"></script>
    <script src="/organica/media/js/jquery.slicknav.js"></script>
    <script src="/organica/media/js/mixitup.min.js"></script>
    <script src="/organica/media/js/owl.carousel.min.js"></script>
    <script type="module" src="/organica/media/js/main.js"></script>
    <script src="/organica/media/vendor/animsition/js/animsition.min.js"></script>
    <script type="module" src="/organica/media/js/main1.js"></script>
    
    <!-- Hover Intent Js -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.9.0/jquery.hoverIntent.min.js'></script>
    <!-- Lodash Js -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/organica/media/js/data.js"></script>
    <script src="/organica/media/js/cart.js"></script>
    <script src="/organica/media/js/cartbuttons.js"></script>
    <script src="/organica/media/js/customJS.js"></script>
    <script type="text/javascript">
        $(".shop_product").click(function(e){

            loadProductPage($(this).attr('product_id'));

        });
    </script>
    <script src="/organica/media/js/botInteractions.js"></script>   

    <script src="/organica/media/js/data.js"></script>
    <script src="/organica/media/js/category/navigation.js"></script>
    

</head>

<body>
    <div>
        <div id="chat-boat" class='withlong'>
            <div class="chat-container"></div>
        </div>
        <img id="assistant" src="/organica/img/assistant.png">
        <script src="/organica/media/js/chatroom.js"></script>
        <script type="text/javascript">
            var chatroom = new window.Chatroom({
            host: "http://localhost:5005",
            title: "Organica's AI assistant",
            container: document.querySelector(".chat-container"),
            welcomeMessage: "Hello there !",
            speechRecognition: "en-US"
            });
            chatroom.openChat();
        </script>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
    </div>



<div class='cartVeil'></div>

<div class='mfp-container' >

<div class='cartContainer'>

<div class="ajaxcart-draw js-cart-draw">
    <button class='closeCart'>X</button>
        <div class="ajaxcart-draw__wrapper js-cart-draw-inner"> 
            <div class="ajaxcart-draw__scroll">
                <div class="ajaxcart__head">
                    <div class="ajaxcart__label">
                        <h3 class="ajaxcart__label-title">Shopping Cart</h3>
                    </div>
                </div>  
                <div id="CartContainer">

    <form action="https://ulghec.eu.qualtrics.com/jfe/form/SV_a4du0wKlaXzDCMS" method="post" novalidate="" class="cart ajaxcart__form">
        <div class="ajaxcart__inner">
            <div class="ajaxcart__products">


            </div>


        </div>
      
        <div class="ajaxcart__footer">
            <div class="o-layout o-layout--tiny o-layout--reverse"> 
                <div class="o-layout__item u-1/1 u-1/3@tab">
                    <p class="ajaxcart__footer-total">Subtotal : <span id="total_price">0</span><span class="money">€</span></p>
                </div>
                <div class="o-layout__item u-1/1 u-2/3@tab">
                    <p class="ajaxcart__footer-message">Shipping &amp; taxes calculated at checkout</p>
                </div>
            </div>
        </div>

        <div class="ajaxcart__button">
            
            <div class="o-layout o-layout--tiny o-layout--reverse"> 
                <div class="o-layout__item u-1/1 u-1/2@tab">
            
                    <button type="submit" class="c-btn c-btn--full c-btn--primary c-btn--arrow ajaxcart__checkout" name="checkout">TAKE ME TO QUESTIONNAIRE</button>  
            
                </div>
                <div class="o-layout__item u-1/1 u-1/2@tab">
                    <a class="c-btn c-btn--full c-btn--light js-close-mfp ajaxcart__continue continueCart">Continue shopping</a>
                </div>
            </div>
            
        </div>
    </form>

</div>
                <div id="EmptyCart" style="display: none;">
                    <div class="ajaxcart-empty">
                        <h5 class="ajaxcart-empty__title">Your cart is currently empty.</h5>
                        <span class="emoji ajaxcart-empty__emoji">
                            <i class="icon icon--sad"></i>
                        </span>
                        <a href="/collections/all" class="c-btn c-btn--primary c-btn--full">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>


<?php include_once("components/header.php"); ?>

<div id="page_content">
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="">Home</a>
                            <a onclick="loadShop('all','','');">Shop</a>
                            <span class="product_name"><?php echo $product["product"];?></span>
                            
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
                    <img class='product_img' src='/organica/<?php echo $product["img"];?>' alt="IMG-PRODUCT">
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
                                <?php echo $product["tips"];?>
                                </p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="information" role="tabpanel">
                            <div class="how-pos2 p-lr-15-md">
                                <p class="stext-102 cl6 product_storage">
                                    <?php echo $product["nb"];?>
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
                            <?php echo $product["product"];?>
                        </h4>

                        <span class="mtext-106 cl2 product_price">
                            <?php echo $product["price"][0]."$";?>
                        </span>

                        <p class="stext-102 cl3 p-t-23 product_description">
                            <?php echo $product["benefitsText"];?>
                        </p>
                        
                        <!--  -->
                            <div class="">

                                <div class='labelsDiv'>

                                    <img src="/organica/img/labels.png">

                                </div>
                                <?php if(count($product["sizes"])>1){ ?>
                                <div class="product-options-wrapper">
                                    <!-- rivets: each-option --><div class="product-option" rv-data-option-index="option.index" rv-data-option-name="option.name" data-option-index="0" data-option-name="Size">

                                        <div class="product-option-values-wrapper clearfix product_sizes">
                                            <!-- rivets: each-value --><div class="product-option-value selected product_size1" rv-data-option-value="value" rv-text="value" data-option-value='<?php echo $product["sizes"][0] ?>'><?php echo $product["sizes"][0] ?></div><div class="product-option-value product_size2" rv-data-option-value="value" rv-text="value" data-option-value='<?php echo $product["sizes"][1] ?>'><?php echo $product["sizes"][1] ?></div>
                                        </div>

                                    </div>
                                </div>
                                <?php } ?>

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
                            <img class='product_filler' src='/organica/<?php echo $product["filler"] ?>' alt="IMG-PRODUCT">
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </section>
</div>


    <footer role="contentinfo" id="footer" class="footer footer--light">
    <div class="container">
        <div class="footer__content">
            <div class="o-layout">
                

                
                    
                    
                    
                    
                    
                        <div class="o-layout__item u-1/1 u-1/2@tab u-1/4@desk">
                            <div class="footer-nav footer-nav--image">
                                   
                                <img class="footer-nav__image-img js lazyautosizes lazyloaded" src="/organica/img/footer-logo.png" data-widths="[180, 360, 540, 720]" data-sizes="auto" alt="" style="max-width: 250px">                            
                                
                            </div>
                        </div>                    
                    
                        <div class="o-layout__item u-1/1 u-1/2@tab u-1/4@desk">
                            <div class="footer-nav">
                                
                                    <h4 class="footer-nav__title h5">Contact</h4>
                                
                                
                                    <p class="footer-nav__text"><a href="mailto:hello@organica.com" class="footer-nav__text-link">hello@organica.com</a></p>
                                
                                
                                
                                
                                    <div class="footer-nav__social-wrapper">
                                        <ul class="footer-nav__social-items o-list-bare">
      
                                        </ul>
                                    </div>
                                

                            </div>
                        </div>
                    
                    
                    
                    
                    
                
                    
                    
                    
                        <div class="o-layout__item u-1/1 u-1/2@tab u-1/4@desk">
                            <div class="footer-nav">
                                
                                    <h4 class="footer-nav__title h5">Location</h4>
                                
                                
                                    <div class="footer-nav__text rte">
                                        <p></p><p>The Organica studio is located in<br>  Marrakech, Morocco.</p>
                                    </div>
                                
                            </div>
                        </div>
                    
                    
                    
                    
                
                    
                        
                            <div class="o-layout__item u-1/1 u-1/2@tab u-1/4@desk">
                                <div class="footer-nav">
                                    <h4 class="footer-nav__title h5">Resources</h4>
                                    <ul class="footer-nav__items o-list-bare">
                                        
                                            <li class="footer-nav__item"><a href="/pages/policies" class="footer-nav__link">Policies &amp; Help</a></li>
                                        
                                            <li class="footer-nav__item"><a href="/pages/wholesale-inquiries-waitlist" class="footer-nav__link">Wholesale Inquiries</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        
                    
                    
                    
                    
                    
                    
                
            </div>

            <div class="footer-copyright">
                <p class="footer-copyright__text">
                    <span class="footer-copyright__span footer-copyright__span--shop">© 2021, Organica</span>
                    
                </p>
            </div>

        </div>
    </div>

    
        <div class="footer__bottom">
            <div class="container">
                

                
                    <div class="footer__icons footer__bottom-item">
                        
<ul class="footer__icons-items o-list-bare">
                                
                                    
                                        <li class="footer__icons-item">
                                            <i class="icon icon--american_express" aria-hidden="true"></i>
                                        </li>
                                    
                                
                                    
                                        <li class="footer__icons-item">
                                            <i class="icon icon--diners_club" aria-hidden="true"></i>
                                        </li>
                                    
                                
                                    
                                        <li class="footer__icons-item">
                                            <i class="icon icon--discover" aria-hidden="true"></i>
                                        </li>
                                    
                                
                                    
                                        <li class="footer__icons-item">
                                            <i class="icon icon--jcb" aria-hidden="true"></i>
                                        </li>
                                    
                                
                                    
                                        <li class="footer__icons-item">
                                            <i class="icon icon--master" aria-hidden="true"></i>
                                        </li>
                                    
                                
                                    
                                        <li class="footer__icons-item">
                                            <i class="icon icon--paypal" aria-hidden="true"></i>
                                        </li>
                                    
                                
                                    
                                
                                    
                                        <li class="footer__icons-item">
                                            <i class="icon icon--visa" aria-hidden="true"></i>
                                        </li>
                                    
                                
                            </ul>                  
                        
                    </div>
                
            </div>
        </div>
    
</footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>

</body>

</html>
