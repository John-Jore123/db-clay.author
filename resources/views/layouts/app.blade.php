<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="The North Pole is melting and with it Santa's magic and the magic of Christmas. Christmas can be saved with the help of Santa's cousin Santo. Santo the scientist, whose green science can help save Christmas and help save the planet at the same time. She PageTurner Press and Media published book, Anthology of a Disturbed Mind is described as thrilling and intriguing. She partnered with a company that matches He/Her values, and that is PageTurner Press and Media.">
        <meta name="keywords" content="pageturner, pageturner.us, pageturner press and media, press, press and media, media, book, author, testimonials">

        <title>{{ config('app.name') }}</title>

        <link rel="shortcut icon" href="{{ mix('images/name-logo.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/aos.css') }}" />
        <link rel="stylesheet" href="{{ mix('css/hamburgers.min.css') }}" />
        <link rel="stylesheet" href="{{ mix('css/sweetalert2.min.css') }}" />
        <link rel="stylesheet" href="{{ mix('css/intlTelInput.min.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    </head>
    <body>
        
        <x-layout.sidebar />
            <main>
                @yield('contents')
            </main>

        <script src="{{ mix('js/jquery.min.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ mix('js/aos.js') }}"></script>
        <script src="{{ mix('js/sweetalert2.min.js') }}"></script>
        <script src="{{ mix('js/collapse.js') }}"></script>
        <script src="{{ mix('js/ripple.js') }}"></script>
        <script src="{{ mix('js/utils.js') }}"></script>
    </body>
</html>
