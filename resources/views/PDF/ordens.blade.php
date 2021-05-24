<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h2 style="text-align: center">Relatório - Ordens de Serviços</h2>

<table border="1" cellpadding="0" cellspacing="0" style="width: 100%">

    <thead>

    <title>Ordens Servicos</title>

    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Receptor</th>
        <th>Servicos</th>
        <th>Status</th>
        <th>Data OS</th>
    </tr>
</thead>
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
    <td>{{$ordem->dataos->format('d/m/Y')}}</td>

    </tr>

    @endforeach
</body>
</table>
</html>
