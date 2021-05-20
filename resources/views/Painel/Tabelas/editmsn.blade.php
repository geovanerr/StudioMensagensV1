@extends ('Painel.Layout.index')


@section('title', 'Editando: ')

@section('content')

<br>
<br>

<div class="box box-info">
  <div class="container">
    
    
            <div class="box-header with-border">
              <h3 class="text-center"> <a><b> Editando </b>Mensagem</a> </h3>
            </div>
   
            
            <form action="/painel/tabelas/mensagem/update/{{ $mensagem->id }}" method="POST">
            @csrf
            @method ('PUT')
            <div class="box-body">
                                         
                        <div class="row">
                        <div class="col-xs-4">
                        </div>
                              <div class="col-xs-4">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </span>
                                <div><input type="text" class="form-control" id="mensagem" name="mensagem" placeholder="Digite a mensagem..." value="{{ $mensagem->mensagem }}"> </div>
                              </div>
                              </div>

                        </div> <br>

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

