<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>
            {{ isset($title) ? $title.' :: '.config('app.name') : config('app.name') }}
        </title>

        {{ HTML::style(asset('css/bootstrap.min.css')) }}
        {{ HTML::style(asset('css/sweetalert.css')) }}
        {{ HTML::script(asset('js/jquery-3.3.1.min.js')) }}
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
        <script src="js/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <style>
            @font-face {
                font-family: 'Roboto Thin';
                src: url('fonts/roboto/Roboto-Thin.ttf');
            }
            @font-face {
                font-family: 'Roboto Regular';
                src: url('fonts/roboto/Roboto-Regular.ttf');
            }
            @font-face {
                font-family: 'Roboto Medium';
                src: url('fonts/roboto/Roboto-Medium.ttf');
            }
            body {
                font-family: 'Roboto Thin';
                color:#000000;
                font-size:12pt;
                font-weight:bold;
                background: #ffffff;
            }
            content {
                font-family: 'Roboto Thin';
                color:#000000;
                font-size:14pt;
                font-weight:bold;
                background: #ffffff;
            }
        </style>
        @yield('additional-scripts')
    </head>