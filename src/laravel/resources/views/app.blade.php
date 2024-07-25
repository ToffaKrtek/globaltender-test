<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel SPA</title>
    <link href="{{ asset('css/app.scss') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <chat-component></chat-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>