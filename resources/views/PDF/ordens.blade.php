<!DOCTYPE html>
<html lang="en">
<table>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordens Servicos</title>

    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Receptor</th>
        <th>Servicos</th>
        <th>Status</th>
    </tr>
</head>
<body>
    @foreach ($ordens as $ordem)
    <tr>
    <td>{{$ordem->id}}</td>
    <td>{{$ordem->cliente->nome}}</td>
    <td>{{$ordem->receptor}}</td>
    <td><ul>
     @foreach ($ordem->servicos as $servico)
         <li> {{ $servico->servico }}</li>
     @endforeach
    </ul></td>
    <td>{{$ordem->status}}</td>
    </tr>

    @endforeach
</body>
</table>
</html>
