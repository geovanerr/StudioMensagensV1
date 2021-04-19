@extends ('Painel.Layout.index')

@section('title', 'Painel de Serviços')

  @section('content')

  <section class="content">
     
      <div class="row">
        <div class="col-lg-3 col-xs-6">
         
          <div class="small-box bg-aqua">
            <div class="inner">

            @inject('clientes', 'App\Models\Cliente')
            
              <h3> {{ $clientes->count() }} </h3>

              <p>Clientes</p>
              </div>
              <div class="icon">
              <i class="fa fa-users"></i>
              </div>
            <a href="{{ route('Painel.Usuarios.listaclientes') }}" class="small-box-footer"> Gerênciar Clientes <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
         
         <div class="small-box bg-maroon">
           <div class="inner">

           @inject('servicos', 'App\Models\Servico')
           
             <h3> {{ $servicos->count() }} </h3>

             <p>Serviços</p>
             </div>
             <div class="icon">
             <i class="fa fa-handshake-o"></i>
             </div>
           <a href="{{ route('Painel.Servicos.tipoServicos') }}" class="small-box-footer"> Ver Serviços <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
    
        <div class="col-lg-3 col-xs-6">
         
          <div class="small-box bg-red">
            <div class="inner">

            @inject('ordens', 'App\Models\OrdemServico')
            
              <h3> {{ $ordens->count() }} </h3>
          

              <p>OS Abertas</p>
              </div>
              <div class="icon">
              <i class="fa fa-folder-open-o"></i>
              </div>
            <a href="{{ route('Painel.OrdemServico.index') }}" class="small-box-footer"> Gerênciar OS <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
         
         <div class="small-box bg-green">
           <div class="inner">

           @inject('ordens', 'App\Models\OrdemServico')
           
             <h3> {{ $ordens->count() }} </h3>

             <p>OS Concluídas</p>
             </div>
             <div class="icon">
             <i class="fa fa-envelope-o"></i>
             </div>
           <a href="{{ route('Painel.OrdemServico.index') }}" class="small-box-footer"> Ver OS Concluídas <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>


      </div>

      

    </section>



  @endsection


