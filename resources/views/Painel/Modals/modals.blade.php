<!-- Modal view viewOrdemServico-->
<div class="modal fade" id="view-ordem" style="z-index: 10000" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title" id="view-ordem">Ordem de Serviço</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

     
        <div class="modal-body" id="change_datail">
          
        
<form action="" method="POST">

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
                <input type="text" class="form-control" id="receptor" name="receptor" placeholder="Nome Receptor" value="">

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
            <div class="col-md-6">

              <div class="form-group">
              <i class="fa fa-address-card-o"></i></span>
                <label >Receptor</label>
                <input type="text" class="form-control" id="receptor" name="receptor" placeholder="Nome Receptor" value="" disabled>

              </div>
            </div>

            <div class="col-xs-2">
            <i class="fa fa-phone"></i></span>
            <label for=""> Telefone:</label> <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone:" value="">
            </div>

            <div class="col-xs-2">
            <i class="fa fa-mobile"></i></span>
            <label for="">  Celular:</label> <input type="text" class="form-control" id="celular" name="celular" placeholder="celular" value="">
            </div>

            <div class="col-md-2">
            <i class="fa fa-female"></i>
            <i class="fa fa-male"></i>
                 <label for=""> Gênero:</label>
                 <select class="form-control select2" id="genero" name="genero" style="width: 100%;">
                    <option value="N/I" selected="selected">Nao Informar</option>
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                 </select>
            </div>

        </div>


        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <i class="fa fa-shopping-bag"></i>
              <label>Serviços</label>
              <br>
              <select name="servicos[]" class="form-control select2" multiple="multiple" data-placeholder="Selecione os Serviços"
              style="width: 100%;" >
         

              </select>
              </div>
            </div>

            <div class="col-md-6">
            <i class="fa fa-file-audio-o"></i></span>

            <label>Mensagem</label>
              <br>
              <select name="mensagem" class="form-control select2" multiple="multiple" data-placeholder="Selecione a Mensagem"
                      style="width: 100%;">
                <option>Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
              </select>
          </div>

        </div>


        <div class="row">

        <div class="col-md-3">
        <div class="form-group">
              <label>Data da OS:</label>
              <div class="input-group date">
                <input type="date" class="form-control pull-right" name="dataos" id="dataos" value="">
              </div>


          </div>
          </div>

          <div class="col-md-3">
          <div class="bootstrap-timepicker">
              <div class="form-group">
                <label>Horário OS:</label>

                <div class="input-group">
                  <input type="text" class="form-control timepicker" name="horarioos" id="horarioos">

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
                <select name="status" class="form-control">
                  <option value="Aberta"> Aberta </option>
                  <option value="Realizada"> Realizada </option>
                  <option value="Cancelada"> Cancelada </option>

                </select>
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
                <textarea name="obscobrador" class="form-control" rows="3"></textarea>
              </div>

          </div>
          </div>

                          <div class="box-footer with-footer">
                            <h3 class="text-center">
                            <input type="submit" class="btn btn-success" value="Editar" >
                            <button type="submit" class="btn btn-danger">Cancelar</button>
                          </h3>
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