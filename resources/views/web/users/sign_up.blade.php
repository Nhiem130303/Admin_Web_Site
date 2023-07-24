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
            <form action="{{route('sign_up.store')}}" method="post">
                @csrf
                @include('web.layout.alert')
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>SIGN UP</h2>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" value="{{old('name')}}" name="name" class="form-control form-control-lg bg-light fs-6"
                               placeholder="Full name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" value="{{old('email')}}" name="email" class="form-control form-control-lg bg-light fs-6"
                               placeholder="Email address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" value="{{old('password')}}" name="password" class="form-control form-control-lg bg-light fs-6"
                               placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" value="{{old('phone')}}" name="phone" class="form-control form-control-lg bg-light fs-6"
                               placeholder="Phone Number">
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Sign Up</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="{{asset('web/images/google.png')}}"
                                                                             style="width:20px" class="me-2">
                            <small>Sign Up with Google</small>
                        </button>
                    </div>
                    <div class="row">
                        <small>Already have an account? <a href="{{route('sign_in')}}">Sign In</a></small>
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