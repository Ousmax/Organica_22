<?php 

use Pecee\SimpleRouter\SimpleRouter as Router;

$url =  explode('organica/products',Router::getUrl());

$parts = explode('/',$url[1]);

$criterion = $parts[1];
$value = $parts[2];
$critvalue = str_replace("_"," ",$parts[3]);

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    
    <?php include_once("components/common.php"); ?>

    <script>
        <?php echo "loadShop('$criterion','$value','$critvalue')"  ?>
    </script>
    

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
                            <a href="/organica">Shop</a>
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
