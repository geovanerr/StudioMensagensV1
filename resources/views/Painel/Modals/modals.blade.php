<!-- Modal view viewOrdemServico-->
<div class="modal fade" id="view-ordem" style="z-index: 10000" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="view-ordem">Ordem de Serviço</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body" id="change_datail">


<form name="formViewOS">

@csrf
<input type="hidden" name="routeType" value="web">
<input type="hidden" name="id" value="">

<section class="content">


            <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Dados do Cliente</h3>
              <div class="box-tools pull-right">

              </div>
            </div>

        <div class="box-body">

        <div class="row">
              <div class="col-md-6">
              <div class="form-group">
              <i class="fa fa-address-card-o"></i></span>
                <label>Cliente: </label>
                <input type="text" class="form-control modalos" id="cliente_id" name="cliente_id" disabled>

              </div>
              </div>

              <div class="col-md-6">
              <i class="fa fa-file-audio-o"></i></span>
              <label>VALOR OS</label>
                <br>
                <input type="text" class="form-control modalos" name="servicototal" disabled>
              </div>

              </div>
      </div>

<div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Dados do Serviço</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>

  <div class="box-body">
    <div class="row">
            <div class="col-md-4">

              <div class="form-group">
              <i class="fa fa-address-card-o"></i></span>
                <label >Receptor</label>

                <input type="text" class="form-control modalos" id="receptor" name="receptor" disabled>

              </div>
            </div>

            <div class="col-xs-3">
            <i class="fa fa-phone"></i></span>
            <label for=""> Telefone:</label> <input type="text" class="form-control modalos" id="phone" name="phone" placeholder="Telefone:" disabled>
            </div>

            <div class="col-xs-3">
            <i class="fa fa-mobile"></i></span>
            <label for="">  Celular:</label> <input type="text" class="form-control modalos" id="celular" name="celular" placeholder="celular" disabled>
            </div>

            <div class="col-md-2">
            <i class="fa fa-female"></i>
            <i class="fa fa-male"></i>
                 <label for=""> Gênero:</label>
                 <input type="text" class="form-control modalos" name="genero" disabled>

            </div>

        </div>


        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <i class="fa fa-shopping-bag"></i>
              <label>Serviços</label>
              <br>
              <input type="text" class="form-control modalos" name="servicos" disabled>

              </div>
            </div>

            <div class="col-md-6">
            <i class="fa fa-file-audio-o"></i></span>
            <label>Mensagem</label>
              <br>
              <input type="text" class="form-control modalos" name="mensagem_id" disabled>
            </div>

        </div>


        <div class="row">

        <div class="col-md-3">
        <div class="form-group">
              <label>Data da OS:</label>
              <div class="input-group date">
                <input type="text" class="form-control pull-right modalos" name="dataos" id="dataos" disabled>
              </div>


          </div>
          </div>

          <div class="col-md-3">
          <div class="bootstrap-timepicker">
              <div class="form-group">
                <label>Horário OS:</label>

                <div class="input-group">
                  <input type="text" class="form-control modalos" name="horarioos" id="horarioos" disabled>

                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                </div>
              </div>
            </div>
            </div>


            <div class="col-md-3">
            <div class="form-group">
                <label>Status da OS</label>
                <input type="text" class="form-control modalos" name="status" id="status" disabled>

              </div>
              </div>

              <div class="col-md-3">
              <i class="fa fa-money"></i></span>
              <label>Cobrador</label>
              <br>
              <input type="text" class="form-control modalos" name="cobrador_id" disabled>
              </div>

          </div>


          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
                <label>Observação</label>
                <textarea name="obs" class="form-control modalos" id="obs" rows="3" placeholder="Enter ..." disabled></textarea>
              </div>

          </div>


          <div class="col-md-6">
          <div class="form-group">
                <label>Observação Cobrador</label>
                <textarea name="obs" class="form-control modalos" id="obs2" rows="3" placeholder="Enter ..." disabled></textarea>
              </div>

          </div>
          </div>


    </div>

</div>


</section>

</form>



        </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
