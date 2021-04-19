@extends ('Painel.Layout.index')


@section('title', 'Cadastro OS')

@section('content')


            <div class="box-header with-border">
              <h3 class="text-center"> <a> Cadastro <b> OS</b></a> </h3>
            </div>

<form action="{{ route('Painel.OrdemServico.store') }}" method="post">
  @csrf

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
                      <i class="fa fa-id-badge"></i></span>
                        <label>Cliente</label>
                        <select name="cliente" class="form-control select2">
                        <option> Selecione um Cliente </option>

                        @foreach ($clientes as $cliente)

                        <option value="{{$cliente->id}}"> {{$cliente->nome}} </option>

                        @endforeach                        
                        </select>
                      </div>            
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
                  <label>Receptor</label>
                  <input type="text" class="form-control" id="receptor" name="receptor" placeholder="Nome Receptor">         

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
                <select name="servicos[]" class="form-control select2" multiple="multiple" data-placeholder="Selecione os Serviços"
                style="width: 100%;">
                @foreach ($servicos as $servico)
                  <option value="{{$servico->id}}">{{$servico->servico}}</option>
                @endforeach

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
                  <input type="date" class="form-control pull-right" name="dataos" id="dataos">
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
                  <textarea name="obscobrador" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>

            </div>
            </div>


                              <div class="box-footer with-footer">
                              <h3 class="text-center">                               
                              <button type="submit" class="btn btn-success">Cadastrar</button>
                              
                              <button type="submit" class="btn btn-danger">Cancelar</button>
                            </h3>
                            </div>  



          
      </div>
   
  </div>


</section>

</form>

@endsection

