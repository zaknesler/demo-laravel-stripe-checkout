<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@hasSection('title') @yield('title') &dash; {{ config('app.name') }} @else {{ config('app.name') }} @endif</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @yield('scripts')
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans font-normal text-base tracking-normal leading-normal bg-white text-gray-700 min-h-full h-full">
        <div id="app" class="min-h-full h-full" v-cloak>
            @hasSection('show-header')
                @include('layouts/partials/_header')
            @endif

            @hasSection('content-full')
                @yield('content-full')
            @endif

            @hasSection('content')
                <div class="p-6 w-full">
                    <div class="max-w-2xl mx-auto">
                        @yield('content')
                    </div>
                </div>
            @endif
        </div>
    </body>
</html>
