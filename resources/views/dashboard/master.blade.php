<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-AU-Compatible" content="ie-edge">
        <title>Dashboard</title>
        <h1>Ingrese la información Requerida</h1>
    </head>
<body>
    {{-- @if (session('status'))
        {{session('status')}}
    @endif --}}    

    @if (session('status'))
        {{session('status')}}
    @endif

    @yield('content') 

    <section>
        @yield('morecontent')
    </section>    
</body>
</html>
