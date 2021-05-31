@extends ('Painel.Layout.index')

@section('title', 'Mensagens')

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

                  <a class="btn btn-app bg-teal" href="{{ route('Painel.Tabelas.createmsn') }}">
                    <i class="fa fa-plus"></i> Cadastrar Mensagem
                  </a>
               <h3 id="box-title" class="text-center">Mensagens</h3>

             </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th> ID </th>
                 <th> <i class="fa fa-handshake-o"></i>  Mensagem  </th>
                 <th> <i class="fa fa-cog" aria-hidden="true"></i>  Ação </th>
               </tr>
               </thead>
               <tbody>
               @foreach ($mensagens as $mensagem)
                   <tr>
                     <td> {{ $mensagem->id }} </td>
                     <td> {{ $mensagem->mensagem }} </td>

                     <td>
                         <a href="/painel/tabelas/mensagem/edit/{{ $mensagem->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                         <!--a href="/painel/tabelas/mensagem/{{ $mensagem->id }}"   onclick="return confirm('Deseja realmente remover a mensagem: {{$mensagem->mensagem}}?')" class="btn btn-danger"><i class="fa fa-trash"></i></a-->

                       </td>
                   </tr>
               @endforeach


             </table>
           </div>

         </div>
         </div>

     </div>

   </section>


  @endsection

