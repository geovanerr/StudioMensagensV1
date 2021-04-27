@extends ('Painel.Layout.index')

@section('title', 'Painel de Ordens de Serviços')

  @section('content')

  <section class="content">

     <div class="row">

     <div class="col-xs-12">
       <div class="box">

             <div class="box-header with-border">
                  @if(session('msg'))
                    <p class="msg"> {{ session('msg')}} </p>
                  @endif

               <h3 id="box-title" class="text-center"> Ordens de Serviços <a href="{{ route('Painel.OrdemServico.create') }}" class="btn btn-success"><i class="fa fa-plus"></i></a> </h3>

             </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th> <i class="fa fa-file-text-o" aria-hidden="true"></i> OS </th>
                 <th> <i class="fa fa-user"></i>  Cliente  </th>
                 <th> <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                      <i class="fa fa-male" aria-hidden="true"></i>
                      <i class="fa fa-female" aria-hidden="true"></i>
                     Receptor  </th>

                 <th> <i class="fa fa-tablet" aria-hidden="true"></i>  Celular </th>
                 <th> <i class="fa fa-shopping-bag" aria-hidden="true"></i>  Serviços </th>
                 <th> <i class="fa fa-calendar-check-o" aria-hidden="true"></i>  Data OS </th>
                 <th> <i class="fa fa-spinner" aria-hidden="true"></i>  Hora OS </th>
                 <th> <i class="fa fa-cog" aria-hidden="true"></i>  Ação </th>

               </tr>
               </thead>
               <tbody>
                    @foreach ($ordens as $ordem)
                        <tr>
                          <td> {{ $ordem->id }} </td>
                          <td> {{ $ordem->cliente->nome }} </td>
                          <td> {{ $ordem->receptor }} </td>
                          <td> {{ $ordem->celular }} </td>
                          <td> 
                          @foreach ($ordem->servicos as $servico)
                          {{ $servico->servico }}

                          @endforeach

                          </td>
                          <td> {{ date('d/m/Y', strtotime($ordem->dataos))  }} </td>
                          <td> {{ $ordem->horarioos }} </td>

                            <td>

                                <a class="btn btn-warning" href="{{ route('Painel.OrdemServico.edit', $ordem->id)}}"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger"><i class="fa fa-trash"></i></a>

                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#osmodal">
                                    <i class="fa fa-eye"></i>
                                </button>

                            </td>
                        </tr>
                    @endforeach

                    <!-- Modal -->
<div class="modal fade" id="osmodal" style="z-index: 10000" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="osmodal">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

               </tbody>
             </table>
           </div>

         </div>
         </div>

     </div>

   </section>


  @endsection

