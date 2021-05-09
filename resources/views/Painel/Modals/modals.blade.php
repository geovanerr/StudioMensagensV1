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
                <input type="text" class="form-control" id="cliente_id" name="cliente_id">

              </div>
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
                
                <input type="text" class="form-control" id="receptor" name="receptor">

              </div>
            </div>

            <div class="col-xs-3">
            <i class="fa fa-phone"></i></span>
            <label for=""> Telefone:</label> <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone:" value="">
            </div>

            <div class="col-xs-3">
            <i class="fa fa-mobile"></i></span>
            <label for="">  Celular:</label> <input type="text" class="form-control" id="celular" name="celular" placeholder="celular" value="">
            </div>

            <div class="col-md-2">
            <i class="fa fa-female"></i>
            <i class="fa fa-male"></i>
                 <label for=""> Gênero:</label>
                 <input type="text" class="form-control" name="genero">
        
            </div>

        </div>


        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <i class="fa fa-shopping-bag"></i>
              <label>Serviços</label>
              <br>
              <input type="text" class="form-control" name="servicos">

              </div>
            </div>

            <div class="col-md-6">
            <i class="fa fa-file-audio-o"></i></span>

            <label>Mensagem</label>
              <br>
              <input type="text" class="form-control" name="mensagem_id">

          </div>

        </div>


        <div class="row">

        <div class="col-md-3">
        <div class="form-group">
              <label>Data da OS:</label>
              <div class="input-group date">
                <input type="text" class="form-control pull-right" name="dataos" id="dataos">
              </div>


          </div>
          </div>

          <div class="col-md-3">
          <div class="bootstrap-timepicker">
              <div class="form-group">
                <label>Horário OS:</label>

                <div class="input-group">
                  <input type="text" class="form-control" name="horarioos" id="horarioos">

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
                <input type="text" class="form-control" name="status" id="status">

              </div>
              </div>

          </div>


          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
                <label>Observação</label>
                <textarea name="obs" class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>

          </div>


          <div class="col-md-6">
          <div class="form-group">
                <label>Observação Cobrador</label>
                <input type="text" class="form-control" name="obscobrador">

              </div>

          </div>
          </div>


    </div>

</div>


</section>

</form>



        </div>
     
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>