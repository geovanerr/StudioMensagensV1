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
                      <span class="info-box-icon"><i class="fa fa-birthday-cake" aria-hidden="true"></i>
                      </span>

                      <div class="info-box-content">
                        <span class="info-box-text">Funcionários</span>
                        <span class="info-box-number">{{ $funcionarios->count() }} </span>

                        <div class="progress">
                          <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>

                      </div>
                    </div>
            </div>



           <div class="box-body">
                                        <form action=" {{ route('Relatorios.dataNiverFuncionarios')}}" method="GET">
                                          <div class="row align-items-end">
                                                <div class="col-xs-12 col-sm-2">
                                                <label>Status</label>
                                                <select id="mes" name="mes" class="form-control">
                                                    <option selected disabled> Informe o Mês </option>
                                                    <option value="01"> Janeiro </option>
                                                    <option value="02"> Fevereiro </option>
                                                    <option value="03"> Março </option>
                                                    <option value="04"> Abril </option>
                                                    <option value="05"> Maio </option>
                                                    <option value="06"> Junho </option>
                                                    <option value="07"> Julho </option>
                                                    <option value="08"> Agosto </option>
                                                    <option value="09"> Setembro </option>
                                                    <option value="10"> Outubro </option>
                                                    <option value="11"> Novembro </option>
                                                    <option value="12"> Dezembro </option>
                                                </select>
                                              </div>
                                            <div class="col-xs-12 col-sm-2">
                                            <label for="">Gerar Relatório</label><br>
                                              <button type="date" class="btn bg-gray"> <i class="fa fa-print"></i> Imprimir</button>
                                            </div>
                                          </div>
                                         </form>


           </div>

         </div>

     </div>


<!-- ---------------------------->
     <div class="row">

        <div class="col-xs-12">
          <div class="box">

                <div class="box-header with-border">


                     <div class="col-md-3 col-sm-6 col-xs-12">
                       <div class="info-box btn-info">
                         <span class="info-box-icon"><i class="fa fa-birthday-cake" aria-hidden="true"></i>
                         </span>

                         <div class="info-box-content">
                           <span class="info-box-text">Clientes</span>
                           <span class="info-box-number">{{ $clientes->count() }} </span>

                           <div class="progress">
                             <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <i class="fa fa-calendar-check-o" aria-hidden="true"></i>

                         </div>
                       </div>
               </div>



              <div class="box-body">
                                           <form action=" {{ route('Relatorios.dataNiverClientes')}}" method="GET">
                                             <div class="row align-items-end">

                                               <div class="col-xs-12 col-sm-2">
                                                   <label>Status</label>
                                                   <select id="mes" name="mes" class="form-control">
                                                    <option selected disabled> Informe o Mês </option>
                                                    <option value="01"> Janeiro </option>
                                                    <option value="02"> Fevereiro </option>
                                                    <option value="03"> Março </option>
                                                    <option value="04"> Abril </option>
                                                    <option value="05"> Maio </option>
                                                    <option value="06"> Junho </option>
                                                    <option value="07"> Julho </option>
                                                    <option value="08"> Agosto </option>
                                                    <option value="09"> Setembro </option>
                                                    <option value="10"> Outubro </option>
                                                    <option value="11"> Novembro </option>
                                                    <option value="12"> Dezembro </option>
                                                    </select>
                                                 </div>
                                               <div class="col-xs-12 col-sm-2">
                                               <label for="">Gerar Relatório</label><br>
                                                 <button type="date" class="btn bg-gray"> <i class="fa fa-print"></i> Imprimir</button>
                                               </div>
                                             </div>
                                            </form>


              </div>

            </div>

        </div>

   </section>




  @endsection





