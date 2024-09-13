<!DOCTYPE html>
<html lang="en">
   <?php echo $__env->make('section.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <body>
      <!--header section start -->
      <div class="header_section header_bg">
         <div class="">
            <?php echo $__env->make('section.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>
      <!--header section end -->
      <!--newsletter section start -->
      <div class="container">
         <div class="newsletter_section layout_padding">
            <h1 class="newsletter_taital">Subscribe Our Newsletter</h1>
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
               <div class="call_text"><img src="<?php echo e(asset('assets/images/call-icon.png')); ?>"><span class="padding_left_15">Call Now  +01 123467890</span></div>
               <div class="call_text"><img src="<?php echo e(asset('assets/images/mail-icon.png')); ?>"><span class="padding_left_15">demo@gmail.com</span></div>
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
            <p class="copyright_text"> 2023 All Rights Reserved. Design by <a href="html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
      <!--copyright section end -->
      <!-- Javascript files-->

   </body>
</html>
<?php /**PATH C:\wamp64\www\raghad_project (2)\raghad_project (2)\raghad_project\resources\views/pages/contact.blade.php ENDPATH**/ ?>