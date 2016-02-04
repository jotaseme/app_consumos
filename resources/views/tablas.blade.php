        <div class="col-xs-12">
        @if(isset($asociados))
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a href="{{url('/asociados')}}"> Asociados</a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>NIF</th>
                        <th>Nombre</th>
                        <th>Activo</th>
                        <th>Opcion 1</th>
                        <th>Opcion 2</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($asociados as $asociado)
                      <tr>
                        <td>{{ $asociado->nif }}</td>
                        <td><a href ="{{ url('/asociado/' .  $asociado->id  ) }}">{{ $asociado->nombre }}</a></td>
                        <td>{{ $asociado->activo }}</td>
                        <td></td>
                        <td>X</td>
                      </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>NIF</th>
                        <th>Nombre</th>
                        <th>Activo</th>
                        <th>Opcion 1</th>
                        <th>Opcion 2</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              @endif
              @if(isset($proveedores))
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a href="{{url('/proveedores')}}"> Proveedores</a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>NIF</th>
                        <th>Nombre</th>               
                        <th>Gestor</th>
                        <th>Familia</th>
                        <th>Opcion 1</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($proveedores as $proveedor)
                      <tr>
                        <td>{{ $proveedor->nif }}</td>
                        <td><a href ="{{ url('/proveedor/' .  $proveedor->id  ) }}">{{ $proveedor->nombre }}</a></td>
                        <td>{{ $proveedor->gestor->name }}</td>
                        <td>{{ $proveedor->familia }}</td>
                        <td> x </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>NIF</th>
                        <th>Nombre</th>               
                        <th>Gestor</th>
                        <th>Familia</th>
                        <th>Opcion 1</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
               @endif
            </div><!-- /.col -->