@extends ('Painel.Layout.index')


@section('title', 'Cadastro Cliente')

@section('content')

<br>
<br>

<div class="box box-info">
  <div class="container">
    
    
            <div class="box-header with-border">
              <h3 class="text-center"> <a><b> Cadastro </b> Cliente</a> </h3>
            </div>

            
            <div class="box-body">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
                      <input type="text" class="form-control" placeholder="Nome">         
                    </div><br>
                    
                    
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-home"></i></span>
                      <div><input type="text" class="form-control" placeholder="Endereço"> </div>
                    </div><br>


                    
                        <div class="row">
                          <div class="col-xs-8">
                           <label for=""> Endereço:</label> <input type="text" class="form-control" placeholder="Rua:">
                          </div>
                        
                          <div class="col-xs-2">
                          <label for=""> Número:</label> <input type="text" class="form-control" placeholder="Nº">
                          </div>

                          <div class="col-xs-2">
                          <label for=""> Bairro:</label>
                          <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Asa Branca</option>
                                <option>Aparecida</option>
                                <option>Buritis</option>
                                <option>Bela Vista</option>
                                <option>Centro</option>
                                <option>Caimbé</option>
                                <option>Caranã</option>
                              </select>                          
                          </div>
                        </div> <br>

                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                            <div><input type="text" class="form-control" placeholder="Referência"> </div>
                          </div><br>

                    
                          <div class="row">
                              <div class="col-xs-2">
                              <i class="fa fa-phone"></i></span>
                              <label for=""> Telefone:</label> <input type="text" class="form-control" placeholder="Rua:">
                              </div>
                            
                              <div class="col-xs-2">
                              <i class="fa fa-mobile"></i></span>
                              <label for="">  Celular:</label> <input type="text" class="form-control" placeholder="Nº">
                              </div>     
                              
                              <div class="col-xs-3">
                              <i class="fa fa-calendar"></i>
                              <label for=""> Data Nascimento:</label> <input type="text" class="form-control pull-right" id="datepicker">
                              </div>

                  
                              <div class="col-xs-2">
                                <i class="fa fa-female"></i>
                                <i class="fa fa-male"></i>
                                <label for=""> Gênero:</label>
                                <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">Nao Informar</option>
                                      <option>Feminino</option>
                                      <option>Masculino</option>
                               
                                    </select>                          
                               </div>
                          </div>

                          <br>
                          <div class="form-group">
                             <i class="fa fa-file-text-o"></i>
                             <label>Observação: </label>
                             <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                          </div>


                          
                            <div class="box-footer with-footer">
                              <h3 class="text-center">                               
                              <button type="submit" class="btn btn-success">Cadastrar</button>
                              <button type="submit" class="btn btn-danger">Cancelar</button>
                            </h3>
                            </div>       

            
            </div>
            
   
      

  
  
  </div>
</div>



@endsection


