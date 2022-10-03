<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/admin')}}/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets/admin')}}/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/admin')}}/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/admin')}}/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="{{url('assets/admin')}}/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{url('assets/admin')}}/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="{{url('assets/admin/assets')}}/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{url('assets/admin')}}/assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{url('assets/admin')}}/assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
  </head>
  <body>
    <main class="main" id="top">

      <div class="container-fluid px-0" data-layout="container">

        <div class="container">
            @if(session()->has('message'))
            <div class="alert alert-danger">
            {{ session()->get('message') }}
            </div>
            @endif

          <div class="row flex-center min-vh-100 py-5">
            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="{{url('/')}}">
                <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="{{url('assets/admin')}}/assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
              </a>
              <div class="text-center mb-7">
                <h3>Sign In</h3>
                <p class="text-700">Get access to your account</p>
              </div>
              <form method="POST" action="{{url('admin/loginvalidation')}}" method="post">

                @csrf
              <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                <div class="form-icon-container"><input class="form-control form-icon-input" name="email" id="email" type="email" placeholder="name@example.com" value="{{old('email')}}" /><span class="fas fa-user text-900 fs--1 form-icon"></span>
                  @error('email')
                  <p>This field Required 😡</p>
                    @enderror</div>
              </div>
              <div class="mb-3 text-start"><label class="form-label" name="password" for="password">Password</label>
                <div class="form-icon-container"><input class="form-control form-icon-input" name="password" type="password" placeholder="Password"  value="{{old('password')}}" /><span class="fas fa-user text-900 fs--1 form-icon"></span>
                  @error('password')
                  <p>This field Required 😡</p>
                    @enderror</div>
              </div>
              <div class="row flex-between-center mb-7">
              <div class="col-auto"><a class="fs--1 fw-semi-bold" href="forgot-password.html">Forgot Password?</a></div>
              </div>
              {{-- <button type="submit" class="btn btn-primary w-100 mb-3" name="submit" value="Sign In" >Sign In</button> --}}
              {{-- <input type="submit" /> --}}
              
              <input type="submit" class="btn btn-primary w-100 mb-3" name="submit" value="Sign In">
              </form>
              <div class="text-center"><a class="fs--1 fw-bold" href="{{url('/admin/register')}}">Create an account</a></div>
              <div class="position-relative">
                <hr class="bg-200 mt-5 mb-4">
                <div class="divider-content-center">or use email</div>
              </div>
              <button class="btn btn-phoenix-secondary w-100 mb-3"><span class="fab fa-google text-danger me-2 fs--1"></span>Sign in with google</button><button class="btn btn-phoenix-secondary w-100"> <span class="fab fa-facebook text-primary me-2 fs--1"></span>Sign in with facebook</button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="{{url('assets/admin/assets')}}/vendors/popper/popper.min.js"></script>
    <script src="{{url('assets/admin/assets')}}/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{url('assets/admin/assets')}}/vendors/anchorjs/anchor.min.js"></script>
    <script src="{{url('assets/admin/assets')}}/vendors/is/is.min.js"></script>
    <script src="{{url('assets/admin/assets')}}/vendors/fontawesome/all.min.js"></script>
    <script src="{{url('assets/admin/assets')}}/vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="{{url('assets/admin/assets')}}/vendors/list.js/list.min.js"></script>
    <script src="{{url('assets/admin/assets')}}/vendors/feather-icons/feather.min.js"></script>
    <script src="{{url('assets/admin/assets')}}/vendors/dayjs/dayjs.min.js"></script>
    <script src="{{url('assets/admin/assets')}}/assets/js/phoenix.js"></script>
  </body>
</html>