@extends('layouts/base')

@section('title', 'Welcome')
@section('show-header', false)

@section('content-full')
    <div class="min-h-full h-full w-full flex flex-col items-center justify-center">
        @if (Route::has('login'))
            <div class="m-8 absolute top-0 right-0">
                <ul class="-mr-6 list-reset flex items-center">
                    @auth
                        <li class="mr-6">
                            <a class="font-semibold text-brand-600 hover:text-brand-700 no-underline" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                    @else
                        <li class="mr-6">
                            <a class="font-semibold text-brand-600 hover:text-brand-700 no-underline" href="{{ route('login') }}">
                                Sign in
                            </a>
                        </li>

                        @if (Route::has('register'))
                            <li class="mr-6">
                                <a class="font-semibold text-brand-600 hover:text-brand-700 no-underline" href="{{ route('register') }}">
                                    Sign up
                                </a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        @endif

        <h1 class="mb-8 leading-tight text-5xl text-gray-700">{{ config('app.name') }}</h1>

        <ul class="-mb-4 sm:-mr-6 list-reset flex flex-col sm:flex-row items-center">
            <li class="mb-4 sm:mr-6">
                <a class="font-semibold text-brand-600 hover:text-brand-700 no-underline" href="https://laravel.com/docs">
                    Docs
                </a>
            </li>

            <li class="mb-4 sm:mr-6">
                <a class="font-semibold text-brand-600 hover:text-brand-700 no-underline" href="https://laracasts.com">
                    Laracasts
                </a>
            </li>

            <li class="mb-4 sm:mr-6">
                <a class="font-semibold text-brand-600 hover:text-brand-700 no-underline" href="https://laravel-news.com">
                    News
                </a>
            </li>

            <li class="mb-4 sm:mr-6">
                <a class="font-semibold text-brand-600 hover:text-brand-700 no-underline" href="https://blog.laravel.com">
                    Blog
                </a>
            </li>

            <li class="mb-4 sm:mr-6">
                <a class="font-semibold text-brand-600 hover:text-brand-700 no-underline" href="https://nova.laravel.com">
                    Nova
                </a>
            </li>

            <li class="mb-4 sm:mr-6">
                <a class="font-semibold text-brand-600 hover:text-brand-700 no-underline" href="https://forge.laravel.com">
                    Forge
                </a>
            </li>

            <li class="mb-4 sm:mr-6">
                <a class="font-semibold text-brand-600 hover:text-brand-700 no-underline" href="https://github.com/laravel/laravel">
                    GitHub
                </a>
            </li>
        </ul>
    </div>
@endsection
