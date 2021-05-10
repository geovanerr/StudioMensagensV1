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
        
               <h3 id="box-title" class="text-center"> Tipos de Serviços <a href="{{ route('Painel.Servicos.cadastrotipoS') }}" class="btn btn-success"><i class="fa fa-plus"></i></a> </h3>
               
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
                        
                          
                         
                     
                          <a href="/servicos/edit/{{ $servico->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>

                          <a href="/servicos/{{ $servico->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                             
                            
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

