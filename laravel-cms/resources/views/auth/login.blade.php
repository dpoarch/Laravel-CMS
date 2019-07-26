<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <title>HSYNC - Dashboard Login</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
      <link rel="stylesheet" href="../../../assets/vendors/css/vendor.addons.css">
      <!-- endinject --><!-- vendor css for this page --><!-- End vendor css for this page --><!-- Layout style -->
      <link rel="stylesheet" href="../../../assets/css/demo_2/style.css">
   </head>
   <body>
      <div class="authentication-theme auth-style_1">
         <div class="row">
            <div class="col-12 logo-section"><a href="/" class="logo" style="    color: #fff;
    font-size: 40px;">HSYNC</a></div>
         </div>
         <div class="row">
            <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
               <div class="grid">
                  <div class="grid-body">
                     <div class="row">
                        <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                             @error('email')
                                <div class="alert alert-info dismissible-alert" role="alert"> {{$message}}</div>
                            @enderror
                            
                            @error('password')
                                <div class="alert alert-info dismissible-alert" role="alert"> {{$message}}</div>
                            @enderror
                           <form method="POST" action="{{ route('login') }}">
                            @csrf
                              <div class="form-group input-rounded">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Username">
                               
                            </div>
                              <div class="form-group input-rounded"><input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"></div>
                              <div class="form-inline">
                                 <div class="checkbox"><label><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me <i class="input-frame"></i></label></div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-block">Login</button>
                           </form>
                           <div class="signup-link">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="auth_footer">
            <p class="text-muted text-center">© HSYNC Inc 2019</p>
         </div>
      </div>
      <script src="../../../assets/vendors/js/core.js"></script>
      <script src="../../../assets/vendors/js/vendor.addons.js"></script>
      <script src="../../../assets/js/script.js"></script>
   </body>
</html>