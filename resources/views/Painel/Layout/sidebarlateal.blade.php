<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('AdminLTE/dist/img/usuario.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>  </p>
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
        <li class="header" style="text-align:center">STUDIO MENSAGENS</li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span> Painel Principal </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
    
            <li class="active"><a href="/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                        
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span> Usuários </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="active"><a href="{{ route('Painel.Usuarios.index') }}"><i class="fa fa-user-o"></i> Gerenciar Usuários </a></li>
            <li class="active"><a href="/register"><i class="fa fa-user-plus"></i>Painel de Funcionários </a></li>
            <li class="active"><a href="{{ route('Painel.Usuarios.listaclientes') }}"><i class="fa fa-user-plus"></i> Painel de Clientes </a></li>
          </ul>
        </li>
        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span> Serviços </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
    
            <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-plus-square"></i> Painel de Serviços</a></li>
            <li class="active"><a href="{{ route('Painel.Servicos.tipoServicos') }}"><i class="fa fa-file-text-o"></i> Tipo de Serviços </a></li>

            <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-file-text-o"></i> Ordem de Serviço </a></li>
       

          
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span> Cobrança </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-money"></i> Cobrança </a></li>
        
          </ul>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-line-chart"></i> <span> Relatórios </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-user"></i> Clientes </a></li>
           <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-book"></i> Serviços </a></li>
           <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-calendar"></i> Aniversariantes </a></li>
        
          </ul>


          <li class="treeview">
          <a href="#">
            <i class="fa fa-floppy-o"></i> <span> Backup </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-book"></i> Cobrança </a></li>
        
          </ul>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i> <span> Sistema </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-info"></i> Sobre </a></li>
        
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>