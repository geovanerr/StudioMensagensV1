<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Funcionário</title>

    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
            <img src="{{ asset('template/stmlogo2.jpg') }}" alt="" height="100" width="150">  

                <table id="example1" class="table table-bordered">
                <thead>
                <div class="box-header text-center">
                <h3 class="box-title">Dados do Funcionário</h3>
                </div>
                </thead>
                
                <tbody>
              
                <div class="box">
         
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                <tr>
                <td colspan="4" align="center"><b>{{ $user->name}}</b></td>
                </tr>
                <tr>
                  <td>CPF: {{ $user->cpf}}</td>
                  <td>Nascimento: {{ date('d/m/Y', strtotime($user->nascimento)) }}</td>
                  <td>Gênero: {{ $user->genero}}</td>
                  <td>Função: {{ $user->funcao}}</td>                
                </tr>
                <tr>
                  <td>E-mail: {{ $user->email}}</td>
                  <td>Endereço: {{ $user->logradouro}}</td>
                  <td>Número: {{ $user->numero}}</td>
                  <td>Bairro: {{ $user->bairro->bairro}}</td>
                </tr>
                <tr>
                  <td colspan="2">Telefone: {{ $user->phone}}</td>
                  <td colspan="2">Celeular: {{ $user->celular}}</td>
                
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