@extends ('Painel.Layout.index')


@section('title', 'Cadastro Funcionário')

@section('content')

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a><b> Cadastro </b> Funcionário</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg"> Informe os dados:</p>

    <form action="../../index.html" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nome ...">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Usuário ...">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Senha ...">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Repita a senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
        <button type="submit" class="btn btn-info btn-block">Cadastrar</button>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-danger btn-block">Cancelar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.form-box -->
</div>


</body>

@endsection


