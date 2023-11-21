<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twibber</title>

{{--    <link rel="stylesheet" href="/resources/css/app.css">--}}

</head>
<body>

<div class="sidebar">
    @include('partials/sidebar')
</div>
<div class="content">
    @yield('content')
</div>


{{--<script src="/resources/js/app.js"></script>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>--}}
</body>
</html>
