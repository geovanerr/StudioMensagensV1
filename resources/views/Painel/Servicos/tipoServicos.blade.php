@extends ('Painel.Layout.index')

@section('title', 'Painel de Usuários')

  @section('content')

  <section class="content">
     
     <div class="row">
       
     <div class="col-xs-12"> 
       <div class="box">

             <div class="box-header with-border">
        
               <h3 id="box-title" class="text-center"> Tipos de Serviços <a href="{{ route('Painel.Servicos.cadastrotipoS') }}" class="btn btn-success"><i class="fa fa-plus"></i></a> </h3>
               
             </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th> ID </th>
                 <th> Serviço </th>
                 <th> Data Criação </th>
                 <th> Cadastrado </th>
                 <th> Ação </th>
               </tr>
               </thead>
               <tbody>
               @foreach ($usuarios as $usuario)
                   <tr>
                     <td> {{ $usuario->id }} </td>
                     <td> {{ $usuario->name }} </td>
                     <td> {{ $usuario->created_at->diffForHumans() }} </td>
                     <td> {{ $usuario->email }} </td>
                       <td> 
                           <a class="btn btn-warning"><i class="fa fa-edit"></i></a>
                           <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            
                       </td>
                   </tr>
               @endforeach
               
               </tbody>
               <tfoot>
               <tr>
                 <th> ID </th>
                 <th> Nome </th>
                 <th> Data Criação </th>
                 <th> Usuário </th>
                 <th> Ação </th>
               </tr>
               </tfoot>
             </table>
           </div>
          
         </div>
         </div>
  
     </div>
   </section>


  @endsection

