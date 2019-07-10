<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <div id="app">
            <ul>
                <li v-for="skill in skills" v-text="skill"></li>
            </ul>
        </div>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@2.6.10/dist/vue.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
