<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="" data-layout-position="fixed" data-topbar="light">


<head>
    <meta charset="utf-8" />
    <title>Kingdom|Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('users/assets/img/favicon/favicon.png')}}">

    <!-- plugin css -->
    <link href="{{asset('admins/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('admins/assets/css/bootstrap.rtl.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Calender Css -->
    <link rel="stylesheet" href="{{asset('admins/assets/js/calender/pignose.calender.css')}}" >

    <!-- Icons Css -->
    <link href="{{asset('admins/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('admins/assets/css/app_rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('admins/assets/css/custom_rtl.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100" style="background: linear-gradient(45deg, #2d48b7 30%, #2b49aa)">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100" style="background-image: url({{asset('users/assets/img/favicon/favicon.png')}});background-size: auto;">
                                        {{-- <div class="bg-overlay"></div> --}}
                                        
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Welcome Back</h5>
                                            <p class="text-muted">You Will Be Transferred To The System After Entering Correct Data</p>
                                        </div>

                                        <div class="mt-4">
                                            <form action="{{route('admin.login.post')}}" method="post">
                                                @csrf()
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"> Username</label>
                                                    <input name="username" type="text" class="form-control" id="name" placeholder="Username">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password </label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input name="password" type="password" class="form-control pe-5 password-input" placeholder="Password" id="password-input">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label" for="auth-remember-check">Remember-me</label>
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    
                                                </div>

                                                <div class="mt-4">
                                                    <button style="background-color: #283e89" class="btn btn-custom w-100" type="submit">Login</button>
                                                </div>
                                                @if ($message = Session::get('error'))
                                                    <div class="alert alert-danger alert-block">
                                                    
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </div>
                                                @endif

                                            </form>
                                        </div>

                                        
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

    </div>



    <!-- JAVASCRIPT -->
     <!-- Layout config Js -->
     <script src="{{asset('admins/assets/js/layout.js')}}"></script>
     
    <script src="{{asset('admins/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admins/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admins/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('admins/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('admins/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('admins/assets/js/plugins.js')}}"></script>

    <!-- password-addon init -->
    <script src="{{asset('admins/assets/js/pages/password-addon.init.js')}}"></script>



   

    
</script>
    
    
</body>


</html>