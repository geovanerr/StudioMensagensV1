@extends ('Painel.Layout.index')

@section('title', 'Painel de Usuários')

  @section('content')

  <br>
  <div class="box box-info">

  <div class="container widith-header" >
    <h1>Criar tipo de serviço</h1>
      <form action="/painel/servicos/tiposServicos" method="post">

        <div class="form-group">
          <label for="title"> Serviço:</label>
          <input type="text" class="form-control" id="servico" name="servico" placeholder="Nome do Serviço ...">

        </div>
        <div class="form-group">
          <label for="title"> Serviço:</label>
          <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor do Serviço ...">

        </div>


    
    
      </form>


      </div>

  </div>


  @endsection

