{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}




@extends('layouts.app-home')

@section('content')
<section class="login">
    <div class="container container-ver2 mt-40px">
        <div class="page-login box space-50">
            <div class="row" style="
    display: flex;
    justify-content: center;
">
                <div class="col-md-5">
                    <div class="register form-wrapper box space-50">
                        <h4 class="text-center">Регистрация</h4>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form action="{{ route('register') }}" class="form-horizontal" method="POST">
                            @csrf

                            <div class="group box space-10">
{{--                                <x-label for="email" :value="__('Email')" />--}}
                                <x-input id="email" type="email" name="email" placeholder="Ваш email"  :value="old('email')" required />
                            </div>
                            <div class="group box space-10">
{{--                                <x-label for="name" :value="__('Имя')" />--}}
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Ваше имя"  :value="old('name')" required autofocus />
                            </div>
                            <div class="group box space-10">
{{--                                <x-label for="password" :value="__('Пароль')" />--}}
                                <x-input id="password"
                                                type="password"
                                                name="password"
                                                placeholder="Ваш пароль"
                                                required autocomplete="new-password" />
                            </div>
                            <div class="group box space-10">
{{--                                <x-label for="password_confirmation" :value="__('Повторите пароль')" />--}}

                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                placeholder="Повторите пароль"
                                                name="password_confirmation" required />
                            </div>

                            <x-button class="link-v1 rt">
                                {{ __('Зарегистрироваться') }}
                            </x-button>
                            <p class="text-center register">Уже есть аккаунт? <a href="/login">Войти</a></p>
                        </form>
                    </div>
                    <!-- End register -->

                </div>
                <!-- End col-md-6 -->
            </div>
        </div>
    </div>
</section>


@endsection

