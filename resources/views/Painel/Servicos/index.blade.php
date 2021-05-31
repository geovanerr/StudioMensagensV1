@extends ('Painel.Layout.index')

@section('title', 'Painel de Serviços')

  @section('content')

  <section class="content">
     
      <div class="row">
        <div class="col-lg-3 col-xs-6">
         
          <div class="small-box bg-aqua">
            <div class="inner">

            @inject('servicos', 'App\Models\Servico')
            
              <h3> {{ $servicos->count() }} </h3>

              <p>Serviços</p>
              </div>
              <div class="icon">
              <i class="fa fa-handshake-o"></i>
              </div>
            <a href="{{ route('Painel.Servicos.tipoServicos') }}" class="small-box-footer"> Gerênciar Seviços <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    
        <div class="col-lg-3 col-xs-6">
         
          <div class="small-box bg-red">
            <div class="inner">

            @inject('ordens', 'App\Models\OrdemServico')
            
            <h3>  {{ $ordens->where('status', 'Aberta')->count()}}</h3>

              <p> <b> Ordens de Serviços Abertas </b></p>
              </div>
              <div class="icon">
              <i class="fa fa-folder-open-o"></i>
              </div>
            <a href="{{ route('Painel.OrdemServico.indexaberta') }}" class="small-box-footer"> Gerênciar OS <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
         
         <div class="small-box bg-green">
           <div class="inner">

           @inject('ordens', 'App\Models\OrdemServico')
           
           <h3>  {{ $ordens->where('status', 'Realizada')->count()}}</h3>

             <p> <b> Ordens de Serviços Concluídas </b></p>
             </div>
             <div class="icon">
             <i class="fa fa-envelope-o"></i>
             </div>
           <a href="{{ route('Painel.OrdemServico.indexrealizada') }}" class="small-box-footer"> Ver OS Concluídas <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>


       <div class="col-lg-3 col-xs-6">
         
          <div class="small-box bg-yellow">
            <div class="inner">

            
              <h3> <i class="fa fa-file-text-o" aria-hidden="true"></i> </h3>

              <p> <b> Relatórios </b></p>
              </div>
              <div class="icon">
              <i class="fa fa-line-chart"></i>
              </div>
            <a href="{{ route('Relatorios.indexordens') }}" class="small-box-footer"> Ver Relatórios <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      

    </section>



  @endsection

