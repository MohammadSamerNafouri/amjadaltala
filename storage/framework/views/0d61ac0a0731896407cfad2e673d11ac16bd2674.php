<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('section.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
   <!--header section start -->
   <div class="header_section">
      <div class="container-fluid">
         <?php echo $__env->make('section.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <!--banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                          
                     <h1 class="banner_taital"><br>Health And Wellness Center</h1>
                     <div class="read_bt"><a href="#">Welcome</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--banner section end -->
   </div>

   <!--header section end -->
   <!--language  section start -->
   <div class="language_section layout_padding">
      <div class="container">
         <h1 class="language_taital">Some of our departments</h1>
         <div class="language_section_2 layout_padding">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="box_main">
                     <div class="icon_1"><img src="<?php echo e(asset('assets/images/icon4.png')); ?>"></div>
                     <h6 class="heavy_text">Service<br>.01</h6>
                  </div>
                  <div class="readmore_bt"><a href="#">Read More</a></div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="box_main active">
                     <div class="icon_1"><img src="<?php echo e(asset('assets/images/icon1.png')); ?>"></div>
                     <h6 class="heavy_text">Service<br>.02</h6>
                  </div>
                  <div class="readmore_bt active"><a href="#">Read More</a></div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="box_main">
                     <div class="icon_1"><img src="<?php echo e(asset('assets/images/icon3.png')); ?>"></div>
                     <h6 class="heavy_text">Service<br>.03</h6>
                  </div>
                  <div class="readmore_bt"><a href="#">Read More</a></div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="box_main">
                     <div class="icon_1"><img src="<?php echo e(asset('assets/images/icon2.png')); ?>"></div>
                     <h6 class="heavy_text">Service<br>.04</h6>
                  </div>
                  <div class="readmore_bt"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--language  section end -->
   <!--services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="language_taital">Our Doctors</h1>
               <h1 class="language_taital_1">Let's start by introducing our doctors</h1>
               <div class="appoinment_bt"><a href="#">Make Appoinment</a></div>
            </div>
            <div class="col-md-6">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo e(asset('assets/images/team-2.jpg')); ?>">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo e(asset('assets/images/img-1.png')); ?>">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo e(asset('assets/images/team-3.jpg')); ?>">
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--services section end -->
   <!--gallery section start -->
   <div class="gallery_section layout_padding">
      <div class="container">
         <h1 class="gallery_taital">Our Patients' Reactions</h1>
         <p class="gallery_text">You have worked with love and humanity.<br> We are happy to have such wonderful centers.</p>
         <div class="gallery_section_2 layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="image_3">
                              <img src="<?php echo e(asset('assets/images/contact_form.png')); ?>">
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="image_4">
                              <img src="<?php echo e(asset('assets/images/image.png')); ?>">
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="image_5">
                              <img src="<?php echo e(asset('assets/images/immm.jpg')); ?>">
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="image_3">

                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="image_4">

                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="image_5">

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="image_3">

                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="image_4">

                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="image_5">

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
   <!--gallery section end -->
   <!--about section start -->
   <div class="about_section layout_padding">
      <div class="container">
         <h1 class="about_taital">About Center owner</h1>
         <div class="about_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="image_6">
                  </div>
               </div>
               <div class="col-md-6">
                  <h1 class="about_taital_1">Abd Alrahman Jalal</h1>
                  <p class="about_text">Our main goal is to perform our duty to the fullest extent to ensure your recovery, God willing.</p>
                  <div class="appoinment_bt"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--about section end -->
   <!--courses section start -->
   <div class="courses_section layout_padding">
      <div class="container">
         <h1 class="courses_taital">Our centers around the world</h1>
         <p class="courses_text">We spread peace and love all over the world.</p>
         <div class="courses_section_2">
            <div class="flag_main">
               <div class="flag_text"><img src="<?php echo e(asset('assets/images/flag-1.png')); ?>"><span class="padding_left_15">Chinese</span></div>
               <hr class="border_bg">
               <h6 class="learn_text active">Chinese</h6>
            </div>
            <div class="flag_main">
               <div class="flag_text"><img src="<?php echo e(asset('assets/images/flag-2.png')); ?>"><span class="padding_left_15">English</span></div>
               <hr class="border_bg">
               <h6 class="learn_text">English</h6>
            </div>
            <div class="flag_main">
               <div class="flag_text"><img src="<?php echo e(asset('assets/images/flag-3.png')); ?>"><span class="padding_left_15">French</span></div>
               <hr class="border_bg">
               <h6 class="learn_text">French</h6>
            </div>
            <div class="flag_main">
               <div class="flag_text"><img src="<?php echo e(asset('assets/images/flag-4.png')); ?>"><span class="padding_left_15">German</span></div>
               <hr class="border_bg">
               <h6 class="learn_text">German</h6>
            </div>
            <div class="flag_main">
               <div class="flag_text"><img src="<?php echo e(asset('assets/images/flag-5.png')); ?>"><span class="padding_left_15">Japanese</span></div>
               <hr class="border_bg">
               <h6 class="learn_text">Japanese</h6>
            </div>
            <div class="flag_main">
               <div class="flag_text"><img src="<?php echo e(asset('assets/images/flag-6.png')); ?>"><span class="padding_left_15">Spanish</span></div>
               <hr class="border_bg">
               <h6 class="learn_text">Spanish</h6>
            </div>
         </div>
      </div>
   </div>
   <!--courses section end -->
   <!--events section start -->
   <div class="events_section layout_padding">
      <div class="container">
         <h1 class="events_taital">Our Events</h1>
         <p class="events_text">We set up a camp and treated the townspeople for free throughout the camp. </p>
         <div class="events_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="images_main">
                     <img src="<?php echo e(asset('assets/images/1.png')); ?>" class="image_7">
                  </div>
                  <p class="lorem_text"> Our team performed surgeries for those in need during the camp.</p>
                  <div class="time_section">
                     <div class="live_text">Live event</div>
                     <div class="date_text">2024/4/16</div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="images_main">
                     <img src="<?php echo e(asset('assets/images/contact_form.png')); ?>" class="image_7">
                  </div>
                  <p class="lorem_text">We have done special tests for the elderly and others as well.</p>
                  <div class="time_section">
                     <div class="live_text">Live event</div>
                     <div class="date_text">  2024/4/8</div>
                  </div>
               </div>
            </div>
            <div class="read_bt"><a href="#">Read More</a></div>
         </div>
      </div>
   </div>
   <!--events section end -->
   <!--students section start -->
   <div class="students_section layout_padding">
      <div class="container">
         <h1 class="courses_taital">What Says Our Patient</h1>
         <p class="courses_text">We work with all our strength and patience 24 hours a day, 7 days a week.</p>
         <div class="students_section_2 layout_padding">
            <div class="client_main">
               <div class="client_left">
                  <div class="image_9"><img src="<?php echo e(asset('assets/images/img-9.png')); ?>"></div>
               </div>
               <div class="client_right">
                  <h1 class="name_text">Alin salama</h1>
                  <p class="client_text">When I feel that I need to do tests, I will go to them immediately because I trust only them because it is a distinguished center with its medical staff.</p>
                  <div class="quote_icon"><img src="<?php echo e(asset('assets/images/quote-icon.png')); ?>"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--students section end -->
   <!--newsletter section start -->
   <div class="container">
      <div class="newsletter_section layout_padding">
         <h1 class="newsletter_taital">Contact Us</h1>
         <div class="mail_main">
            <input type="text" class="email_text" placeholder="Enter Your email " name="Enter Your email ">
            <div class="left_arrow"><a href="#"><img src="<?php echo e(asset('assets/images/left-arrow.png')); ?>"></a></div>
         </div>
      </div>
   </div>
   <!--newsletter section end -->
   <!--footer section start -->
   <div class="footer_section">
      <div class="container">
         <h1 class="touch_text">Get In Touch</h1>
         <div class="email_box">
            <div class="input_main">
               <form action="/action_page.php">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Phone" name="Phone">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="Email">
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                  </div>
               </form>
               <div class="send_bt"><a href="#">SEND</a></div>
            </div>
         </div>
         <div class="call_main">
            <div class="call_text"><img src="<?php echo e(asset('assets/images/call-icon.png')); ?>"><span class="padding_left_15">Call Now +9999999999</span></div>
            <div class="call_text"><img src="<?php echo e(asset('assets/images/mail-icon.png')); ?>"><span class="padding_left_15">Demo@gmail.com</span></div>
         </div>
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="<?php echo e(asset('assets/images/fb-icon.png')); ?>"></a></li>
               <li><a href="#"><img src="<?php echo e(asset('assets/images/twitter-icon.png')); ?>"></a></li>
               <li><a href="#"><img src="<?php echo e(asset('assets/images/linkedin-icon.png')); ?>"></a></li>
               <li><a href="#"><img src="<?php echo e(asset('assets/images/instagram-icon.png')); ?>"></a></li>
            </ul>
         </div>
      </div>
   </div>
   <!--footer section end -->
   <!--copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text"> 2024 All Rights Reserved. Design by <a href="html.design">Graduate students</a></p>
      </div>
   </div>
   <!--copyright section end -->
   <!-- Javascript files-->
   <?php echo $__env->make('section.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\Users\dell\OneDrive\Desktop\raghad_project (2)\raghad_project\resources\views/pages/home.blade.php ENDPATH**/ ?>