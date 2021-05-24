<aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="text-align:center"> Menu </li>


        <li class="treeview">
          <a href="#">
          <li class="active"><a href="/dashboard"><i class="fa fa-tachometer"></i> Painel Principal </a></li>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span> Usuários </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="active"><a href="{{ route('Painel.Usuarios.index') }}"><i class="fa fa-user-o"></i>Funcionários </a></li>
          <li class="active"><a href="{{ route('Painel.Usuarios.listaclientes') }}"><i class="fa fa-user"></i>Clientes </a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-ul" aria-hidden="true"></i><span> Serviços </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-pie-chart"></i> Painel de Serviços</a></li>
            <li class="active"><a href="{{ route('Painel.Servicos.tipoServicos') }}"><i class="fa fa-list-ol" aria-hidden="true"></i> Tipo de Serviços </a></li>

            <li class="active"><a href="{{ route('Painel.OrdemServico.index') }}"><i class="fa fa-file-text-o"></i> Ordem de Serviço </a></li>



          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span> Cobrança </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li class="active"><a href="{{ route('Painel.Servicos.index') }}"><i class="fa fa-money"></i> Cobrança </a></li>

          </ul>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span> Tabelas </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
             <li class="active"><a href="{{ route('Painel.Tabelas.indexbairros') }}"><i class="fa fa-street-view"></i> Bairros </a></li>
             <li class="active"><a href="{{ route('Painel.Tabelas.indexmsn') }}"><i class="fa fa-commenting-o"></i> Mensagens </a></li>
             <li class="active"><a href="{{ route('Painel.Tabelas.indexcobradores') }}"><i class="fa fa-usd"></i> Cobradores </a></li>

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
           <li class="active"><a href="{{ route('PDF.ordens') }}"><i class="fa fa-file-text-o"></i> Ordens Serviços </a></li>
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
