<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

    <style>
        body {
            padding-top: 40px;
        }
    </style>
</head>
<body>
<div id="app" class="container">
    @yield('content')
</div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@2.6.10/dist/vue.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
