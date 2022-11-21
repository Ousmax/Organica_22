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
	<link rel="stylesheet" type="text/css" href="media/css/faq.css">

	<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
		<ul class="cd-faq__categories">
			<li><a class="cd-faq__category cd-faq__category-selected truncate" href="#basics">FAQs</a></li>
			<!--div>
			<li><a class="cd-faq__category truncate" href="#mobile">Mobile</a></li>
			<li><a class="cd-faq__category truncate" href="#account">Account</a></li>
			<li><a class="cd-faq__category truncate" href="#payments">Payments</a></li>
			<li><a class="cd-faq__category truncate" href="#privacy">Privacy</a></li>
			<li><a class="cd-faq__category truncate" href="#delivery">Delivery</a></li>
			</div-->
		</ul> <!-- cd-faq__categories -->
	
		<div class="cd-faq__items">
			<u-l id="basics" class="cd-faq__group">
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Are there fragrances and colors added to the products?</span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>Our products are free from chemical preservatives (allergy triggers) and utilise only those made from herbs and plants. Our lovely scents are the result of only natural cold pressed essential oils and fragrances . No animal testing is tolerated in the manufacturing of our products. We follow strict manufacturing rules without any chemical processing.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Is your plastic packaging safe?</span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>Yes. All of our plastics are BPA free.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Are your products vegan-friendly?</span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>Yes. All of our products are vegan-friendly.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Are your products gluten-free?</span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>All of our products are gluten-free.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Can any of your products cause me allergies ?</span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>We understand that some people have allergies or sensitivities to certain ingredients such as nuts. In this case, when used topically, nut oils may irritate the skin causing rashes or acne to form. This may be a more common reaction with those who have tree nut allergies. Even though most of our oils come from a stone fruit, it may aggravate those with such allergies. To avoid this, we recommend that you proceed according to your own comfort level,  test the oils on a small, easily hidden patch of skin to make sure that it won’t irritate your skin or speak with your doctor.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How much does shipping cost ?</span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>Shipping cost varies all around the world feel free to contact us to discuss.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>What if my product is damaged?</span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>Please notify your delivery driver upon receipt, ensuring they record it then contact us within 48 hours of delivery.<br>
	Please note: If the damages are not reported within 48 hours of delivery, you will be liable for the replacement costs.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>I have received the incorrect products</span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>If you have received the incorrect product, we will have the right product sent to you promptly.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>What is the percentage of organic ingredients in your Skin Care products? </span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>We commit to only deliver the most possibly natural, high quality products.All of our products are void of harmful, undesirable or aggressive substances. They do not contain any parabens, paraffin, phthalates or toxic solvents. They originate from aromatherapy and phytotherapy, inspired by traditional Moroccan beauty techniques and recipes, reworked with advanced modern scientific knowledge. The only preservatives we use are plant-based to prevent in some cases the oils from going rancid.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>What products are safe for pregnant clients? </span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>We do know that when used with the proper precautions, eucalyptus essential  is considered relatively safe during pregnancy. But again, be sure to talk with your physician or midwife to discuss any potential side effects and best practices before using a eucalyptus based product.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Where does Organica source its ingredients from?</span></a>
					<div class="cd-faq__content">
			  <div class="text-component">
				<p>We source our products from the lands of southwestern Morocco and combine them with traditional moroccan craftsmanship to bring your the best quality there is in organic cosmetics.</p>
			  </div>
					</div> <!-- cd-faq__content -->
				</li>
	
			</ul> <!-- cd-faq__group -->
		</div> <!-- cd-faq__items -->
	
		<a href="#0" class="cd-faq__close-panel text-replace">Close</a>
	  
	  <div class="cd-faq__overlay" aria-hidden="true"></div>
	</section>
	
	<script>document.getElementsByTagName("html")[0].className += " js";</script>
	<script src="media/js/faqutil.js"></script> 
	<script src="media/js/faqmain.js"></script> 
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
