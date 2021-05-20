<script src="{{ asset('template/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('AdminLTE/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('template/bootstrap.min.js') }}"></script>

<script src="{{ asset('template/select2.full.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('template/raphael.min.js') }}"></script>
<script src="{{ asset('template/morris.min.js') }}"></script>

<script src="{{ asset('template/jquery.inputmask.js') }}"></script>
<script src="{{ asset('template/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('template/jquery.inputmask.extensions.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('template/moment.min.js') }}"></script>
<script src="{{ asset('template/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('template/bootstrap-datepicker.min.js') }}"></script>

<script src="{{ asset('template/bootstrap-colorpicker.min.js') }}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('template/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('template/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/adminlte.min.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/demo.js') }}"></script>

<script src="{{ asset('template/bootstrap-timepicker.min.js') }}"></script>

<script src="{{ asset('template/icheck.min.js')}}"></script>
<script src="{{ asset('template/jquery.mask.min.js')}}"></script>





<link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

<!-- DataTables -->
<script src="{{ asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>


<script>
  $(function () {
    $('#example1').DataTable({
      "language": {
    "emptyTable": "Nenhum registro encontrado",
    "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    "infoEmpty": "Mostrando 0 até 0 de 0 registros",
    "infoFiltered": "(Filtrados de _MAX_ registros)",
    "infoThousands": ".",
    "loadingRecords": "Carregando...",
    "processing": "Processando...",
    "zeroRecords": "Nenhum registro encontrado",
    "search": "Pesquisar",
    "paginate": {
        "next": "Próximo",
        "previous": "Anterior",
        "first": "Primeiro",
        "last": "Último"
    },
    "aria": {
        "sortAscending": ": Ordenar colunas de forma ascendente",
        "sortDescending": ": Ordenar colunas de forma descendente"
    },
    "select": {
        "rows": {
            "_": "Selecionado %d linhas",
            "0": "Nenhuma linha selecionada",
            "1": "Selecionado 1 linha"
        },
        "1": "%d linha selecionada",
        "_": "%d linhas selecionadas",
        "cells": {
            "1": "1 célula selecionada",
            "_": "%d células selecionadas"
        },
        "columns": {
            "1": "1 coluna selecionada",
            "_": "%d colunas selecionadas"
        }
    },
    "buttons": {
        "copySuccess": {
            "1": "Uma linha copiada com sucesso",
            "_": "%d linhas copiadas com sucesso"
        },
        "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
        "colvis": "Visibilidade da Coluna",
        "colvisRestore": "Restaurar Visibilidade",
        "copy": "Copiar",
        "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
        "copyTitle": "Copiar para a Área de Transferência",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Mostrar todos os registros",
            "1": "Mostrar 1 registro",
            "_": "Mostrar %d registros"
        },
        "pdf": "PDF",
        "print": "Imprimir"
    },
    "autoFill": {
        "cancel": "Cancelar",
        "fill": "Preencher todas as células com",
        "fillHorizontal": "Preencher células horizontalmente",
        "fillVertical": "Preencher células verticalmente"
    },
    "lengthMenu": "Exibir _MENU_ resultados por página",
    "searchBuilder": {
        "add": "Adicionar Condição",
        "button": {
            "0": "Construtor de Pesquisa",
            "_": "Construtor de Pesquisa (%d)"
        },
        "clearAll": "Limpar Tudo",
        "condition": "Condição",
        "conditions": {
            "date": {
                "after": "Depois",
                "before": "Antes",
                "between": "Entre",
                "empty": "Vazio",
                "equals": "Igual",
                "not": "Não",
                "notBetween": "Não Entre",
                "notEmpty": "Não Vazio"
            },
            "number": {
                "between": "Entre",
                "empty": "Vazio",
                "equals": "Igual",
                "gt": "Maior Que",
                "gte": "Maior ou Igual a",
                "lt": "Menor Que",
                "lte": "Menor ou Igual a",
                "not": "Não",
                "notBetween": "Não Entre",
                "notEmpty": "Não Vazio"
            },
            "string": {
                "contains": "Contém",
                "empty": "Vazio",
                "endsWith": "Termina Com",
                "equals": "Igual",
                "not": "Não",
                "notEmpty": "Não Vazio",
                "startsWith": "Começa Com"
            },
            "array": {
                "contains": "Contém",
                "empty": "Vazio",
                "equals": "Igual à",
                "not": "Não",
                "notEmpty": "Não vazio",
                "without": "Não possui"
            }
        },
        "data": "Data",
        "deleteTitle": "Excluir regra de filtragem",
        "logicAnd": "E",
        "logicOr": "Ou",
        "title": {
            "0": "Construtor de Pesquisa",
            "_": "Construtor de Pesquisa (%d)"
        },
        "value": "Valor"
    },
    "searchPanes": {
        "clearMessage": "Limpar Tudo",
        "collapse": {
            "0": "Painéis de Pesquisa",
            "_": "Painéis de Pesquisa (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Nenhum Painel de Pesquisa",
        "loadMessage": "Carregando Painéis de Pesquisa...",
        "title": "Filtros Ativos"
    },
    "searchPlaceholder": "Digite um termo para pesquisar",
    "thousands": ".",
    "datetime": {
        "previous": "Anterior",
        "next": "Próximo",
        "hours": "Hora",
        "minutes": "Minuto",
        "seconds": "Segundo",
        "amPm": [
            "am",
            "pm"
        ],
        "unknown": "-"
    },
    "editor": {
        "close": "Fechar",
        "create": {
            "button": "Novo",
            "submit": "Criar",
            "title": "Criar novo registro"
        },
        "edit": {
            "button": "Editar",
            "submit": "Atualizar",
            "title": "Editar registro"
        },
        "error": {
            "system": "Ocorreu um erro no sistema (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">Mais informações<\/a>)."
        },
        "multi": {
            "noMulti": "Essa entrada pode ser editada individualmente, mas não como parte do grupo",
            "restore": "Desfazer alterações",
            "title": "Multiplos valores",
            "info": "Os itens selecionados contêm valores diferentes para esta entrada. Para editar e definir todos os itens para esta entrada com o mesmo valor, clique ou toque aqui, caso contrário, eles manterão seus valores individuais."
        },
        "remove": {
            "button": "Remover",
            "confirm": {
                "_": "Tem certeza que quer deletar %d linhas?",
                "1": "Tem certeza que quer deletar 1 linha?"
            },
            "submit": "Remover",
            "title": "Remover registro"
        }
    },
    "decimal": ","
}
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  });



  function dataformView(id){
    $.ajax({
      url : "/ordens/show/"+id,
      method : "GET",
      success : function (response){
        var formViewOS = $("form[name=formViewOS]");
        formViewOS.find("input[name=id]").val(response.id);

        formViewOS.find("input[name=cliente_id]").val(response.cliente.nome);
        formViewOS.find("input[name=receptor]").val(response.receptor);
        formViewOS.find("input[name=phone]").val(response.phone);
        formViewOS.find("input[name=celular]").val(response.celular);
        formViewOS.find("input[name=genero]").val(response.genero);
        formViewOS.find("input[name=servicos]").val(response.servicos);
        formViewOS.find("input[name=mensagem_id]").val(response.mensagem.mensagem);
        formViewOS.find("input[name=horarioos]").val(response.horarioos);
        formViewOS.find("input[name=status]").val(response.status);
        formViewOS.find("input[name=cobrador_id]").val(response.cobrador.cobrador);

     //   formViewOS.find("input[name=obs]").val(response.obs);
        var obs = $('#obs').val(response.obs);
        var obs2 = $('#obs2').val(response.obscobrador);

        var dataos = moment(response.dataos).format('DD/MM/YYYY');
        formViewOS.find("input[name=dataos]").val(dataos);

      //  var obscobrador = $('#obscobrador').val(responde.obscobrador)

      //  formViewOS.find("input[name=obscobrador]").val(response.obscobrador);

        console.log(response, "success");
      },
      error : function (response){
        console.log(response, "error");
      },
    });
  }

  function dataformViewfunc(id){
    $.ajax({
      url : "/usuarios/show/"+id,
      method : "GET",
      success : function (response){
        var formViewfunc = $("form[name=formViewfunc]");
        formViewfunc.find("input[name=id]").val(response.id);

        formViewfunc.find("input[name=name]").val(response.name);
        formViewfunc.find("input[name=cpf]").val(response.cpf);
        formViewfunc.find("input[name=email]").val(response.email);
        formViewfunc.find("input[name=logradouro]").val(response.logradouro);
        formViewfunc.find("input[name=numero]").val(response.numero);
        formViewfunc.find("input[name=phone]").val(response.phone);
        formViewfunc.find("input[name=celular]").val(response.celular);
        formViewfunc.find("input[name=genero]").val(response.genero);


        var nascimento = moment(response.nascimento).format('DD/MM/YYYY');
        formViewfunc.find("input[name=nascimento]").val(nascimento);


        formViewfunc.find("input[name=funcao]").val(response.funcao);

        var bairro = $('#bairro').val(response.bairro.bairro);
       // var obs2 = $('#obs2').val(response.obscobrador);

        console.log(response, "success");
      },
      error : function (response){
        console.log(response, "error");
      },
    });
  }


  function dataformViewcliente(id){
    $.ajax({
      url : "/clientes/show/"+id,
      method : "GET",
      success : function (response){
        var formViewcliente = $("form[name=formViewcliente]");
        formViewcliente.find("input[name=id]").val(response.id);

        formViewcliente.find("input[name=nome]").val(response.nome);
        formViewcliente.find("input[name=logradouro]").val(response.logradouro);
        formViewcliente.find("input[name=numero]").val(response.numero);
        formViewcliente.find("input[name=phone]").val(response.phone);
        formViewcliente.find("input[name=celular]").val(response.celular);
        formViewcliente.find("input[name=genero]").val(response.genero);
      //  formViewcliente.find("input[name=nascimento]").val(response.nascimento);

        var nascimento = moment(response.nascimento).format('DD/MM/YYYY');

      //  console.log(nascimento);
      formViewcliente.find("input[name=nascimento]").val(nascimento);

        var referencia = $('#referencia').val(response.referencia);

        var obs = $('#obs').val(response.obs);

        var bairro = $('#bairro').val(response.bairro.bairro);

        console.log(response, "success");
      },
      error : function (response){
        console.log(response, "error");
      },
    });
  }

$(function(){
    $("#cobrador").change(function(){
        var displayvalor = $("#cobrador option:selected").text();

        $("valortotal").val(displayvalor);

        console.log(displayvalor);
    })
});

</script>




<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>


<script>
  $(function() {
    $("#cpf").mask("000.000.000-00");
    $("#phone").mask("(00) 0000-0000");

    $("#celular").mask("(00) 0000-00009");
    $("#celular").blur(function(event){
        if ($(this).val().length == 15){
          $("#celular").mask("(00) 00000-0009");
        }else{
          $("#celular").mask("(00) 0000-00009");

        }

    });


  });
</script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })


</script>
