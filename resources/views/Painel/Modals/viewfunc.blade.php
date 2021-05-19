<!-- Modal view viewOrdemServico-->
<div class="modal fade" id="view-func" style="z-index: 10000" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="view-func">Funcionário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


<div class="modal-body" id="view-func">


<form name="formViewfunc">

@csrf
<input type="hidden" name="routeType" value="web">
<input type="hidden" name="id" value="">

<div class="row">

                          <div class="col-xs-6">
                          <div class="form-group">
                          Nome: <input type="text" id="name" name="name" class="form-control" placeholder="Nome" disabled>
                          </div>
                          </div>


                          <div class="col-xs-6">
                          <div class="form-group">
                          CPF: <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF" disabled>
                          </div>
                          </div>

                          <div class="col-xs-6">
                          <div class="form-group">
                          e-mail: <input type="text" name="email" class="form-control" placeholder="email" disabled>
                          </div>
                          </div>

                          <div class="col-xs-6">
                          <div class="form-group">
                          Endereço: <input type="text" name="logradouro" class="form-control" placeholder="Rua..." disabled>
                          </div>
                          </div>

                          <div class="col-xs-3">
                          <div class="form-group">
                          Número: <input type="text" name="numero" class="form-control" placeholder="N°" disabled>
                          </div>
                          </div>


                          <div class="col-xs-3">
                          Bairro:
                          <input type="text" id="bairro" class="form-control" placeholder="Bairro..." disabled>

                          </div>



                          <div class="col-xs-6">
                          <div class="form-group">
                          Senha: <input type="password" name="password" class="form-control" placeholder="Senha" disabled>
                          </div>
                          </div>

                          <div class="col-xs-3">
                          <div class="form-group">
                          Telefone: <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefone" disabled>
                          </div>
                          </div>

                          <div class="col-xs-3">
                          <div class="form-group">
                          Celular: <input type="text" id="celular" name="celular" class="form-control" placeholder="Celular:" disabled>
                          </div>
                          </div>

                          <div class="col-xs-4">
                          <div class="form-group">
                          Nascimento: <input type="text" name="nascimento" class="form-control pull-right" disabled>
                          </div>
                          </div>
</div>

<div class="row">


                          <div class="col-xs-3">
                          <div class="form-group">
                          Gênero:
                          <input type="text" name="genero" class="form-control pull-right" disabled>

                          </div>
                          </div>


                          <div class="col-xs-3">
                          <div class="form-group">
                          Função:
                          <input type="text" name="funcao" class="form-control pull-right" disabled>

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
