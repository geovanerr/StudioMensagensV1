@extends ('Painel.Layout.index')

@section('title', 'Relatório de os')

  @section('content')

  <section class="content">



     <div class="row">

     <div class="col-xs-12">
       <div class="box">

             <div class="box-header with-border">


                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-primary">
                      <span class="info-box-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                      </span>

                      <div class="info-box-content">
                        <span class="info-box-text">Ordens de Serviços</span>
                        <span class="info-box-number">{{ $ordens->count() }} </span>

                        <div class="progress">
                          <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <i class="fa fa-bar-chart" aria-hidden="true"></i><i class="fa fa-line-chart" aria-hidden="true"></i>

                      </div>
                    </div>
            </div>


           <div class="box-body">
                                        <form action=" {{ route('Relatorios.dataOS')}}" target="_blank" method="GET">
                                          <div class="row align-items-end">
                                            <div class="col-xs-12 col-sm-2">
                                              <label>Data Cadastro OS</label>
                                              <input type="date" name="dateinicialreport" class="form-control pull-right">
                                            </div>
                                            <div class="col-xs-12 col-sm-2">
                                              <label>Data Final</label>
                                              <input type="date" name="datefinalreport" class="form-control pull-right">
                                            </div>
                                            <div class="col-xs-12 col-sm-2">
                                                <label>Status</label>
                                                <select id="status" name="status" class="form-control">
                                                    <option value="Todas"> Todas </option>
                                                    <option value="Aberta"> Aberta </option>
                                                    <option value="Realizada"> Realizada </option>
                                                    <option value="Cancelada"> Cancelada </option>

                                                </select>
                                              </div>
                                            <div class="col-xs-12 col-sm-2">
                                            <label for="">Gerar Relatório</label><br>
                                              <button type="date" class="btn bg-gray"> <i class="fa fa-print"></i> Imprimir</button>
                                            </div>
                                          </div>
                                         </form>


                                         <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                <tr>
                    <th> <i class="fa fa-file-text-o" aria-hidden="true"></i> OS </th>
                    <th> <i class="fa fa-user"></i>  Cliente  </th>
                    <th> <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                         <i class="fa fa-male" aria-hidden="true"></i>
                         <i class="fa fa-female" aria-hidden="true"></i>
                        Receptor  </th>

                    <th> <i class="fa fa-tablet" aria-hidden="true"></i>  Celular </th>
                    <th> <i class="fa fa-shopping-bag" aria-hidden="true"></i>  Serviços </th>
                    <th> <i class="fa fa-calendar-check-o" aria-hidden="true"></i>  Data OS </th>
                    <th> <i class="fa fa-clock-o" aria-hidden="true"></i>  Hora OS </th>
                    <th> <i class="fa fa-cog" aria-hidden="true"></i>  Ação </th>

                  </tr>
               </thead>
               <tbody>
                @foreach ($ordens as $ordem)
                <tr>
                  <td> {{ $ordem->id }} </td>
                  <td> {{ $ordem->cliente->nome }} </td>
                  <td> {{ $ordem->receptor }} </td>
                  <td> {{ $ordem->celular }} </td>
                  <td>
                     <ul>
                  @foreach ($ordem->servicos as $servico)
                        <li> {{ $servico->servico }}</li>
                  @endforeach
                    </ul>
                  </td>
                  <td> {{ date('d/m/Y', strtotime($ordem->dataos))  }} </td>
                  <td> {{ $ordem->horarioos }} </td>

                  <td>
                      <a href="/ordens/imprimir/{{ $ordem->id }}"  target="_blank" class="btn bg-gray"><i class="fa fa-print"></i> Imprimir</a>
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





