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
                <table id="example1" class="table table-bordered">
                <thead>
                <div class="box-header text-center">
                <h3 class="box-title">Dados do Cliente</h3>
                </div>
                </thead>

                <tbody>

                <div class="box">

            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                <tr>
                <td colspan="4" align="center"><b>{{ $cliente->nome}}</b></td>
                </tr>
                <tr>
                  <td>Endereço: {{ $cliente->logradouro}}</td>
                  <td>Nº: {{ $cliente->numero}}</td>
                  <td>Bairro: {{ $cliente->bairro->bairro}}</td>
                </tr>
                <tr>
                  <td colspan="4">Referência: {{ $cliente->referencia}}</td>
                </tr>
                <tr>
                  <td>Telefone: {{ $cliente->phone}}</td>
                  <td>Celeular: {{ $cliente->celular}}</td>
                  <td>Nascimento: {{ date('d/m/Y', strtotime($cliente->nascimento)) }}</td>
                  <td>Gênero: {{ $cliente->genero}}</td>
                </tr>
                <tr>
                  <td colspan="4">Observação: {{ $cliente->obs}}</td>
                </tr>

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

                </tbody>


              </table>

            </div>

        </div>
    </div>

<script>
    window.print();
</script>

</body>
</html>
