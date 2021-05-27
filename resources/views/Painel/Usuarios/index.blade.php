@extends ('Painel.Layout.index')

@section('title', 'Painel de Funcionários')

  @section('content')

  <section class="content">


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
                  <th> e-mail </th>
                  <th> Nascimento </th>
                  <th> Ação </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                      <td> {{ $usuario->id }} </td>
                      <td> {{ $usuario->name }} </td>
                      <td> {{ $usuario->email }} </td>
                      <td> {{ date('d/m/Y', strtotime($usuario->nascimento)) }} </td>

                        <td>
                        <button type="button" class="btn btn-info"  data-toggle="modal" onclick="dataformViewfunc('{{ $usuario->id }}')" data-target="#view-func">
                                    <i class="fa fa-eye"></i>
                                </button>
                        <a href="/usuarios/editfunc/{{ $usuario->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>

                        <a href="/usuarios/{{ $usuario->id }}"   onclick="return confirm('Deseja realmente remover o Funcionário: {{$usuario->name}}?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>

                        <a href="/usuarios/imprimir/{{ $usuario->id }}" class="btn bg-gray"><i class="fa fa-print"></i></a>

                        </td>
                    </tr>


                @endforeach

                </tbody>


              </table>


              <form action=" {{ route('Relatorios.Funcionarios')}}" target="_blank" method="GET">
                                          <div class="row align-items-end">
                                            <div class="col-xs-12 col-sm-2">
                                              <label>Data Inicial</label>
                                              <input type="date" name="dateinicialreport" class="form-control pull-right">
                                            </div>
                                            <div class="col-xs-12 col-sm-2">
                                              <label>Data Final</label>
                                              <input type="date" name="datefinalreport" class="form-control pull-right">
                                            </div>
                                            <div class="col-xs-12 col-sm-4 mt-2">
                                            <label for="">Gerar Relatório</label><br>
                                              <button type="date" class="btn bg-gray"> <i class="fa fa-print"></i> Imprimir</button>
                                            </div>
                                          </div>
                                         </form>


      </div>

    </section>



  @endsection
  @includeIf("Painel.Modals.viewfunc")
