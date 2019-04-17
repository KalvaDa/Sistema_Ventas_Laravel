<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- USANDO PHP
        <p><?= e($title)?></p>
    <ul>
    <?php foreach ($users as $user):?>
    <e($user) es para escapar js 
          <li><?=e($user)?></li>
    <?php endforeach;?>
    </ul> -->

    <!-- USANDO BLADE -->
    <p>{{$title}}</p>
    @if (!empty($users))
        <ul>
        @foreach ($users as $user)
        <li>{{$user}}</li>
        @endforeach
    </ul>   
    @else
    <p>Lista vacia</p>
        
    @endif
 


</body>
</html>