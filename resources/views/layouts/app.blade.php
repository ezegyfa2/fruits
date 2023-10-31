<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @if (isset($scriptPaths))
        <!-- Scripts -->
        @foreach ($scriptPaths as $scriptPath)
            <script src="{{ asset('js/1.1/' . $scriptPath . '.js') }}" defer></script>
        @endforeach
    @endif

    @if (isset($scriptPaths))
        <!-- Styles -->
        @foreach ($stylePaths as $stylePath)
            <link href="{{ asset('css/1.1/' . $stylePath . '.css') }}" rel="stylesheet" />
        @endforeach
    @endif
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
