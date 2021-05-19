<!-- Modal view viewOrdemServico-->
<div class="modal fade" id="view-cliente" style="z-index: 10000" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="view-cliente">Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


<div class="modal-body" id="view-cliente">


<form name="formViewcliente">

@csrf
<input type="hidden" name="routeType" value="web">
<input type="hidden" name="id" value="">

<div class="row">
                          <div class="col-xs-7">
                          <div class="form-group">
                          Cliente: <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" disabled>
                          </div>
                          </div>

                          <div class="col-xs-7">
                          <div class="form-group">
                          Endereço: <input type="text" class="form-control" id="nome" name="logradouro" placeholder="Rua..." disabled>
                          </div>
                          </div>

                          <div class="col-xs-2">
                          <div class="form-group">
                          Número: <input type="text" class="form-control" id="numero" name="numero" placeholder="Nº" disabled>
                          </div>
                          </div>

                          <div class="col-xs-3">
                          <div class="form-group">
                          Bairro: <input type="text" class="form-control" id="bairro" placeholder="bairro" disabled>
                          </div>
                          </div>

                          <div class="col-xs-12">
                          <div class="form-group">
                          Referência:
                          <textarea class="form-control" id="referencia" name="referencia" rows="3" placeholder="Enter ..." disabled></textarea>
                          </div>
                          </div>

                          <div class="col-xs-3">
                          <div class="form-group">
                          Telefone: <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" disabled>
                          </div>
                          </div>

                          <div class="col-xs-3">
                          <div class="form-group">
                          Celular: <input type="text" class="form-control" id="celular" name="celular" placeholder="celular" disabled>
                          </div>
                          </div>

                          <div class="col-xs-3">
                          <div class="form-group">
                          Data Nascimento: <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="celular" disabled>
                          </div>
                          </div>

                          <div class="col-xs-3">
                          <div class="form-group">
                          Gênero: <input type="text" class="form-control" id="genero" name="genero" placeholder="celular" disabled>
                          </div>
                          </div>

                          <div class="col-xs-12">
                          <div class="form-group">
                          Observação:
                          <textarea class="form-control" id="obs" rows="3" placeholder="Enter ..." disabled></textarea>
                          </div>
                          </div>


</div>

</form>



        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
