<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>
<body class="antialiased">

<div id="app">
    <home></home>
</div>
</body>
<script src="{{ url('/js/app.js') }}">

</script>
</html>
