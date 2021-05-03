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

               <h3 id="box-title" class="text-center"> Mensagens <a href="{{ route('Painel.Tabelas.createmsn') }}" class="btn btn-success">Cadastrar Mensagem</a> </h3>

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
                         <a href="/painel/tabelas/mensagem/edit/{{ $mensagem->id }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar </a>

                          <form action="/painel/tabelas/mensagem/{{ $mensagem->id }}" onclick="return confirm('Deseja realmente remover a mensagem?')"  method="POST">
                                @csrf
                                @method('DELETE')
                               <button type="submit" display="inline-block" class="btn btn-danger"> <i class="fa fa-trash"></i> Excluir </button>
                          </form>





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

