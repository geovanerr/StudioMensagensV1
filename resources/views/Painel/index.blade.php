@extends ('Painel.Layout.index')

@section('title', 'Painel Principal')

  @section('content')

  <section class="content">
     
      <div class="row">
        <div class="col-lg-3 col-xs-6">
         
          <div class="small-box bg-teal">
            <div class="inner">

            @inject('usuarios', 'App\Models\User')
            
              <h3> {{ $usuarios->count() }} </h3>

              <p>Usuários</p>
              </div>
              <div class="icon">
              <i class="fa fa-users"></i>
              </div>
            <a href="{{ route('Painel.Usuarios.index') }}" class="small-box-footer"> Gerênciar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
  

    </section>



  @endsection

