
<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
<title>    Login | Minible - Admin & Dashboard Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico" />
<!-- Bootstrap Css -->
<link
  href="{{ asset('assets/css/bootstrap.rtl.css') }}"
  rel="stylesheet"
  type="text/css"
/>
<!-- Icons Css -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('assets/css/app.rtl.css') }}" rel="stylesheet" type="text/css" />
</head>


    <body class="authentication-bg">
            <div class="home-btn d-none d-sm-block">
        <a href="http://minible-h-rtl.laravel.themesbrand.com/index" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="http://minible-h-rtl.laravel.themesbrand.com/index" class="mb-5 d-block auth-logo">
                            <img src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/logo-dark.png" alt="" height="22"
                                class="logo logo-dark">
                            <img src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/logo-light.png" alt="" height="22"
                                class="logo logo-light">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">خوش آمدید!</h5>
                                <p class="text-muted">برای ادامه کار وارد شوید</p>
                                @include('messages')
                            </div>
                            <div class="p-2 mt-4">
                                <form action="{{ URL('/login/admin') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="username">نام کاربری</label>
                                        <input type="text" name="name" class="form-control" id="username" placeholder="نام کاربری را وارد کنید...">
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="auth-recoverpw" class="text-muted">رمز عبور را فراموش کردید؟</a>
                                        </div>
                                        <label class="form-label" for="userpassword">رمز عبور</label>
                                        <input type="password" name="password" class="form-control" id="userpassword"
                                            placeholder="رمز عبور خود را وارد کنید">
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">ورود</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <p>© <script>
                                document.write(new Date().getFullYear())

                            </script> برنامه نویسی شده توسط <i class="mdi mdi-heart text-danger"></i> علی خوشکار</p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/node-waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-counterup.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
 
 </body>

</html>
