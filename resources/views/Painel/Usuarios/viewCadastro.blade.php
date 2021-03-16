@extends ('Painel.Layout.index')



  @section('content')

  <section class="content">
     
      <div class="row">
        <div class="col-md-6">                
          <div class="box box-warning">
            <div class="box-header with-border"> <h3 class="box-title"> Cadastro de Usuário</h3></div>
             
             
             @if(session('error'))
             <span class="alert alert danger"> {{ session('error')}}  </span>
             @endif
             
              <div class="box-body">
                <form role="form" method="POST" action=" {{ route('Painel.Usuarios.store')}} ">
                  {{ csrf_field() }}

                             
                  <div class="form-group">
                      <label class="control-label label-error">
                      <i class="fa fa-address-card-o"></i> Nome:
                      </label>

                      <input type="text" class="form-control" id="name" placeholder=" Digite o Nome ..." name="name" value="{{old('name')}}" required> 
                      
                  </div>

                  <div class="form-group">
                      <label class="control-label label-error">
                      <i class="fa fa-user"></i> Usuário:
                      </label>

                      <input type="email" class="form-control" id="email" placeholder=" Digite o usuário ..." name="email" value="{{old('email')}}" required> 
                      
                  </div>
                  
                  <div class="form-group">
                      <label class="control-label label-error">
                      <i class="fa fa-lock"></i> Senha:
                      </label>

                      <input type="password" class="form-control" id="password" placeholder=" Digite a senha ..." name="password" required> 
                      
                  </div>

                 
                    <div class="form-group">
                        <label for=""> Função: </label>
                          <select class="form-control" required>
                              <option> Administrador </option>
                              <option> Gerente </option>
                              <option> Cobrador </option>
                              <option> Colaborador </option>
                                                    
                           </select>                                                                
                      </div>

                      <div class="box-footer">
                            <button type="submit" class="btn btn-primary"> Cadastrar </button>
                            <a href=" {{ route('Painel.index')}}" class="btn btn-danger pull-right"> Cancelar </a>

                      
                      
                      </div>
                      

              </form>



            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
      </div>
  

    </section>



  @endsection

