<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title','')
</head>
<body>

    @include('layouts.backend.body.headers')

    @include('layouts.backend.body.sidebars')


    @yield('content')


    @include('layouts.backend.body.footers')
    @include('layouts.backend.scripts')

</body>
</html>
