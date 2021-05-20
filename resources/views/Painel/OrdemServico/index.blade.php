@extends ('Painel.Layout.index')

@section('title', 'Painel de Ordens de Serviços')

  @section('content')

  <section class="content">

     <div class="row">

     <div class="col-xs-12">
       <div class="box">

             <div class="box-header with-border">
                  
                  @if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all as $error)
                        <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif

                  @if(session('msg'))
                  <div class="alert alert-success">
                    <p class="msg"> {{ session('msg')}} </p>
                  </div>
                  @endif

               <h3 id="box-header" class="text-center"> Ordens de Serviços <a href="{{ route('Painel.OrdemServico.create') }}" class="btn btn-success">Cadastrar OS</a> </h3>

             </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th> <i class="fa fa-file-text-o" aria-hidden="true"></i> OS </th>
                 <th> <i class="fa fa-user"></i>  Cliente  </th>
                 <th> <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                      <i class="fa fa-male" aria-hidden="true"></i>
                      <i class="fa fa-female" aria-hidden="true"></i>
                     Receptor  </th>

                 <th> <i class="fa fa-tablet" aria-hidden="true"></i>  Celular </th>
                 <th> <i class="fa fa-shopping-bag" aria-hidden="true"></i>  Serviços </th>
                 <th> <i class="fa fa-calendar-check-o" aria-hidden="true"></i>  Data OS </th>
                 <th> <i class="fa fa-clock-o" aria-hidden="true"></i>  Hora OS </th>
                 <th> <i class="fa fa-cog" aria-hidden="true"></i>  Ação </th>

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

                          <td>


                                <button type="button" class="btn btn-info"  data-toggle="modal" onclick="dataformView('{{ $ordem->id }}')" data-target="#view-ordem">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <a class="btn btn-warning" href="{{ route('Painel.OrdemServico.edit', $ordem->id)}}"><i class="fa fa-edit"></i></a>
                                <a href="/ordemservico/{{ $ordem->id }}"   onclick="return confirm('Deseja realmente remover o Funcionário?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>


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

  @includeIf("Painel.Modals.modals")
