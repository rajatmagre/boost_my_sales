<div class="footer-wrapper">

			<!-- Footer Top Container -->
    		<div class="footer-top">            

				<div class="container">
                	<div class="row">
                    	  
                        <div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer_row">
						<h6 class="footer_title">PRODUCT</h6>
						
						<span class="footer_desc">
							We are a multi-disciplinary team working together to create awesome websites, realise brand identities and design for print.
                            Taking on thought-provoking projects that challenge. 							
						</span>
						 <div class="element-bottom-30"></div>
					</div>
					
				</div><!-- Grid -->
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer_row">
						<h6 class="footer_title">SPECIAL FEATURES</h6>
						<span class="footer_desc">
							We are a multi-disciplinary team working together to create awesome websites, realise brand identities and design for print.
                            Taking on thought-provoking projects that challenge. 							
						</span>
						 <div class="element-bottom-30"></div>
					</div>
				</div><!-- Grid -->
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer_row">
						<h6 class="footer_title">ABOUT US</h6>
						<span class="footer_desc">
							We are a multi-disciplinary team working together to create awesome websites, realise brand identities and design for print.
                            Taking on thought-provoking projects that challenge. 							
						</span>
						 <div class="element-bottom-30"></div>
					</div>
				</div><!-- Grid -->
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer_row">
						<h6 class="footer_title">CONTACT US</h6>
						<ul class="address-list clearfix">
							<li><i class="icon-phone"></i>+86 (1) 202 1313 001</li>
							<li><i class="icon-printer"></i>+86 (1) 202 1313 002</li>
							<li><i class="icon-envelope"></i><a href="mailto:support@elyon.com">test@yourdomain.com</a></li>
							<li><i class="icon-directions"></i>401 Gravity Towers, 6/1 Race Course Road,U-Turn, Zanzeerwala Square,

Indore-452001.</li>
						</ul>
					</div>
				</div><!-- Grid -->
						  
                    </div>
                </div>
                
			</div>
			<!-- /Footer Top Container -->



		</div>
		<!-- /Footer Container -->
		
		
    </div>
    <a class="go-top go-top-circle" href="javascript:void(0)"> <i class="fa fa-angle-up"></i> </a>

	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.js"></script> 
    <script src="<?= base_url() ?>assets/js/theme.min.js"></script>
	<script src="<?= base_url() ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/js/revolution.min.js"></script>
	<script src="<?= base_url() ?>assets/js/script.js"></script><!-- Common -->
	<script src="<?= base_url() ?>assets/js/countTo.js"></script>
	<script type="text/javascript"  src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script><!-- Owl Carousal -->
	<script src="<?= base_url() ?>assets/js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.flexslider-min.js"></script> 
	<script src="<?= base_url() ?>assets/js/jquery.royalslider.min.js"></script>  	<!-- Royal Slider -->
    <script src="<?= base_url() ?>assets/js/morphext.js"></script> <!-- TextRotator -->	
    
	<!-- Portfolio -->
    <script src="<?= base_url() ?>assets/js/portfolio_01.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/isotope.pkgd.min.js"></script>
	 <!-- Bfassets Portfolio and Lightbox -->
    <script src="<?= base_url() ?>assets/js/jquery.bootFolio.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript">
    $(document) .ready(function () {
        $("#second").bootFolio({
            bfLayout: "bflayhover",
            bfFullWidth:"box", 
            bfHover: "bfhover2",
            bfAnimation: "scale",
            bfSpace: "space",
            bfAniDuration: 500,
            bfCaptioncolor: "#03acdc",
            bfTextcolor:"#ffffff",
            bfTextalign:"center",
            bfNavalign:"center"
        });
        $("a[rel^='prettyPhoto']").prettyPhoto();
        });
    </script>  
	
	<script type="text/javascript">
   $('.timer').countTo();
   
   //TEXT ROTATORS 
			
			$("#js-rotating").Morphext({
                animation: "rotateIn",
                complete: function () {
                    console.log("This is called after a phrase is animated in! Current phrase index: " + this.index);
                }
            });
			
    </script>
	
	<script type="text/javascript">
	$(document).ready(function() {
	
	$(".our-blog-slide").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	transitionStyle:"goDown",
	navigation:true
	});	

	$(".testimonial-sec").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	transitionStyle:"backSlide",
	navigation:false,
	pagination: true
	});		
	
	$("#show-product-slide").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	transitionStyle:"backSlide",
	navigation:true,
	pagination: false
	});	
	
	// start all the timers
      $('.timer').each(count);

       $("#single-slider").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
  });	
  
  $(document).ready(function() {
		$("#services").owlCarousel({
			items : 3,
			lazyLoad : true,
			navigation : false
		});
		});
		
		// Presentation Carousel
			jQuery('.presentation .flexslider').flexslider({
				animation: "fade",
				controlNav: "thumbnails",
				directionNav: false,
				slideshowSpeed: 7000, 
				animationSpeed: 1000
			});	
	
	});
