@extends ('Painel.Layout.index')

@section('title', 'Painel de Usuários')

  @section('content')

  <section class="content">
     
      <div class="row">
        
        <!--div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Tabela de Usuários </h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Data Criação</th>
                  <th>Usuario</th>
                  <th>Ação</th>
                </tr>

                @foreach ($usuarios as $usuario)
                    <tr>
                      <td> {{ $usuario->id }} </td>
                      <td> {{ $usuario->name }} </td>
                      <td> {{ $usuario->created_at->diffForHumans() }} </td>
                      <td> {{ $usuario->email }} </td>
                        <td> 
                            <a class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                             
                        </td>
                    </tr>
                @endforeach
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Data Criação</th>
                  <th>Usuario</th>
                  <th>Ação</th>
                </tr>
                
              </table>
            </div>
           
          </div>
          
        </div-->        

        <div class="col-xs-12"> 
        <div class="box">

              <div class="box-header">
                <h3 class="box-title"> Usuários </h3>

                <p> Novo Usuário <a href="{{ route('Painel.Usuarios.viewCadastro') }}" class="btn btn-success"><i class="fa fa-plus"></i></a> @if(session('success'))| <span class="alert alert-success"> {{ session('success')}} @endif</span> </p>
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
                      <td> {{ $usuario->created_at->diffForHumans() }} </td>
                      <td> {{ $usuario->email }} </td>
                        <td> 
                            <a class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                             
                        </td>
                    </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th> ID </th>
                  <th> Nome </th>
                  <th> Data Criação </th>
                  <th> Usuário </th>
                  <th> Ação </th>
                </tr>
                </tfoot>
              </table>
            </div>
           
          </div>
          </div>
   
      </div>
    </section>



  @endsection

