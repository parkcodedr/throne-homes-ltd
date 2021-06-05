<div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="<?php echo e(route('login')); ?>">
               <?php echo csrf_field(); ?>
              <h1>Login Form</h1>
              <div>
                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
              </div>
              <div>
                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">

                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
              </div>
              <div>
                <button class="btn btn-default submit">Log in</button>
                <a class="reset_pass" href="#signup">Lost your password?</a>
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST" action="<?php echo e(url('/password_reset')); ?>">
               <?php echo csrf_field(); ?>
              <h1>Email & Phone Number</h1>
              <div>
                <input type="email" name = "email" class="form-control" placeholder="Email" required/>
                <input type="phone" name = "phone" class="form-control" placeholder="Phone Number" required/>
              </div>
              <div>
                <button class="btn btn-default submit">Submit Request</button>
                <a href="#signin" class="reset_pass"> Log in </a>
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div><?php /**PATH C:\laravel\thronehomesltd\resources\views/admin/backlayouts/login_login.blade.php ENDPATH**/ ?>