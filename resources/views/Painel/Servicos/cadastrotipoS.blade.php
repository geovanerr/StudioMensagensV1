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

            
            <form action="/servicos" method="POST">
            @csrf
            <div class="box-body">
                   

                    
                        <div class="row">           
                        <div class="col-xs-3">
                        </div>               
                              <div class="col-xs-4">                       
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                                <div><input type="text" class="form-control" id="servico" name="servico" placeholder="Nome do Servico: Mensagem ao Vivo"> </div>
                              </div>
                              </div>

                              <div class="col-xs-2">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <div><input type="number" class="form-control" id="preco" name ="preco" placeholder="preco" step="0.01" min="0"> </div>
                                                       
                              </div>
                              </div>                      
                        </div> <br>


                        
                    
                            <div class="box-footer with-footer">
                              <h3 class="text-center">                               
                              <input type="submit" class="btn btn-success" value="Cadastrar" >
                              <button type="submit" class="btn btn-danger">Cancelar</button>
                            </h3>
                            </div>       

            
            </div>
            </form>
            
   
      

  
  
  </div>
</div>



@endsection


