@extends ('Painel.Layout.index')


@section('title', 'Edit OS')

@section('content')
@foreach ($errors->all() as $error)
  <ul>
  <li> <strong style="color: red">{{$error}}</strong></li>
  </ul>

@endforeach

            <div class="box-header with-border">
              <h3 class="text-center"> <a> Alterar <b> OS <strong>{{ $ordem->id }}</strong></b></a> </h3>
            </div>

<form action="/painel/ordemservico/update/{{ $ordem->id }}" method="POST">


  @csrf
  @method ('PUT')

  <section class="content">


              <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Dados do Cliente</h3>
                <div class="box-tools pull-right">

                </div>
              </div>

          <div class="box-body">

          <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <i class="fa fa-id-badge"></i></span>
                        <label>Cliente</label>


                        <select name="cliente_id" class="form-control select2">
                        <option></option>

                        @foreach ($clientes as $cliente)

                        <option value="{{$cliente->id}}" {{($cliente->id === $ordem->cliente_id) ? 'selected' : ''}}> {{$cliente->nome}} - Contato: {{$cliente->celular}}</option>

                        @endforeach

                        </select>
                      </div>
                    </div>
                    </div>


                </div>
        </div>

<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Dados do Serviço</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

    <div class="box-body">
      <div class="row">
              <div class="col-md-6">

                <div class="form-group">
                <i class="fa fa-address-card-o"></i></span>
                  <label>Receptor</label>
                  <input type="text" class="form-control" id="receptor" name="receptor" placeholder="Nome Receptor" value="{{ $ordem->receptor}}">

                </div>
              </div>

              <div class="col-xs-2">
              <i class="fa fa-phone"></i></span>
              <label for=""> Telefone:</label> <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone:" value="{{ $ordem->phone}}">
              </div>

              <div class="col-xs-2">
              <i class="fa fa-mobile"></i></span>
              <label for="">  Celular:</label> <input type="text" class="form-control" id="celular" name="celular" placeholder="celular" value="{{ $ordem->celular}}">
              </div>

              <div class="col-md-2">
              <i class="fa fa-female"></i>
              <i class="fa fa-male"></i>
                   <label for=""> Gênero:</label>
                   <select class="form-control select2" id="genero" name="genero" style="width: 100%;">

                   <option value="Nao Informar" {{($ordem->funcao ==='Nao Informar') ? 'selected' : ''}}> Nao Informar </option>
                   <option value="Feminino" {{($ordem->genero ==='Feminino') ? 'selected' : ''}}> Feminino </option>
                   <option value="Masculino" {{($ordem->genero ==='Masculino') ? 'selected' : ''}}> Masculino </option>

                   </select>
              </div>

          </div>


          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <i class="fa fa-shopping-bag"></i>
                <label>Serviços</label>
                <br>
                <select name="servico[]" class="form-control select2" multiple="multiple" data-placeholder="Selecione os Serviços"
                style="width: 100%;" >
                @foreach ($servicos as $servico)
                  <option value="{{$servico->id}}" @if(in_array($servico->id, $ordem->servicos->pluck('id')->toArray())) selected="selected" @endif> {{$servico->servico}} </option>
                @endforeach

                </select>
                </div>
              </div>

              <div class="col-md-6">
              <i class="fa fa-file-audio-o"></i></span>

              <label>Mensagem</label>
                <br>
                <select name="mensagem_id" class="form-control select2" data-placeholder="Selecione a Mensagem"
                        style="width: 100%;">

                        @foreach ($mensagens as $mensagem)

                        <option value="{{$mensagem->id}}" {{($mensagem->id === $ordem->mensagem_id) ? 'selected' : ''}}> {{$mensagem->mensagem}} </option>

                        @endforeach
                </select>
            </div>

          </div>


          <div class="row">

          <div class="col-md-3">
          <div class="form-group">
                <label>Data da OS:</label>
                <div class="input-group date">
                  <input type="date" class="form-control pull-right" name="dataos" id="dataos" value="{{ $ordem->dataos->format('Y-m-d')}}">
                </div>


            </div>
            </div>

            <div class="col-md-3">
            <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Horário OS:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name="horarioos" id="horarioos" value="{{ $ordem->horarioos}}">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                </div>
              </div>
              </div>


              <div class="col-md-3">
              <div class="form-group">
                  <label>Status da OS</label>
                  <select name="status" id="status" class="form-control">

                   <option value="Aberta" {{($ordem->status ==='Aberta') ? 'selected' : ''}}> Aberta </option>
                   <option value="Realizada" {{($ordem->status ==='Realizada') ? 'selected' : ''}}> Realizada </option>
                   <option value="Cancelada" {{($ordem->status ==='Cancelada') ? 'selected' : ''}}> Cancelada </option>
                  </select>
                </div>
                </div>

                <div class="col-md-3">
                <i class="fa fa-file-audio-o"></i></span>

                  <label>Cobrador</label>
                    <br>
                    <select name="cobrador_id" id="cobrador_id" class="form-control select2" data-placeholder="Selecione o Cobrador"
                            style="width: 100%;">

                            @foreach ($cobradores as $cobrador)

                            <option value="{{$cobrador->id}}" {{($cobrador->id === $ordem->cobrador_id) ? 'selected' : ''}}> {{$cobrador->cobrador}} </option>

                            @endforeach
                    </select>
                </div>

            </div>


            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                  <label>Observação</label>
                  <textarea name="obs" class="form-control" rows="3" placeholder="Enter ...">{{ $ordem->obs }}</textarea>
                </div>

            </div>


            <div class="col-md-6">
            <div class="form-group">
                  <label>Observação Cobrador</label>
                  <textarea name="obscobrador" class="form-control" rows="3">{{ $ordem->obscobrador }}</textarea>
                </div>

            </div>
            </div>

            <div class="info-box2 col-md-4">
                <span class="info-box-icon2 bg-aqua"><i class="fa fa-money"></i></span>

                <div class="info-box-content2">
                  <h4>R$: <input type="number" id="valoros" name ="valoros" placeholder="00,00" step="0.01" min="0" value="{{ $ordem->valoros}}"></h4>

                </div>
              </div>

              </div>

                            <div class="box-footer with-footer">
                              <h3 class="text-center">
                              <input type="submit" class="btn btn-success" value="Editar" >
                              <a href="{{url()->previous()}}" class="btn btn-danger">Cancelar</a>
                            </h3>
                            </div>




      </div>

  </div>


</section>

</form>

@endsection

