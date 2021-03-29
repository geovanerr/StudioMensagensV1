<header class="main-header">
    <!-- Logo -->
    <a href=" {{ route('Painel.index') }} " class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ST</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Studio</b> Mensagens</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('AdminLTE/dist/img/usuario.png') }}" class="user-image" alt="User Image"-->
              <span class="hidden-xs">  Usuario </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('AdminLTE/dist/img/usuario.png') }}" class="img-circle" alt="User Image"-->

                <p>
                  
                  <small> Usuário há:  }}</small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-primary btn-flat"> Perfil </a>
                </div>
                <!--div class="pull-right">
                  <a href="#" class="btn btn-danger btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Sair </a>
                 </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @carf
                </form-->

                <div class="pull-right">
                                <a href="{{ route('logout') }}" class="btn btn-danger btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>