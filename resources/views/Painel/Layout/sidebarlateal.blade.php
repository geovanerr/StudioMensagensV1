<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('AdminLTE/dist/img/usuario.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> {{ $user->name }} </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span> Painel </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('Painel.index') }}"><i class="fa fa-home"></i> Página Principal </a></li>
            <li class="active"><a href="{{ route('Painel.Usuarios.index') }}"><i class="fa fa-user"></i> Usuários </a></li>
            <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-book"></i> Serviços </a></li>
            <!--li><a href="index2.html"><i class="fa fa-circle-o"></i> Painel 2 </a></li-->
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>