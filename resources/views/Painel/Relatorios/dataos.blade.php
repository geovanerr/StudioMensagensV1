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
            <h3 class="text-center mt-4">Ordens de Serviços</h3>

                <table id="example1" class="table table-bordered">
                <thead>
                    <tr>
                        <th>OS</th>
                        <th>Cliente</th>
                        <th>Receptor</th>
                        <th>Celular</th>
                        <th>Serviços</th>
                        <th>Data OS</th>
                        <th>Hora OS</th>
                        <th>Status</th>


                      </tr>
                </thead>
                <tbody>

                    @foreach ($ordens as $ordem)
                    <tr>
                      <td> {{ $ordem->id }} </td>
                      <td> {{ $ordem->cliente->nome }} </td>
                      <td> {{ $ordem->receptor }} </td>
                      <td> {{ $ordem->celular }} </td>
                      <td>
                          <ul>
                            @foreach ($ordem->servicos as $servico)
                                <li> {{ $servico->servico }}</li>
                            @endforeach
                          </ul>
                     </td>
                      <td> {{ date('d/m/Y', strtotime($ordem->dataos))  }} </td>
                      <td> {{ $ordem->horarioos }} </td>
                      <td> {{ $ordem->status }} </td>


                    </tr>
                    @endforeach
                </tbody>


              </table>

            </div>

        </div>
    </div>

</body>
</html>
