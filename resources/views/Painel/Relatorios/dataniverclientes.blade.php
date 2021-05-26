<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudioMensagens</title>

    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <p style="text-align: center">
            <img src="{{ asset('template/stmlogo2.jpg') }}"  alt="" height="100" width="150">
            </p>
            <h3 class="text-center mt-4">Aniversariantes</h3>

                <table id="example1" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Nascimento</th>
                        <th>Celular</th>
                        <th>Gênero</th>
                      </tr>
                </thead>
                <tbody>

                    @foreach ($clientes as $cliente)
                    <tr>
                      <td> {{ $cliente->id }} </td>
                      <td> {{ $cliente->nome }} </td>
                      <td> {{ $cliente->celular }} </td>
                      <td> {{ date('d/m/Y', strtotime($cliente->nascimento))  }} </td>
                      <td> {{ $cliente->genero }} </td>
                    </tr>
                    @endforeach
                </tbody>


              </table>

            </div>

        </div>
    </div>

</body>
</html>
