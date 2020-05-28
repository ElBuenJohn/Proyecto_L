<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
    .table{
        width: 100%;
        border: 1px solid #999999;
    }
    </style>
</head>
<body>
        <table class= "table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $producto -> codigo }}</td>
                                    <td>{{ $producto -> nombre }}</td>
                                </tr>
                    @endforeach
                </tbody>
        </table>
   
</body>
</html>

