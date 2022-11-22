<!DOCTYPE html>
<html lang="zxx">

<head>
    
<?php include_once("components/common.php"); ?>

</head>

<body>
    
    <div id="chat-boat" class='withlong'>
        <div class="chat-container"></div>
    </div>
    <img id="assistant" src="/organica/img/assistant.png">
    <script src="media/js/chatroom.js"></script>
    <script type="text/javascript">
        var chatroom = new window.Chatroom({
          host: "http://34.125.79.167:5005",
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

<?php include_once("components/header.php"); ?>

<div id="page_content">

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">

            <div class="hero__items hero_tres_container">
            <div class="set-bg hero_bg" data-setbg="https://cdn.shopify.com/s/files/1/0648/1955/files/Main_7c5d8314-ef8b-48cd-a0a9-88ab54039f41.jpg?v=1578294928">
            </div>
                <div class="col-xl-4 col-lg-4 col-md-4 hero_text hero_tres hero_container">
                    <div class="hero__text">
                        <h2>It's time to feel good about what you’re putting on and into your skin</h2>
                        <p> A safe skincare collection that contains only natural, sustainably harvested and plant-derived ingredients.</p>
                        <a class="primary-btn" onclick="loadShop('all','','');">Shop now <span class="arrow_right"></span></a>
                    </div>
                </div>
            
            </div>

            <div class='hero__items hero_dos_container'>
            <div class="set-bg hero_bg" data-setbg="img/products/Menskincare1.jpeg">
            </div>
                <div class="container hero_dos hero_container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 hero_text">
                            <div class="hero__text">
                                <h2>Less is truly more</h2>
                                <p>Our skin does not need specialised remedies for each part of the body. We prefer to use less, but instead only natural remedies which are applied regularly. </p>
                                <a class="primary-btn" onclick="loadShop('all','','');">Shop now <span class="arrow_right"></span></a>

                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="hero__items hero_quatro_container">
            <div class="set-bg hero_bg" data-setbg="https://www.arganisch.nl/wp-content/uploads/2020/07/shutterstock_1055004053-scaled.jpg">
            </div>
                <div class="container hero_quatro hero_container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 hero_text">
                            <div class="hero__text">
                                <h2>This year is the time to get that perfect groomed beard naturally</h2>
                                <p>Complete your routine with natural soaps, oils, shampoos, and conditioners.</p>
                                <a class="primary-btn" onclick="loadShop('all','','');">Shop now <span class="arrow_right"></span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<div class='slidingcover'>
<div class='row  justify-content-center slidingwrap pt-lg-5 pb-lg-5'>
    <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 margin-top-15'>
        <div class='row'><h1><div class='slidingspan'>
            <h1>gentle</h1>
            <h1>formulas</h1>
            <h1>for the</h1>
            <h1>skin & earth</h1></div></h1>
        </div>
    </div>
    <div class='col-lg-5 col-md-6 d-sm-none d-md-block col-xs-12'>
        <div class='slidingcontainer'>
            <div class='slidingbg'></div>  
        </div>
    </div>
    <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12  align-self-center'>
        <div class='row blackbox'>
            <div class='slidingspan'>
                <h3>Gender-inclusive products for everyone</h3>
                <span>Nature's wisdom offers hardworking, multipurpose body care products that nourish your skin and hair and simplify your routine. Using nature's most restorative and nourishing ingredients, we've got something for everyone. From the acne-prone skincare sets to the pregnancy-safe products, with only organic and wildcrafted ingredients.</span>
            </div>
        </div>
    </div>
</div>
</div>

<div class='slidingcover'>
<div class='row justify-content-center slidingwrap pt-lg-5 pb-lg-5'>
    <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
        <div class='slidingcontainer'>
            <div class='slidingbg1'></div>  
        </div>
    </div>
    <div class='row col-lg-6 col-md-6 col-sm-6 col-xs-12 margin-top-15'>
        <div class='row'><h1><div class='slidingspan'>
            <h1>ingredients harvested sustainably and regionally sourced</h1></div></h1>
        </div>
        <span class='slidingspan align-self-end'>
            <h3>Our philosophy</h3>
            <h6>Beauty itself is not the goal but only accompanies a healthy and happy life. Pursuing a simpler and healthier lifestyle from the inside out is our number one goal. Health, an inner balance of positive energy, shines to the outside, creates more beauty than any amount of care products. We support this philosophy and view the role of cosmetics not as a primary creator but merely as a supplement of beauty.</h6>
        </span>
    </div>
</div>
</div>

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container explore">
            <h1><span>EXPLORE PRODUCTS</span></h1>
            <div class="gf_separator" data-align="left" data-exc=""><hr class=""></div>
            <div class="row">
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-md-6 col-sm-6 pointer-hover">
                    <a href="/organica/products/category/0/Skin">
                        <div class="banner__item">
                            <div class="banner__item__pic">
                                <img src="img/products/Argile1.jpeg" alt="">
                            </div>
                            <div class="banner__item__text">
                                <span class="gf_btn gf_button" target="" data-exc="" style="padding-top: 0px; padding-bottom: 0px;"><span>SHOP SKINCARE</span></span>
                            </div>
                        </div>
                    </a>
                </div>
                
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-md-6 col-sm-6 pointer-hover">
                    <a href="/organica/products/category/1/Hair">
                        <div class="banner__item">
                            <div class="banner__item__pic">
                                <img src="img/hair.webp" alt="">
                            </div>
                            <div class="banner__item__text">
                                <span class="gf_btn gf_button" target="" data-exc="" style="padding-top: 0px; padding-bottom: 0px;"><span>SHOP HAIRCARE</span></span>
                            </div>
                        </div>
                    </a>
                </div>
                
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-md-6 col-sm- pointer-hover">
                    <a href="/organica/products/category/2/Body">
                        <div class="banner__item">
                            <div class="banner__item__pic">
                                <img src="img/products/iStock-183410603.jpg" alt="">
                            </div>
                            <div class="banner__item__text">
                                <span class="gf_btn gf_button" target="" data-exc="" style="padding-top: 0px; padding-bottom: 0px;"><span>SHOP BODYCARE</span></span>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>

<div class='col-lg-12 col-md-12 d-sm-none d-md-block col-xs-12 passage'>
        <div class='slidingcontainer1'>
            <div class='slidingbg2'></div>  
        </div>
</div>

   
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container featureds">

            <h1><span>FEATURED PRODUCTS</span></h1>
            <div class="row product__filter">
                <div class="col-lg-4 col-md-6 col-sm-6 col-md-6 col-sm-6 mix shop_product" product_id="1">
                    
                    <div class="product__item">
                        <a href="/organica/product/1">
                            <div class="product__item__pic set-bg" data-setbg="img/products/n.jpg">
                            
                            </div>
                        </a>
                        <div class="product__item__text">
                            <h6>SESAME OIL</h6>
                            <a class="add-cart" product_id=1>+ ADD TO BAG</a>

                            <h5>6€</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-md-6 col-sm-6 mix shop_product" product_id="10">
                    
                    <div class="product__item">
                        <a href="/organica/product/10">
                            <div class="product__item__pic set-bg" data-setbg="img/products/p.jpg">

                            </div>
                        </a>
                        <div class="product__item__text">
                            <h6>MOROCCAN BLACK SOAP : ORANGE FLOWER EXTRACT</h6>
                            <a class="add-cart" product_id=10>+ ADD TO BAG</a>

                            <h5>6€</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-md-6 col-sm-6 mix shop_product" product_id="18">
                      
                    <div class="product__item sale">
                        <a href="/organica/product/18">
                            <div class="product__item__pic set-bg" data-setbg="img/products/r.jpg">

                            </div>
                        </a>
                        <div class="product__item__text">
                            <h6>HAIR CARE SERUM</h6>
                            <a class="add-cart" product_id=18>+ ADD TO BAG</a>

                            <h5>25€</h5>
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
                                   
                                <img class="footer-nav__image-img js lazyautosizes lazyloaded" src="img/footer-logo.png" data-widths="[180, 360, 540, 720]" data-sizes="auto" alt="" style="max-width: 250px">                            
                                
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
    <!-- Search End -->

</body>

</html>
