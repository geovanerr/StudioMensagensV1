@extends ('Painel.Layout.index')

@section('title', 'Painel de Usuários')

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



               <a class="btn btn-app bg-gray" href="{{ route('PDF.ordens') }}">
                <i class="fa fa-file-pdf-o"></i> Gerar PDF
              </a>

              <a class="btn btn-app bg-teal" href="{{ route('Painel.Usuarios.viewCliente') }}">
                <i class="fa fa-plus"></i> Cadastrar Cliente
              </a>
              <h3 id="box-title" class="text-center"> <b> Clientes </b></h3>
             </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                <th> ID </th>
                <th> <i class="fa fa-address-card-o"></i>  Nome  </th>
                <th> <i class="fa fa-mobile"></i> Celular  </th>
                <th> <i class="fa fa-calendar-check-o"></i> Data Nascimento </th>
                <th> <i class="fa fa-female"></i> <i class="fa fa-male" aria-hidden="true"></i> Genêro  </th>
                <th> <i class="fa fa-cog" aria-hidden="true"></i>  Ação </th>
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



                       <td>

                            <button type="button" class="btn btn-info"  data-toggle="modal" onclick="dataformViewcliente('{{ $cliente->id }}')" data-target="#view-cliente">
                                    <i class="fa fa-eye"></i>
                                </button>
                           <a href="/usuarios/editcliente/{{ $cliente->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>

                           <!--a href="/clientes/{{ $cliente->id }}"   onclick="return confirm('Deseja realmente remover o Cliente: {{$cliente->nome}}?')" class="btn btn-danger"><i class="fa fa-trash"></i></a-->
                           <a href="/clientes/imprimir/{{ $cliente->id }}" class="btn bg-gray" target="_blank"><i class="fa fa-print"></i></a>

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

  @includeIf("Painel.Modals.viewcliente")


