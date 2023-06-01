@extends('layouts.app-home')

@section('content')

<div class="container">
    <div class="banner-header banner-lbook3 space-30">
        <img src="assets/images/banner-mansory.jpg" alt="Banner-header">
        <div class="text">
            <h3>Login/Register</h3>
            <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>Login/Register</p>
        </div>
    </div>
</div>
<!-- End banner -->
<div class="container container-ver2">
    <div class="page-login box space-50">
        <div class="row" style="
    display: flex;
    justify-content: center;
">
            <div class="col-md-4 sign-in space-30">
                <h3>Войти</h3>
                <p>Добро пожаловать, войти в ваш аккаунт</p>

                <form class="form-horizontal" method="POST">
                    @csrf
                    <div class="group box space-20">
                        <label class="control-label" for="inputemail">EMAIL ADDRESS *</label>
                        <input class="form-control" name="email" type="text" placeholder="Your email" id="inputemail">
                    </div>
                    <div class="group box">
                        <label class="control-label" for="inputname">Name *</label>
                        <input class="form-control" name="name" type="text" placeholder="Name" id="inputname">
                    </div>
                    <div class="group box">
                        <label class="control-label" for="inputpass">PASSWORD *</label>
                        <input class="form-control" name="password" type="password" placeholder="Password" id="inputpass">
                    </div>
                    <div class="remember">
                        <input id="remeber" type="checkbox" name="check" value="remeber">
                        <label for="remeber" class="label-check">remember me!</label>
                        <a class="help" href="#" title="help ?">Fogot your password?</a>
                    </div>
                    <button type="submit" class="link-v1 rt">LOGIN NOW</button>
                </form>
                <!-- End form -->
            </div>
            <!-- End col-md-6 -->
{{--            <div class="col-md-4">--}}
{{--                <div class="register box space-50">--}}
{{--                    <h3>Зарегестрироваться</h3>--}}
{{--                    <p>Create your own Rimbus account.</p>--}}
{{--                    <form action="/login/register" class="form-horizontal" method="POST">--}}
{{--                        @csrf--}}
{{--                        <div class="group box space-20">--}}
{{--                            <label class="control-label" for="inputemail">EMAIL ADDRESS *</label>--}}
{{--                            <input class="form-control" name="email" type="text" placeholder="Your email" id="inputemail">--}}
{{--                        </div>--}}
{{--                        <div class="group box">--}}
{{--                            <label class="control-label" for="inputname">Name *</label>--}}
{{--                            <input class="form-control" name="name" type="text" placeholder="Name" id="inputname">--}}
{{--                        </div>--}}
{{--                        <div class="group box">--}}
{{--                            <label class="control-label" for="inputpass">PASSWORD *</label>--}}
{{--                            <input class="form-control" name="password" type="password" placeholder="Password" id="inputpass">--}}
{{--                        </div>--}}
{{--                        <div class="remember">--}}
{{--                            <input id="remeber" type="checkbox" name="check" value="remeber">--}}
{{--                            <label for="remeber" class="label-check">remember me!</label>--}}
{{--                            <a class="help" href="#" title="help ?">Fogot your password?</a>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="link-v1 rt">Sign Up</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
                <!-- End register -->

            </div>
            <!-- End col-md-6 -->
        </div>
    </div>
</div>



@endsection
