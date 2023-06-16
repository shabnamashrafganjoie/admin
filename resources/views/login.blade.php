<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('log-assets/css/bootstrap/bootstrap-reboot.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/css/bootstrap/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/plugins/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/plugins/owlcarousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/css/address.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/css/payment.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/css/filter.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/css/product.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('log-assets/css/login.css')}}">
    <title>ورود / ثبت نام</title>
</head>
<body>

<form class="d-inline" action="{{ route('login') }}" method="get">
                @csrf
    <section class="vh-100 d-flex justify-content-center align-items-center pb-5">
        <section class="login-wrapper mb-5">
            <section class="login-logo">
                <img src="assets/images/logo/4.png" alt="">
            </section>
            <section class="login-title">ورود </section>
            <!-- <section class="login-info">شماره موبایل خود را وارد کنید</section>
            <section class="login-input-text">
                <input type="text" id="mobile" name="mobile">
            </section> -->


         <!--    
            <section class="login-info">
                                <label for="">موبایل </label>
                                <input type="text" id="mobile" name="mobile" value="{{ old('mobile') }}" class="login-input-text">
                            @error('mobile')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section> -->


           <!--  <section class="login-info">رمز عبور خود را وارد کنید</section>
            <section class="login-input-text">
                <input type="text" name="password" id="password">
            </section> -->
            <section class="login-info">
                                <label for="">شماره موبایل خود را وارد کنید </label>
                                <input type="text" id="mobile" name="mobile"  class="form-control form-control-sm" value="{{old('mobile')}}">
                            </div>
                            @error('mobile')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>



            <section class="login-info">
                                <label for="">رمز عبور خود را وارد کنید </label>
                                <input type="text" id="password" name="password"  class="form-control form-control-sm" value="{{old('password')}}">
                            </div>
                            @error('password')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>





            <section class="login-btn d-grid g-2">
            
                <button class="btn btn-danger">ورود</button></section>
        </section>
    </section>
    
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('log-assets/assets/js/jQuery-3.5.1.min.js')}}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{asset('log-assets/assets/js/bootstrap/bootstrap.min.js')}}" ></script>
    <script src="{{asset('log-assets/assets/js/bootstrap/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{asset('log-assets/assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('log-assets/assets/js/main.js')}}" ></script>
</body>
</html>