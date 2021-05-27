@extends ('Painel.Layout.index')


@section('title', 'Editando: ')

@section('content')

@foreach ($errors->all() as $error)
  <ul>
  <li> <strong style="color: red">{{$error}}</strong></li>
  </ul>

@endforeach
<div class="box box-info">
  <div class="container">


            <div class="box-header with-border">
              <h3 class="text-center"> <a><b> Editando </b> Funcionário</a> </h3>
            </div>



            <form action="/usuarios/updatefunc/{{ $usuario->id }}" method="POST">
            @csrf
            @method ('PUT')
            <div class="box-body">



            <div class="row">

                          <div class="col-xs-6">
                          <div class="form-group">
                          Nome: <input type="text" id="name" name="name" class="form-control" placeholder="Nome" value="{{ $usuario->name}}">
                          </div>
                          </div>


                          <div class="col-xs-6">
                          <div class="form-group">
                          CPF: <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF" value="{{ $usuario->cpf}}" >
                          </div>
                          </div>

                          <div class="col-xs-6">
                          <div class="form-group">
                          e-mail: <input type="text" name="email" class="form-control" placeholder="Nome" value="{{ $usuario->email}}">
                          </div>
                          </div>

                          <div class="col-xs-6">
                          <div class="form-group">
                          Endereço: <input type="text" name="logradouro" class="form-control" placeholder="Rua..." value="{{ $usuario->logradouro}}">
                          </div>
                          </div>

                          <div class="col-xs-3">
                          <div class="form-group">
                          Número: <input type="text" name="numero" class="form-control" placeholder="N°" value="{{ $usuario->numero}}">
                          </div>
                          </div>


                          <div class="col-xs-3">
                          Bairro:
                          <select name="bairro_id" class="form-control select2" data-placeholder="Selecione o Bairro" style="width: 100%;">
                          <option></option>

                          @foreach ($bairros as $bairro)

                          <option value="{{$bairro->id}}" {{($bairro->id === $usuario->bairro_id) ? 'selected' : ''}}> {{$bairro->bairro}} </option>


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
                          Telefone: <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefone" value="{{ $usuario->phone}}">
                          </div>
                          </div>

                          <div class="col-xs-3">
                          <div class="form-group">
                          Celular: <input type="text" id="celular" name="celular" class="form-control" placeholder="Celular:" value="{{ $usuario->celular}}">
                          </div>
                          </div>

                          <div class="col-xs-2">
                          <div class="form-group">

                          <div class="input-group date">
                          Nascimento: <input type="date" name="nascimento" id="nascimento" class="form-control pull-right" value="{{ $usuario->nascimento->format('Y-m-d') }}">
                          </div>

                          </div>
                          </div>

                          <div class="col-xs-2">
                          <div class="form-group">
                          Gênero:
                          <select class="form-control select2" name="genero" id="genero" style="width: 100%;">

                          <option value="Nao Informar" {{($usuario->funcao ==='Nao Informar') ? 'selected' : ''}}> Nao Informar </option>
                          <option value="Feminino" {{($usuario->genero ==='Feminino') ? 'selected' : ''}}> Feminino </option>
                          <option value="Masculino" {{($usuario->genero ==='Masculino') ? 'selected' : ''}}> Masculino </option>

                          </select>
                          </div>
                          </div>


                          <div class="col-xs-2">
                          <div class="form-group">
                          Função:
                          <select class="form-control select2" name="funcao" id="funcao" style="width: 100%;">

                          <option value="Administrador" {{($usuario->funcao ==='Administrador') ? 'selected' : ''}}> Administrador </option>
                          <option value="Gerente" {{($usuario->funcao ==='Gerente') ? 'selected' : ''}}> Gerente </option>
                          <option value="Colaborador" {{($usuario->funcao ==='Colaborador') ? 'selected' : ''}}> Colaborador </option>

                          </select>
                          </div>
                          </div>

        </div>

                            <div class="box-footer with-footer">
                              <h3 class="text-center">
                              <input type="submit" class="btn btn-success" value="Editar" >
                              <button type="submit" class="btn btn-danger">Cancelar</button>
                            </h3>
                            </div>

            </div>
            </form>






  </div>
</div>



@endsection


