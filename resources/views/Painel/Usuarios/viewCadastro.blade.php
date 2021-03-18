@extends ('Painel.Layout.index')


@section('title', 'Cadastro Cliente')

@section('content')

<br>
<br>

<div class="box box-info">
  <div class="container">
    
    
            <div class="box-header with-border">
              <h3 class="text-center"> <a><b> Cadastro </b> Funcionário</a> </h3>
            </div>

            
            <div class="box-body">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
                      <input type="text" class="form-control" placeholder="Nome">         
                    </div><br>
                    
                    
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                      <div><input type="text" class="form-control" placeholder="CPF"> </div>
                    </div><br>

                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <div><input type="text" class="form-control" placeholder="Senha"> </div>
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

                               <div class="col-xs-2">
                                <i class="fa fa-female"></i>
                                <i class="fa fa-male"></i>
                                <label for=""> Função:</label>
                                <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected"> Administrador </option>
                                      <option>Gerente</option>
                                      <option>Colaborador</option>
                               
                                    </select>                          
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
</div>



@endsection


