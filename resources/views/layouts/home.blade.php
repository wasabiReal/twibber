<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twibber</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@include('partials/header')
<div class="container">
    <div class="row">
        <div class="col-xl-2">
            <div class="sidebar">
                @include('partials/sidebar')
            </div>
        </div>
        <div class="col-xl-10">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/25ae2v73fbnfg0j63qa2hid3ds0b7w5gwuole938pe6iqy30/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{ asset('js/jquery.slim.js') }}"></script>
<script src="https://kit.fontawesome.com/74742ed102.js" crossorigin="anonymous"></script>
</body>
</html>
