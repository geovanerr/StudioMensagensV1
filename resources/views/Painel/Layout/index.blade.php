<!DOCTYPE html>
<html>
  @includeIf('Painel.Layout.head')

  <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">

      @includeIf('Painel.Layout.header')
        
      @includeIf('Painel.Layout.sidebarlateal')

          <div class="content-wrapper">

          <section class="content-header">
              <h1>
              Painel de Controle

              @if(isset($urlAtual))
                <small> {{ $urlAtual }}</small>
                @else
                <small> Página Principal </small>

              @endif

              </h1>
              <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Inicio </a></li>

              @if(isset($urlAtual))
                
                <li class="active"> {{ $urlAtual }} </li>
                @else
                <li class="active">Página Principal</li>

              @endif
              
              </ol>
          </section>
            
          @yield('content')

          </div>
      @includeIf('Painel.Layout.footer')

        
      </div>

  @includeIf('Painel.Layout.javascript')
  </body>
</html>
