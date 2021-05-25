<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Funcionários</title>

    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center mt-4">Relatório de Funcionários</h1>

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> ID </th>
                  <th> Nome </th>
                  <th> e-mail </th>
                  <th> Nascimento </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($funcionarios as $usuario)
                    <tr>
                      <td> {{ $usuario->id }} </td>
                      <td> {{ $usuario->name }} </td>
                      <td> {{ $usuario->email }} </td>
                      <td> {{ $usuario->nascimento }} </td>
                      
                    </tr>

               
                @endforeach

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