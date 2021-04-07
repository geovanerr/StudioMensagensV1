@extends ('Painel.Layout.index')


@section('title', 'Cadastro OS')

@section('content')

  <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Dados do Cliente</h3>
                <div class="box-tools pull-right">
                  
                </div>
              </div>
        
          <div class="box-body">
            <div class="row">

            
                    <div class="col-md-1">
                      <div class="form-group">
                        <label>ID</label>
                        <select class="form-control select2" disabled="disabled" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        </select>
                      </div>            
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Cliente</label>
                        <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        </select>
                      </div>            
                    </div>
            
                          
                </div>
            </div>
         
        </div>
      
    </section>

    <section class="content">

<!-- SELECT2 EXAMPLE -->
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
                  <label>Receptor</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Receptor">         

                </div>            
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

              <div class="col-xs-2">
              <i class="fa fa-phone"></i></span>
              <label for=""> Telefone:</label> <input type="text" class="form-control" id="phone" name="phone" placeholder="Rua:">
              </div>
                            
              <div class="col-xs-2">
              <i class="fa fa-mobile"></i></span>
              <label for="">  Celular:</label> <input type="text" class="form-control" id="celular" name="celular" placeholder="Nº">
              </div>   

              <div class="col-md-6">
              <div class="form-group">
                <label>Multiple</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
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



          </div>
      </div>
   
  </div>

</section>




@endsection
