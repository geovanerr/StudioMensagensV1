@extends ('Painel.Layout.index')


@section('title', 'Cadastro Mensagem')

@section('content')

<br>
<br>

<div class="box box-info">
  <div class="container">


            <div class="box-header with-border">
              <h3 class="text-center"> <a>Cadastro <b>Mensagem</b></a> </h3>
            </div>


            <form action="{{ route('Painel.Tabelas.storemsn') }}" method="POST">
            @csrf
            <div class="box-body">


                        <div class="row">
                        <div class="col-xs-4">
                        </div>
                              <div class="col-xs-4">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i> 
                                </span>
                                <div><input type="text" class="form-control" id="mensagem" name="mensagem" placeholder="Digite a Mensagem..."> </div>
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


