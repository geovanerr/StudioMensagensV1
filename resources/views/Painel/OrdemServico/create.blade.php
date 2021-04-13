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
                      <i class="fa fa-id-badge"></i></span>
                        <label>Cliente</label>
                        <select class="form-control select2">
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
                <i class="fa fa-address-card-o"></i></span>
                  <label>Receptor</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Receptor">         

                </div>            
              </div>
      
              <div class="col-xs-2">
              <i class="fa fa-phone"></i></span>
              <label for=""> Telefone:</label> <input type="text" class="form-control" id="phone" name="phone" placeholder="Rua:">
              </div>
                            
              <div class="col-xs-2">
              <i class="fa fa-mobile"></i></span>
              <label for="">  Celular:</label> <input type="text" class="form-control" id="celular" name="celular" placeholder="Nº">
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
                <select class="form-control select2" multiple="multiple" data-placeholder="Selecione os Serviços"
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
      
              <div class="col-md-6">
              <i class="fa fa-file-audio-o"></i></span>
            
              <label>Mensagem</label>
                <br>
                <select class="form-control select2" multiple="multiple" data-placeholder="Selecione a Mensagem"
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
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
              
             
            </div>
            </div>

            <div class="col-md-3">
            <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Horário OS:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
              </div>


              <div class="col-md-3">
              <div class="form-group">
                  <label>Status da OS</label>
                  <select class="form-control">
                    <option> Aberta </option>
                    <option> Realizada </option>
                    <option> Cancelada </option>
                  
                  </select>
                </div>
                </div>

            </div>


            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                  <label>Observação</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>

            </div>


            <div class="col-md-6">
            <div class="form-group">
                  <label>Observação Cobrador</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>

            </div>
            </div>



          
      </div>
   
  </div>


</section>



@endsection