</script>


<script>
   (function () {
   
   	"use strict";
   	
   	/* ------------------------------------------------------------------------ 
   		   MAIN BANNER [royal slider with check slide and count slides function]
   		------------------------------------------------------------------------ */
   		var sliderJQ = jQuery('.main-banner-slider').royalSlider({
   			arrowsNav: true,
   			loop: true,
   			keyboardNavEnabled: true,
   			controlsInside: false,
   			imageScaleMode: 'fill',
   			arrowsNavAutoHide: false,
   			autoScaleSlider: true, 
   			autoScaleSliderWidth: 1900,     
   			autoScaleSliderHeight: 600,
   			controlNavigation: false,
   			thumbsFitInViewport: false,
   			navigateByClick: false,
   			startSlideId: 0,
   			autoPlay: true,
   			slidesSpacing:0,
   			allowCSS3:false,
   			transitionType:'move',
   			globalCaption: false,
   			deeplinking: {
   			  enabled: true,
   			  change: false
   			},
   			/* size of all images */
   			imgWidth: 1900,
   			imgHeight: 600
   		});
   		var leftArrow = jQuery(".rsArrowLeft");
   		var rightArrow = jQuery(".rsArrowRight");
   		
   		var sliderInstance = sliderJQ.data('royalSlider');
   		 var slideCountEl = $('<div class="rsSlideCount"></div>').appendTo( leftArrow );
   		 var slideCountE2 = $('<div class="rsSlideCount2"></div>').appendTo( rightArrow );
   		 
   		 
   		 function updCount() {
   			slideCountEl.html( (sliderInstance.currSlideId+1) + ' / ' + sliderInstance.numSlides );
   		}
   		sliderInstance.ev.on('rsAfterSlideChange', updCount);
   		updCount();
   		
   		
   		
   		function updCount2() {
   			slideCountE2.html( (sliderInstance.currSlideId+1) + ' / ' + sliderInstance.numSlides );
   		}
   		sliderInstance.ev.on('rsAfterSlideChange', updCount2);
   		updCount2();
   		
   		
   		jQuery(".slide-dark").parent(".rsSlide").addClass("slide-dark-container");
   		
   		if (jQuery(".slide-dark-container").hasClass(".rsActiveSlide")) {
   			jQuery("body").addClass("smallHeader");
   		}
   		var slider = $('.royalSlider').data('royalSlider');
   		
   		slider.ev.on('rsSlideClick', function() {
   			if (jQuery(".slide-dark-container").hasClass(".rsActiveSlide")) {
   				jQuery("body").addClass("smallHeader");
   			}
   		});
   		
   		function checkIfDarkSlide()
   		{
   			if (jQuery('.slide-dark-container').hasClass('rsActiveSlide'))
   			{
   				jQuery(".navbar").addClass("nav-dark");
   				jQuery(".royalSlider").addClass("rs-dark-slide");
   				jQuery(".navbar-brand img" ).attr("src", "images/logo-dark.html");
   			}	
   			else
   				{
   				setTimeout(checkIfDarkSlide, 100);
   				}
   			if (!jQuery('.slide-dark-container').hasClass('rsActiveSlide'))
   			{
   				jQuery(".navbar").removeClass("nav-dark");
   				jQuery(".royalSlider").removeClass("rs-dark-slide");
   				if (!jQuery('body').hasClass('smallHeader')) {
   					jQuery(".navbar-brand img" ).attr("src", "images/logo.html");
   				}
   			}	
   			
   			else
   				{
   				setTimeout(checkIfDarkSlide, 100);
   				}
   				
   		}
   		
   		$(checkIfDarkSlide);
   		
   		/* ------------------------------------------------------------------------ 
   		   FULL SCREEN VIDEO [used in main banner]
   		------------------------------------------------------------------------ */
   		jQuery('.covervid-video').coverVid(1920, 1080);
   		jQuery(".covervid-video").get(0).play();
   		
   
   		
   })(jQuery);
</script>

