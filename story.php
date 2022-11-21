<!DOCTYPE html>
<html lang="zxx">
<head>
    
<?php include_once("components/common.php"); ?>

</head>

<body>
    <div id="chat-boat" class='withlong'>
        <div class="chat-container"></div>
    </div>
    <img id="assistant" src="img/assistant.png">
    <script src="media/js/chatroom.js"></script>
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

<?php include_once("components/header.php"); ?>

<div id="page_content">
    <div class='slidingcover'>
        <div class='row  justify-content-center slidingwrap pt-lg-5 pb-lg-5'>
            <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 margin-top-15'>
        
            </div>
            <div class='col-lg-5 col-md-6 d-sm-none d-md-block col-xs-12'>
                <div class='slidingcontainer'>
                    <div class='slidingbg3'></div>  
                </div>
            </div>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12  align-self-center'>
                <div class='row blackbox'>
                    <div class='slidingspan'>
                        <h3>Supporting local workers through their harvest</h3>
                        <span>Our products are hand crafted by cooperatives of the south-west of Morocco, with techniques and knowledge in this field  proven effective by local women. All our cosmetics are exported directly from cooperatives to our customers all over the world. Each product is carefully blended and filled by hand by one of our expert team. This small scale production means that we have complete control over production ensuring the quality, potency and freshness of our product.</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div class='slidingcover'>
        <div class='row justify-content-center slidingwrap pt-lg-5 pb-lg-5'>
            <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
                <div class='slidingcontainer'>
                    <div class='slidingbg4'></div>  
                </div>
            </div>
            <div class='row col-lg-6 col-md-6 col-sm-6 col-xs-12 margin-top-15'>
                <span class='slidingspan align-self-end'>
                    <h3>Our philosophy</h3>
                    <h6>Beauty itself is not the goal but only accompanies a healthy and happy life. Pursuing a simpler and healthier lifestyle from the inside out is our number one goal. Health, an inner balance of positive energy, shines to the outside, creates more beauty than any amount of care products. We support this philosophy and view the role of cosmetics not as a primary creator but merely as a supplement of beauty.</h6>
                </span>
            </div>
        </div>
        </div>
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

    <!-- Js Plugins -->
    <script type="text/javascript">
        var token = '{{csrf_token}}';
    </script>
    <script src="media/js/jquery-3.3.1.min.js"></script>
    <script src="media/js/bootstrap.min.js"></script>
    <script src="media/js/jquery.nice-select.min.js"></script>
    <script src="media/js/jquery.nicescroll.min.js"></script>
    <script src="media/js/jquery.magnific-popup.min.js"></script>
    <script src="media/js/jquery.countdown.min.js"></script>
    <script src="media/js/jquery.slicknav.js"></script>
    <script src="media/js/mixitup.min.js"></script>
    <script src="media/js/owl.carousel.min.js"></script>
    <script src="media/js/main.js"></script>
    <script src="media/vendor/animsition/js/animsition.min.js"></script>
    <script src="media/js/main1.js"></script>
    
    <!-- Hover Intent Js -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.9.0/jquery.hoverIntent.min.js'></script>
    <!-- Lodash Js -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="media/js/data.js"></script>
    <script src="media/js/cartbuttons.js"></script>
    <script src="media/js/cart.js"></script>
    <script src="media/js/customJS.js"></script>
    <script src="media/js/navigation.js"></script>
    <script type="text/javascript">
        $(".shop_product").click(function(e){

            loadProductPage($(this).attr('product_id'));

        });
    </script>
    <script src="media/js/botInteractions.js"></script>

</body>

</html>
