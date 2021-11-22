<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">



        <title>{{ config('app.name', 'Laravel') }}</title>



        <!-- Fonts -->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">



        <!-- Styles -->

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <style type="text/css">
                
            .alert {
                padding: 15px;
                border: 1px solid transparent;
                border-radius: 4px
            }

            .alert-success {
                color: #3c763d;
                background-color: #dff0d8;
                border-color: #d6e9c6
            }

            .alert-info {
                color: #31708f;
                background-color: #d9edf7;
                border-color: #bce8f1
            }


            .alert-warning {
                color: #8a6d3b;
                background-color: #fcf8e3;
                border-color: #faebcc
            }


            .alert-danger {
                color: #a94442;
                background-color: #f2dede;
                border-color: #ebccd1
            }
        </style>



        <!-- Scripts -->

        <script src="{{ URL::asset('js/app.js') }}" defer></script>

    </head>

    <body>

        <div class="font-sans text-gray-900 antialiased">

             <div>
                @if (session()->has('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session()->has('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif
                @if (session()->has('alert'))
                    <div class="alert alert-danger">
                        {{ session('alert') }}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            @php 
                Illuminate\Support\Facades\Session::forget('message'); 
                Illuminate\Support\Facades\Session::forget('warning'); 
                Illuminate\Support\Facades\Session::forget('alert'); 
                Illuminate\Support\Facades\Session::forget('success'); 
            @endphp

            {{ $slot }}

        </div>

    </body>

</html>

