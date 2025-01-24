<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electromania</title>
</head>

<body style="background-color:#8fbbe4" >
    
    @include('fragments.navbar')
    
    @if(session('status'))
    {{session('status')}}
    @endif

    @yield('content')
</body>
</html>