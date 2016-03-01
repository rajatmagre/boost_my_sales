

<div id="content" role="main">
<article>
   <!-- Page Title -->
   <section id="page-title">
      <div class="container clearfix reg_page_title">
         
         <!-- end breadcrumbs -->
      </div>
      <!-- end container -->
   </section>
   <!-- end page title -->
   <section class="section register-sec">
      <div class="container">
         <div class="row">
          <?php
              if ($this->session->flashdata('success')) {
                  echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
              }
              if ($this->session->flashdata('info')) {
                  echo '<div class="alert alert-info">' . $this->session->flashdata('info') . '</div>';
              }
            ?>
            <div class="element-bottom-70"></div>
            <div class="col-sm-7 col-xs-12 wrap-contact-form contact-form-2">
               <div class="main_title centered upper user_reg_left">
                    <h2><span class="line"><i class="icon-signup"></i></span>Get In Touch</h2>
                    <div class="main_desc centered">
                        <p>We are ready to help! Please fill out the form below and we will contact you as soon as possible. For immediate assistance you can get us on live chat.</p>
                     </div>
                </div>
                
                 <div id="response"></div>
                 <form method="post" action="" name="contactus-form" id="contact-form">
                     <div class="row form-group">
                         <div class="col-sm-6">
                             <div><input required type="text" class="form-control" id="firstname" placeholder="Your First Name" name="firstname" /></div>
                         </div>
                         <div class="col-md-6">
                             <div><input required type="text" class="form-control" id="lastname" placeholder="Your Last Name" name="lastname" /></div>
                         </div>
                     </div>
                     <div class="row form-group">
                         <div class="col-sm-6">
                             <div><input type="text" class="form-control" id="company_name" placeholder="Your Company Name" name="company_name" /></div>
                         </div>
                         <div class="col-sm-6">
                            <div><input type="tel" class="form-control" id="contact_no" placeholder="Your Contact Number" name="contact_no" /></div>

                         </div>
                     </div>
                     <div class="row form-group">
                         <div class="col-sm-6">
                             <div><input required type="email" class="form-control" id="email" placeholder="Your E-mail" name="email" /></div>
                         </div>
                         <div class="col-sm-6">
                           <div><input type="text" class="form-control" id="skype" placeholder="Your Skype Id" name="skype_mail" /></div>
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col-sm-12">
                             <div><input type="text" class="form-control" id="website_url" placeholder="Your Website URL" name="website_url" /></div>
                        </div>
                     </div>
                     
                     
                     <div class="row form-group">
                        <div class="col-md-12">
                           <div><textarea class="form-control" id="requirement" placeholder="Your Requirements" name="requirement"></textarea></div>
                        </div>
                     </div>
                     <div class="row form-group">
                         <div class="col-md-12">
                             <div><input type="submit" id="submit-message" value="Submit"></div>
                         </div>
                     </div>
                 </form>
             </div>
            <div class="col-xs-12 col-sm-5">
               <img style="width:70%;float:right;" class="img-responsive" src="<?= base_url() ?>assets/images/woman.jpg" alt="" />
            </div>
         </div>
            <div class="element-bottom-70"></div>
      </div>
   </section>
     <!-- Our Services -->
    <section class="section section-wrap bg-light" id="services" style="background-color: #ECF0F1;">
    <div class="element-bottom-60"></div>
      <div class="container">
        
        <div class="main-border blue"></div>

        <div class="row mt50">
          <div class="col-sm-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s">
            <div class="service-item-box first">
              <a href="#">
                <i class="fa fa-envelope"></i>
              </a>
              <h3>E-mail</h3>
              <a href="#">test@jssboost.com</a>        
              <a href="#">test@jssboost.com</a>        
            </div>            
          </div> <!-- end service item -->

          <div class="col-sm-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
            <div class="service-item-box second">
              <a href="#">
                <i class="fa fa-skype"></i>
              </a>
              <h3>Skype</h3>
              <a href="#">@testtest1</a>        
            </div>            
          </div> <!-- end service item -->

          <div class="col-sm-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="service-item-box third">
              <a href="#">
                <i class="fa fa-mobile"></i>
              </a>
              <h3>Call Us</h3>
              <a href="#">90000000099</a>        
            </div>            
          </div> <!-- end service item -->

          <div class="col-sm-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
            <div class="service-item-box fourth">
              <a href="#">
                <i class="fa fa-comment"></i>
              </a>
              <h3>Hangout</h3>
              <a href="#">test@jss.in</a>        
            </div>            
          </div> <!-- end service item -->
          
        </div> <!-- end row -->
      </div> <!-- end container -->
      <div class="element-bottom-70"></div>
    </section> <!-- end services -->
</article>
</div>

