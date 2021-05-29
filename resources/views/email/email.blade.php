<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <div class="header">
        <div class="info_contacto">
            <h1>Información de Contacto</h1>
            <label for="">Cliente -> {{$contacto->name}}</label>
            <label for="">Telefono -> {{$contacto->phone}}</label>
            <label for="">Email -> {{$contacto->email}}</label>
        </div>
    </div>
    <div class="container">
        <div class="mensaje">
            <h1>Mensaje</h1>
            <p>
                {{$contacto->mensaje}}
            </p>
        </div>
    </div>
</body>
</html>