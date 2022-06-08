<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("title")</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('assets')}}/admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    @yield("head")


</head>

<section class="shop login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="login-form">
                    <h2>Login</h2>
                    <p>Please register in order to checkout more quickly</p>
                    <!-- Form -->
                    @include('home.messages')
                    <form class="form" method="post" action="{{route('loginadmincheck')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Your Email<span>*</span></label>
                                    <input type="email" name="email" placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Your Password<span>*</span></label>
                                    <input type="password" name="password" placeholder="Password" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group login-btn">
                                    <button class="btn btn-info" type="submit">Login</button>
                                    <a href="/registeruser" class="btn btn-info">Register</a>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Remember me</label>
                                </div>
                                <a href="#" class="lost-pass">Lost your password?</a>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>

</section>


