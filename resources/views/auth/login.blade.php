@extends('layouts.app-home')

@section('content')

    <!-- End banner -->
    <div class="container container-ver2 mt-40px">
        <div class="page-login box space-50">
            <div class="row" style="
    display: flex;
    justify-content: center;
">
                <div class="col-md-4 sign-in space-30">
                    <h3>Войти</h3>
                    <p>Добро пожаловать, войдите в ваш аккаунт</p>

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="group box space-20">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email"  placeholder="Ваш Email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="group box">
                            <x-label  for="password" :value="__('Password')" />

                            <x-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            placeholder="Ваш пароль"
                                            required autocomplete="current-password" />
                        </div>

                        <div class="remember">
                            <input id="remember_me" type="checkbox" name="remember" value="remember">
                            <label for="remember_me" class="label-check">Запомнить меня</label>
                            @if (Route::has('password.request'))
                                <a class="help" href="{{ route('password.request') }}">
                                    {{ __('Забыли ваш пароль?') }}
                                </a>
                            @endif
                        </div>
                            <x-button class="ml-3">
                                {{ __('Войти') }}
                            </x-button>
                    </form>
                    <!-- End form -->
                </div>
                <!-- End col-md-6 -->


            </div>
            <!-- End col-md-6 -->
        </div>
    </div>
    </div>



@endsection

