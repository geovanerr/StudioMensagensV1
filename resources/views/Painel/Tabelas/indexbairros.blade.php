@extends ('Painel.Layout.index')

@section('title', 'Bairros')

  @section('content')

  <section class="content">



     <div class="row">

     <div class="col-xs-12">
       <div class="box">

             <div class="box-header with-border">
                  @if(session('msg'))
                    <p class="msg"> {{ session('msg')}} </p>
                  @endif

               <h3 id="box-title" class="text-center"> Bairros <a href="{{ route('Painel.Tabelas.createbairro') }}" class="btn btn-success">Cadastrar Bairro</a> </h3>

             </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th> ID </th>
                 <th> <i class="fa fa-handshake-o"></i>  Serviço  </th>
                 <th> <i class="fa fa-money"></i> Preço  </th>

                 <th> <i class="fa fa-cog" aria-hidden="true"></i>  Ação </th>
               </tr>
               </thead>
               <tbody>
               @foreach ($servicos as $servico)
                   <tr>
                     <td> {{ $servico->id }} </td>
                     <td> {{ $servico->servico }} </td>
                     <td> {{ $servico->preco }} </td>


                       <td>




                          <a href="/servicos/edit/{{ $servico->id }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar </a>

                          <form action="/servicos/{{ $servico->id }}"  method="POST">

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

