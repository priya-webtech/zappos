<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Reset Password</title>
    </head>
    <style type="text/css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
        </style>
    </style>
    <body style="margin: 0; padding: 0 1em; max-width: 36.8em; width: 100%; margin: 0 auto;font-family: 'Open Sans', sans-serif; font-size: 1.1em; color: #202223; line-height: 1.6em; font-weight: 400;text-align: center;">
        
        <table cellpadding="0" cellspacing="0" style=" padding: 2.5em 0em;">
            <tbody>
                <tr>
                    <td>
                        <img src="{{ asset('storage/mailimg/rotation-lock-blue.png') }}" style="width: 7em; height: 7em; ">
                    </td>
                </tr>
                <tr>
                    <td>
                        {{-- Greeting --}}

                        @if (! empty($greeting))

                            <!--<h1 style=" margin: 0 0 0.2em; font-size: 2.2em; font-weight: bold; line-height: 1.2em;color: #003953;"># {{ $greeting }}</h1>-->

                            @else

                            @if ($level === 'error')

                            <!--<h1 style=" margin: 0 0 0.2em; font-size: 2.2em; font-weight: bold; line-height: 1.2em;color: #003953;"># @lang('Whoops!')</h1>-->

                            @else

                            <!--<h1 style=" margin: 0 0 0.2em; font-size: 2.2em; font-weight: bold; line-height: 1.2em;color: #003953;"># @lang('Hello!')</h1>-->

                            @endif

                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        {{-- Intro Lines --}}

                        @foreach ($introLines as $line)

                       <p> {{ $line }} </p>

                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>
                        {{-- Action Button --}}

                        @isset($actionText)

                        <?php

                            switch ($level) {

                                case 'success':

                                case 'error':

                                    $color = $level;

                                    break;

                                default:

                                    $color = 'primary';

                            }

                        ?>

                        @component('mail::button', ['url' => $actionUrl, 'color' => $color])

                        {{ $actionText }}

                        @endcomponent

                        @endisset

                    </td>
                </tr>
                <tr>
                    <td>
                        {{-- Salutation --}}

                        @if (! empty($salutation))

                        <p>{{ $salutation }}</p>

                        @else

                        <p>@lang('Regards'),</p><br>

                        <p>{{ config('app.name') }}</p>

                        @endif
                    </td>
                </tr>
                <tr>
                    
                    <td>
                    @component('mail::message')
                                    {{-- Subcopy --}}
                    
                    @isset($actionText)
                    
                    @slot('subcopy')
                    
                    @lang(
                    
                        "Ifffff you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
                    
                        'into your web browser:',
                    
                        [
                    
                            'actionText' => $actionText,
                    
                        ]
                    
                    ) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
                    
                    @endslot
                    
                    @endisset
                    @endcomponent
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center; padding: 3em 15px 0; ">
                        <img src="{{ asset('storage/mailimg/zappos-logo.png') }}" style="width: 8em; margin-bottom: 0.4em;">
                        <span style=" width: 100%; display: block;"> © 2021-2022 - zappos</span>
                    </td>
                </tr>
            </tbody>
        </table>
                
    </body>
</html>
