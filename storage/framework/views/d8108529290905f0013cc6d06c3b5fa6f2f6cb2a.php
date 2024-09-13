<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo"><a href="index.html"><img src="<?php echo e(asset('assets/images/loder.png')); ?>"></a></div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
             <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="<?php echo e(route('services')); ?>">Services</a>
          </li>

             <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact Us</a>
          </li>
       </ul>
       <form class="form-inline my-2 my-lg-0">
          <div class="login_text"><a href="<?php echo e(route('login')); ?>">Login</a></div>
       </form>
    </div>
 </nav>
<?php /**PATH C:\wamp64\www\raghad_project (2)\raghad_project (2)\raghad_project\resources\views/section/nav.blade.php ENDPATH**/ ?>