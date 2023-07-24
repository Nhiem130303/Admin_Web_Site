<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.layout.head')
</head>
<body>

<!----------------------- Main Container -------------------------->

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

    <div class="row border rounded-5 p-3 bg-white shadow box-area">

        <!--------------------------- Left Box ----------------------------->

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
             style="background: #103cbe;">
            <div class="featured-image mb-3">
                <img src="{{asset('web/images/1.png')}}" class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be
                Verified</p>
            <small class="text-white text-wrap text-center"
                   style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on
                this platform.
            </small>
        </div>

        <!-------------------- ------ Right Box ---------------------------->
        <div class="col-md-6 right-box">
            <form action="{{route('sign_in.show')}}" method="post">
                @csrf
                @include('web.layout.alert')
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello,Again</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" value="{{old('email')}}" name="email"
                               class="form-control form-control-lg bg-light fs-6"
                               placeholder="Email address">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" value="{{old('password')}}" name="password"
                               class="form-control form-control-lg bg-light fs-6"
                               placeholder="Password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary">
                                <small>Remember Me</small>
                            </label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Forgot Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                    <div class="input-group mb-3">
                        <a href="{{route('sign_in.google_auth')}}" class="btn btn-lg btn-light w-100 fs-6"><img src="{{asset('web/images/google.png')}}"
                                                                             style="width:20px" class="me-2">
                            <small>Sign In with Google</small>
                        </a>
                    </div>
                    <div class="row">
                        <small>Don't have account? <a href="{{route('sign_up')}}">Sign Up</a></small>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<footer>
    @include('web.layout.footer')
</footer>
</body>
</html>