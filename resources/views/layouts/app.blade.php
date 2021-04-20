<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div id="header">
    @include('inputs.header')
</div>

<div id="body">
    @if(Request::is('/'))
        @include('inputs.hello')
    @endif
@include('inputs.messages')

<div class="container">

    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
            @include('inputs.aside')
        </div>
    </div>
</div>


<div id="footer">
    @include('inputs.footer')
</div>
</div>


</body>
</html>