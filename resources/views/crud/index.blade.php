<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Excelente</h1>
    <h3><?php echo $name, $age ?></h3>
    <h3>{{ $name }}</h3>  <!--  manera elegante -->
    @if ($name != "Ivan")
        Tu nombre no es Ivan
    @else
        Tu nombre es Ivan
    @endif

    <ul>

    @foreach ([1,2,3,4,5,6] as $item)
        <li>{{$item}}
    @endforeach
    </ul>
   <!-- <h4><?php echo $name, $age?></h4> -->
</body>
</html>
