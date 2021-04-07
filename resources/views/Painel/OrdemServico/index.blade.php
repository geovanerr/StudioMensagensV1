@extends ('Painel.Layout.index')

@section('title', 'Painel de Ordens de Serviços')

  @section('content')

  <section class="content">

     
     
     <div class="row">
       
     <div class="col-xs-12"> 
       <div class="box">

             <div class="box-header with-border">
                  @if(session('msg'))
                    <p class="msg"> {{ session('msg')}} </p>
                  @endif
        
               <h3 id="box-title" class="text-center"> Ordens de Serviços <a href="{{ route('Painel.OrdemServico.create') }}" class="btn btn-success"><i class="fa fa-plus"></i></a> </h3>
               
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
             
               
            
             </table>
           </div>
          
         </div>
         </div>
  
     </div>

   </section>


  @endsection

