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
              <h3 class="text-center"> <a><b> Editando </b>Cobrador</a> </h3>
            </div>


            <form action="/painel/tabelas/cobrador/update/{{ $cobrador->id }}" method="POST">
            @csrf
            @method ('PUT')
            <div class="box-body">

                        <div class="row">
                        <div class="col-xs-3">
                        </div>
                              <div class="col-xs-4">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i><i class="fa fa-usd"></i>
                                </span>
                                <div><input type="text" class="form-control" id="cobrador" name="cobrador" placeholder="Digite a mensagem..." value="{{ $cobrador->cobrador }}"> </div>
                              </div>
                              </div>

                              <div class="col-xs-2">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <div><input type="number" class="form-control" id="preco" name ="preco" placeholder="preco" value="{{$cobrador->preco}}" step="0.01" min="0"> </div>

                              </div>
                              </div>

                        </div> <br>

                            <div class="box-footer with-footer">
                              <h3 class="text-center">
                              <input type="submit" class="btn btn-success" value="Editar" >
                              <a href="{{url()->previous()}}" class="btn btn-danger">Cancelar</a>
                            </h3>
                            </div>


            </div>
            </form>






  </div>
</div>



@endsection


