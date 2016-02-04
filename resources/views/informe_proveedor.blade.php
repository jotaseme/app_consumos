<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Nota:</h4>
        Detalle de los consumos que se han hecho hasta la fecha a {{ $proveedor->nombre }}
      </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Proveedor {{ $proveedor->nombre }}
            <small class="pull-right">{{date('d-m-Y')}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
     
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table id="example3" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                       
                        <th>NIF</th> 
                        <th>Asociado</th>        
                       
                        <th>Año</th>
                        <th>Consumo</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($proveedor->consumos as $consumo)
                       <tr>
                       
                        <td>{{ $consumo->nif }}</td>
                        <td><a href="{{ url('/asociado/' .  $consumo  ->id  ) }}">{{ $consumo->nombre }}</a></td>
                        
                        <td>{{ $consumo->pivot->year }}</td>
                        <td>{{ number_format($consumo->pivot->consumo,2)}} €</td>
                      </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        

                        <th>NIF</th> 
                        <th>Asociado</th>        
                        
                        <th>Año</th>
                        <th>Consumo</th>
                      </tr>
                    </tfoot>
          </table>
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-4">

        </div>
        <!-- /.col -->
        <div class="col-xs-8">
          <p class="lead"><b>{{sizeof($proveedor->consumos)}}</b> asociados han comprado a {{$proveedor->nombre}}</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                
                <th>Total consumos:</th>
                <td><b>{{number_format($total_consumo,2)}} €</b></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
          
        </div>
      </div>
    </section>

     <div class="clearfix">
       <br>
       <br>
     </div>

     <section class="invoice">
       <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
     </section>




