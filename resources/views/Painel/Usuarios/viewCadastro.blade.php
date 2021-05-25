@extends ('Painel.Layout.index')

@section('title', 'Cadastro Funcionário')

@section('content')


            <div class="col-xs-12">
              <h3 class="text-center"> <a>Cadastro <b>Funcionário</b></a> </h3>
            </div>


      <div class="container">
      <div class="col-xs-12">
      <form action="{{ route('Painel.Usuarios.storefunc') }}" method="post">
      @csrf
      <div class="row">
                          
                    <div class="col-xs-6">
                    <div class="form-group">
                    Nome: <input type="text" id="name" name="name" class="form-control" placeholder="Nome">
                    </div>
                    </div>
                    

                    <div class="col-xs-6">
                    <div class="form-group">
                    CPF: <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF">
                    </div>
                    </div>

                    <div class="col-xs-6">
                    <div class="form-group">
                    e-mail: <input type="text" name="email" class="form-control" placeholder="Nome">
                    </div>
                    </div>

                    <div class="col-xs-6">
                    <div class="form-group">
                    Endereço: <input type="text" name="logradouro" class="form-control" placeholder="Rua...">
                    </div>
                    </div>

                    <div class="col-xs-3">
                    <div class="form-group">
                    Número: <input type="text" name="numero" class="form-control" placeholder="N°">
                    </div>
                    </div>

  
                    <div class="col-xs-3">
                    Bairro:
                    <select name="bairro_id" class="form-control select2" data-placeholder="Selecione o Bairro" style="width: 100%;">
                    <option> Bairro </option>

                    @foreach ($bairros as $bairro)
                    <option value="{{$bairro->id}}">{{$bairro->bairro}}</option>
                          
                    @endforeach
                      
                    </select>                        
                    </div>
                   

           
                    <div class="col-xs-6">
                    <div class="form-group">
                    Senha: <input type="password" name="password" class="form-control" placeholder="Senha">
                    </div>
                    </div>
                             
                    <div class="col-xs-3">
                    <div class="form-group">
                    Telefone: <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefone">
                    </div>
                    </div>
                            
                    <div class="col-xs-3">
                    <div class="form-group">
                    Celular: <input type="text" id="celular" name="celular" class="form-control" placeholder="Celular:">
                    </div>
                    </div>     
                              
                    <div class="col-xs-2">
                    <div class="form-group">
                    Nascimento: <input type="date" name="nascimento" class="form-control pull-right">
                    </div>
                    </div>

                    <div class="col-xs-2">
                    <div class="form-group">
                    Gênero:
                    <select class="form-control select2" name="genero" style="width: 100%;">
                       <option selected="selected" value="Nao Informar">Nao Informar</option>
                       <option value="Femino">Feminino</option>
                       <option value="Masculino">Masculino</option>
                            
                    </select>                          
                    </div>
                    </div>


                    <div class="col-xs-2">
                    <div class="form-group">
                    Função:
                    <select class="form-control select2" name="funcao" style="width: 100%;">
                       <option selected="selected" value="Administrador"> Administrador </option>
                       <option value="Gerente">Gerente</option>
                       <option value="Colaborador">Colaborador</option>
                    </select>                          
                    </div>
                    </div>

  </div>                      
                    <div class="col-xs-12">
                    <div class="form-group">
                    <h3 class="text-center">                               
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <button type="submit" class="btn btn-danger">Cancelar</button>
                    </h3>
                    </div>   
                    </div>   

                        

            
            </div>
          


</form>  
            
</div>
</div>

@endsection


