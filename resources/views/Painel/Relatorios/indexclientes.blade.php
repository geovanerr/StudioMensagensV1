@extends ('Painel.Layout.index')

@section('title', 'Painel de Usuários')

  @section('content')

  <section class="content">



     <div class="row">

     <div class="col-xs-12">
       <div class="box">

             <div class="box-header with-border">


                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-primary">
                      <span class="info-box-icon"><i class="fa fa-user"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Clientes</span>
                        <span class="info-box-number">{{ $clientes->count() }} </span>

                        <div class="progress">
                          <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <i class="fa fa-bar-chart" aria-hidden="true"></i><i class="fa fa-line-chart" aria-hidden="true"></i>


                      </div>
                    </div>
            </div>


           <div class="box-body">
                                        <form action=" {{ route('Relatorios.dataCliente')}}" target="_blank" method="GET">
                                          <div class="row align-items-end">
                                            <div class="col-xs-12 col-sm-2">
                                              <label>Data Cadastro Cliente</label>
                                              <input type="date" name="dateinicialreport" class="form-control pull-right">
                                            </div>
                                            <div class="col-xs-12 col-sm-2">
                                              <label>Data Final</label>
                                              <input type="date" name="datefinalreport" class="form-control pull-right">
                                            </div>
                                            <div class="col-xs-12 col-sm-4 mt-2">
                                            <label for="">Gerar Relatório</label><br>
                                              <button type="date" class="btn bg-gray"> <i class="fa fa-print"></i> Imprimir</button>
                                            </div>
                                          </div>
                                         </form>


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

                        <a href="/cliente/historico/{{ $cliente->id }}"  target="_blank" class="btn bg-gray"><i class="fa fa-print"></i></a>

                       </td>
                   </tr>
               @endforeach

               </tbody>


             </table>

           </div>

         </div>

     </div>

   </section>




  @endsection





