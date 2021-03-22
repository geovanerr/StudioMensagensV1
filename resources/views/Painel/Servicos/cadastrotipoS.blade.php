@extends ('Painel.Layout.index')


@section('title', 'Cadastro Cliente')

@section('content')

<br>
<br>

<div class="box box-info">
  <div class="container">
    
    
            <div class="box-header with-border">
              <h3 class="text-center"> <a><b> Cadastro </b> Serviço</a> </h3>
            </div>

            
            <div class="box-body">
                   

                    
                        <div class="row">                          
                              <div class="col-xs-8">                       
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                                <div><input type="text" class="form-control" placeholder="Nome do Servico: exemplo Mensagem ao Vivo"> </div>
                              </div>
                              </div>

                              <div class="col-xs-2">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <div><input type="number" class="form-control" id="valor" name ="valor" placeholder="Valor" step="0.01" min="0"> </div>
                                                       
                              </div>
                              </div>                      
                        </div> <br>


                        
                    
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


