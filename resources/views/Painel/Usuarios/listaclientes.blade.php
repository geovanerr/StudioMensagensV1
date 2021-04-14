@extends ('Painel.Layout.index')

@section('title', 'Painel de Usuários')

  @section('content')

  <section class="content">

     
     
     <div class="row">
       
     <div class="col-xs-12"> 
       <div class="box">

             <div class="box-header with-border">
                  @if(session('msg'))
                    <p class="msg"> {{ session('msg')}} </p>
                  @endif
        
               <h3 id="box-title" class="text-center"> <b> Clientes </b><a href="{{ route('Painel.Usuarios.viewCliente') }}" class="btn btn-success"><i class="fa fa-plus"></i></a> </h3>
               
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
                           <a class="btn btn-warning"><i class="fa fa-edit"></i></a>
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

