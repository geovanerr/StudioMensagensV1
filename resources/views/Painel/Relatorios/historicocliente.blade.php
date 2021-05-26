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
                <h3 class="box-title">Histórico Cliente</h3>
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
            <!-- teste -->
            @foreach ($ordens as $ordem)                      

            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                <tr>
                <td colspan="4" align="center"><b>Ordem de Servico N°: {{ $ordem->id }}</b></td>
                </tr>
                <tr>
                  <td colspan="4">Cliente: {{$ordem->cliente->nome}}</td>
                </tr> 
                  <tr>
                  <td colspan="4">Receptor: {{$ordem->receptor}}</td>
                </tr>
                <tr>
                  <td>Telefone: {{ $ordem->phone}}</td>
                  <td>Celeular: {{ $ordem->celular}}</td>
                  <td colspan="2">Gênero: {{ $ordem->genero}}</td>
                </tr>
                <tr>
                   <td>Serviços:</td>
                   <td colspan="3"><ul>
                          @foreach ($ordem->servicos as $servico)                      
                          <li> {{ $servico->servico }}</li>                            
                          @endforeach
                   </ul></td>
                </tr>
                <tr>
                <td>Mensagem: {{ $ordem->mensagem->mensagem}}</td>
                <td>Data OS: {{ date('d/m/Y', strtotime($ordem->dataos)) }}</td>
                <td colspan="2">Hora: {{ $ordem->horarioos }}</td>
                </tr>
                <tr>
                <td>Status: {{ $ordem->status }}</td>
                <td colspan="3">Cobrador: {{ $ordem->cobrador->cobrador }}</td>
                </tr>
                <tr >
                  <td colspan="4">Observação: {{ $ordem->obs}}</td>
                </tr>
                <tr>
                  <td colspan="4">Observação Cobrador: {{ $ordem->obscobrador}}</td>
                </tr>

              </tbody></table>
            </div>
            
            @endforeach
            <!-- teste -->

          </div>

                </tbody>


              </table>

            </div>

        </div>
    </div>

</body>
</html>
