

<article>
   <!-- Page Title -->
   <section id="page-title">
      <div class="container clearfix">
         <h1>Register</h1>
         <ol class="breadcrumb">
            <li>
               <a href="<?= base_url() ?>site">Home</a>
            </li>
            <li class="active">
               Register
            </li>
         </ol>
         <!-- end breadcrumbs -->
      </div>
      <!-- end container -->
   </section>
   <!-- end page title -->
   <section class="section register-sec">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-sm-offset-3">
               <div class="title1">
                  <h2>Get In Touch</h2>
                  <hr>
               </div>
               <div class="element-top-40"></div>
               <form novalidate="novalidate" class="hm_contact_form" id="contact-us-form" name="contact-us-form" action="http://twin-smart.net/adon-creatives/elemet/php/phpmailer/sendemail.php" method="post">
                  <div class="form_row clearfix">
                     <label for="contact-us-name">
                     <span class="hm_field_name">Name</span>
                     <span class="hm_requires_star">*</span>
                     </label>
                     <input aria-required="true" class="form_fill_fields hm_input_text" name="contact-us-name" id="contact-us-name" placeholder="Full Name" required="" type="text">
                  </div>
                  <div class="form_row clearfix">
                     <label for="contact-us-mail">
                     <span class="hm_field_name">Email</span>
                     <span class="hm_requires_star">*</span>
                     </label>
                     <input aria-required="true" class="form_fill_fields hm_input_text" name="contact-us-mail" id="contact-us-mail" placeholder="mail@sitename.com" required="" type="email">
                  </div>
                  <div class="form_row clearfix">
                     <label for="contact-us-phone">
                     <span class="hm_field_name">Phone</span>
                     </label>
                     <input class="form_fill_fields hm_input_text" name="contact-us-phone" id="contact-us-phone" type="text">
                  </div>
                  <div class="form_row clearfix">
                     <label for="contact-us-subject">
                     <span class="hm_field_name">Subject</span>
                     </label>
                     <input class="form_fill_fields hm_input_text" name="contact-us-subject" id="contact-us-subject" type="text">
                  </div>
                  <div class="form_row clearfix">
                     <label for="contact-us-option">
                     <span class="hm_field_name">Services</span>
                     </label>
                     <label class="orderby_label">
                        <select class="form_fill_fields shipping_country" id="contact-us-option" name="contact-us-option">
                           <option value="">Select One ---</option>
                           <option value="Web Design">Web Design</option>
                           <option value="Graphic Design">Graphic Design</option>
                           <option value="Wordpress">Wordpress</option>
                           <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                        </select>
                     </label>
                  </div>
                  <div class="form_row clearfix">
                     <label for="contact-us-message">
                     <span class="hm_field_name">Message</span>
                     <span class="hm_requires_star">*</span>
                     </label>
                     <textarea aria-required="true" class="form_fill_fields hm_textarea" name="contact-us-message" id="contact-us-message" required=""></textarea>
                  </div>
                  <div class="form_row clearfix">
                     <button type="submit" class="send_button full_button" name="contact-us-submit" id="contact-us-submit" value="submit">
                     <i class="ico-check3"></i>
                     <span>Send Your Message</span>
                     </button>
                  </div>
                  <div class="form_row clearfix">
                     <div id="form-messages"></div>
                  </div>
                  <div class="form_loader"></div>
               </form>
            </div>
            <!-- Grid -->
         </div>
      </div>
   </section>
</article>
</div>

