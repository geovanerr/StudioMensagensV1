@extends ('Painel.Layout.index')

@section('title', 'Painel de Funcionários')

  @section('content')

  <section class="content">
     
      <div class="row">
        <div class="col-xs-12"> 
        <div class="box">

              <div class="box-header">
                  
                  @if(session('err'))
                  <div class="alert alert-danger">
                    <p class="msg"> {{ session('err')}} </p>
                  </div>
                  @endif

                  @if(session('msg'))
                  <div class="alert alert-success">
                    <p class="msg"> {{ session('msg')}} </p>
                  </div>
                  @endif
                <h3 id="box-title" class="text-center"> Funcionários <a href="{{ route('Painel.Usuarios.viewCadastro') }}" class="btn btn-success">Novo Funcionário</a> </h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> ID </th>
                  <th> Nome </th>
                  <th> Data Criação </th>
                  <th> Usuário </th>
                  <th> Ação </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                      <td> {{ $usuario->id }} </td>
                      <td> {{ $usuario->name }} </td>
                      <td> {{ $usuario->email }} </td>
                        <td> 
                            <a class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="javascript:;" class="btn btn-info"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                             
                        </td>
                    </tr>
                @endforeach
                
                </tbody>
               
              </table>
            </div>
           
          </div>
          </div>
   
      </div>
    </section>



  @endsection

