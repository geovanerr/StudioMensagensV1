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

            <form action="/clientes" method="POST"> 
            @csrf 
            <div class="box-body">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">         
                    </div><br>
                    
                                       
                        <div class="row">
                          <div class="col-xs-8">
                           <label for=""> Endereço:</label> <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Rua:">
                          </div>
                        
                          <div class="col-xs-2">
                          <label for=""> Número:</label> <input type="text" class="form-control" id="numero" name="numero" placeholder="Nº">
                          </div>

                          <div class="col-xs-2">
                          <label for=""> Bairro:</label>
                          <select name="bairro_id" class="form-control select2" data-placeholder="Selecione o Bairro" style="width: 100%;">
                          <option> Bairro </option>

                          @foreach ($bairros as $bairro)
                          <option value="{{$bairro->id}}">{{$bairro->bairro}}</option>
                          
                          @endforeach
                      
                          </select>                        
                          </div>
                        </div> <br>

                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                            <div><input type="text" class="form-control" id="referencia" name="referencia" placeholder="Referência"> </div>
                          </div><br>

                    
                          <div class="row">
                              <div class="col-xs-2">
                              <i class="fa fa-phone"></i></span>
                              <label for=""> Telefone:</label> <input type="text" class="form-control" id="phone" name="phone" placeholder="Rua:">
                              </div>
                            
                              <div class="col-xs-2">
                              <i class="fa fa-mobile"></i></span>
                              <label for="">  Celular:</label> <input type="text" class="form-control" id="celular" name="celular" placeholder="Nº">
                              </div>     
                              
                              <div class="col-xs-3">
                              <i class="fa fa-calendar"></i>
                              <label for=""> Data Nascimento:</label> 
                              <input type="date" class="form-control pull-right" id="nascimento" name="nascimento">
                              </div>

                  
                              <div class="col-xs-2">
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

                          <br>
                          <div class="form-group">
                             <i class="fa fa-file-text-o"></i>
                             <label>Observação: </label>
                             <textarea class="form-control" id="obs" name="obs" rows="3" placeholder="Enter ..."></textarea>
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


