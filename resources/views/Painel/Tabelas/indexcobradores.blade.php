@extends ('Painel.Layout.index')

@section('title', 'Cobradores')

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
                  
               <h3 id="box-title" class="text-center"> Cobradores <a href="{{ route('Painel.Tabelas.createcobrador') }}" class="btn btn-success">Cadastrar Cobrador</a> </h3>

             </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th> ID </th>
                 <th> <i class="fa fa-user"></i><i class="fa fa-usd"></i>  Cobrador  </th>
                 <th> <i class="fa fa-cog" aria-hidden="true"></i>  Ação </th>
               </tr>
               </thead>
               <tbody>
               @foreach ($cobradores as $cobrador)
                   <tr>
                     <td> {{ $cobrador->id }} </td>
                     <td> {{ $cobrador->cobrador }} </td>
        
                     <td>
                         <a href="/painel/tabelas/cobrador/edit/{{ $cobrador->id }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar </a>

                          <form action="/painel/tabelas/cobrador/{{ $cobrador->id }}" onclick="return confirm('Deseja realmente remover o cobrador?')" method="POST">
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

