@extends ('Painel.Layout.index')


@section('title', 'Cadastro Cobrador')

@section('content')

<br>
<br>

<div class="box box-info">
  <div class="container">


            <div class="box-header with-border">
              <h3 class="text-center"> <a>Cadastro <b>Cobrador</b></a> </h3>
            </div>


            <form action="{{ route('Painel.Tabelas.storecobrador') }}" method="POST">
            @csrf
            <div class="box-body">


                        <div class="row">
                        <div class="col-xs-4">
                        </div>
                              <div class="col-xs-4">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i> <i class="fa fa-usd"></i>
                                </span>
                                <div><input type="text" class="form-control" id="cobrador" name="cobrador" placeholder="Informe o nome do cobrador..."> </div>
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


