<!DOCTYPE html>
<html>
  @includeIf('Painel.Layout.head')

  <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">

      @includeIf('Painel.Layout.header')
        
      @includeIf('Painel.Layout.sidebarlateal')

          <div class="content-wrapper">

          <section class="content-header">
          </section>
            
          @yield('content')

          </div>
      @includeIf('Painel.Layout.footer')

        
      </div>

  @includeIf('Painel.Layout.javascript')
  </body>
</html>
