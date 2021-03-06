@extends ('Painel.Layout.index')


@section('title', 'Cadastro Bairro')

@section('content')

@foreach ($errors->all() as $error)
  <ul>
  <li> <strong style="color: red">{{$error}}</strong></li>
  </ul>

@endforeach
<div class="box box-info">
  <div class="container">


            <div class="box-header with-border">
              <h3 class="text-center"> <a><b> Cadastro </b> Bairro</a> </h3>
            </div>


            <form action="{{ route('Painel.Tabelas.storebairro') }}" method="POST">
            @csrf
            <div class="box-body">


                        <div class="row">
                        <div class="col-xs-4">
                        </div>
                              <div class="col-xs-4">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-o" aria-hidden="true"></i> <i class="fa fa-map-marker"></i>
                                </span>
                                <div><input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o nome do Bairro"> </div>
                              </div>
                              </div>

                        </div> <br>

                            <div class="box-footer with-footer">
                              <h3 class="text-center">
                              <input type="submit" class="btn btn-success" value="Cadastrar" >
                              <a href="{{url()->previous()}}" class="btn btn-danger">Cancelar</a>
                            </h3>
                            </div>


            </div>
            </form>






  </div>
</div>



@endsection


