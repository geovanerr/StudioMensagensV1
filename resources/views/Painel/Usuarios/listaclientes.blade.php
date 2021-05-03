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
        
               <h3 id="box-title" class="text-center"> <b> Clientes </b><a href="{{ route('Painel.Usuarios.viewCliente') }}" class="btn btn-success">Novo Cliente</a> </h3>
               
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

                           <button type="button" class="btn btn-info" data-toggle="modal" data-target="#osmodal">
                                    <i class="fa fa-eye"></i>
                           </button>
                            
                       </td>
                   </tr>
               @endforeach

                               <!-- Modal -->
<div class="modal fade" id="osmodal" style="z-index: 10000" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="osmodal">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
               </tbody>
               
            
             </table>
           </div>
          
         </div>
         </div>
  
     </div>

   </section>


  @endsection

