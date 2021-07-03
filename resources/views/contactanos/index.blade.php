<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Document</title>


</head>

<body style="   background-color: rgb(146, 49, 102);">

    <center><h1>Dejanos un mensaje</h1></center><br>

    <style>
        h1{
            margin: 0 auto;
            margin-top: 4em;
            width: 40%;
            font-family: 'Nunito', sans-serif;
            color: rgb(245, 240, 240);

        }
        form{
            background-color: rgba(15, 23, 65, 0.938);
            padding: 20px;
            color: #999;
            border-radius: 8px;
            margin: 0 auto;
            width: 300px;
        }
        .field1{
            border: solid 1px #ccc;
            padding: 5px;
            width: 297px;
            text-align: center;
        }
        .field2{
            border: solid 1px #ccc;
            padding: 5px;
            width: 285px;
        }
    </style>


    <form action="{{ route('contactanos.store')}}" method="POST">

        @csrf

        <label>
            Tema:

            <br>

            <select name="txtTema" class="field1" style="margin-bottom: 15px; margin-top: 15px;">
                <option value="">-- Elija una opcion --</option>
                <option value="1">Error en importe de cuota</option>
                <option value="2">Error en el sistema</option>
                <option value="3">Otro error</option>
            </select>
        </label>
        <br>

        @error('txtTema')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Detalle:
            <br>
            <textarea name="txareaMsj" rows="7" class="field2" style="margin-bottom: 15px; margin-top: 15px;"></textarea>
        </label>
        <br>

        @error('txareaMsj')
        <p><strong>{{$message}}</strong></p>
        @enderror
        <p style="text-align: center">
            <button type="submit" class="field2">Enviar</button>
        </p>

    </>

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif
</body>
</html>
