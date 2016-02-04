<!DOCTYPE html>
    <!--
    This is a starter template page. Use this page to start your new project from
    scratch. This page gets rid of all links and provides the needed markup only.
    -->
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Cecofersa | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset("/bower_components/AdminLte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="{{ asset("/bower_components/AdminLte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>



    <body class="skin-blue">
    <div class="wrapper">

     <!-- Header -->
        @include('header')

    <!-- Sidebar -->
        @include('sidebar')
      

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {{$titulo}}
                    <small>{{$subtitulo}}</small>
                </h1>
                <ol class="breadcrumb">
                    @if(isset($inicio))
                    <li><i class="fa fa-dashboard"></i> Inicio</li>
                    @elseif(isset($link_asociado)&&!isset($show_asociado))
                    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    <li class="active">Asociados</li>
                    @elseif(isset($link_proveedor)&&!isset($show_proveedor))
                    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    <li class="active">Proveedores</li>
                    @elseif(isset($show_asociado))
                    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    <li><a href="{{ url('/asociados') }}">Asociados</a></li>
                    <li class="active">{{$asociado->nombre}}</li>
                    @elseif(isset($show_proveedor))
                    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    <li><a href="{{ url('/proveedores') }}">Proveedores</a></li>
                    <li class="active">{{$proveedor->nombre}}</li>
                    @endif
                    
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    @include('tablas')
                    @if(isset($asociado))
                    @include('informe_asociado')
                    @endif
                    @if(isset($proveedor))
                    @include('informe_proveedor')
                    @endif
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        
    <!-- Footer -->
    @include('footer')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("/bower_components/AdminLte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("/bower_components/AdminLte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("/bower_components/AdminLte/dist/js/app.min.js") }}" type="text/javascript"></script>

    <script src= "{{ asset ("/bower_components/AdminLte/plugins/datatables/jquery.dataTables.min.js") }}"></script>
    <script src= "{{ asset ("/bower_components/AdminLte/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience -->
    

    @if(isset($tabla_asociados))
    <script>
          $(function () {
            $('#example2').DataTable({
                'iDisplayLength': 25
            });
          });
    </script>

    @else     
    <script>
          $(function () {
            $('#example2').DataTable();    
          });
    </script>
    @endif



    @if(isset($tabla_proveedores))
    <script>
          $(function () {
            $('#example1').DataTable({
                'iDisplayLength': 25
            });
          });
    </script>

    @else     
    <script>
          $(function () {
            $('#example1').DataTable();    
          });
    </script>
    @endif

    <script>
          $(function () {
            $('#example3').DataTable();
          });
    </script>

    @if(isset($asociado) ||isset($proveedor))
    <script>
  
            $(function () {
                $('#container').highcharts({
                    title: {
                        text: 'Consumos anuales ',
                        x: -20 //center
                    },
                    subtitle: {
                        text: 'Fuente: Informes cecofersa',
                        x: -20
                    },
                    xAxis: {
                        categories: ['2014','2015']
                    },
                    yAxis: {
                        title: {
                            text: 'Consumo (€)'
                        },
                        plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                        }]
                    },
                    tooltip: {
                        valueSuffix: '€'
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle',
                        borderWidth: 0
                    },
                    series: [{
                        name: 'Tokyo',
                        data: [2363,4533]
                    }]
                });
            });

    </script>
    @endif
    </body>
</html>