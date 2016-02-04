  <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset("/bower_components/AdminLte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p> {{ Auth::user()->name }}</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    
                    <!-- Optionally, you can add icons to the links -->
                    @if(isset($inicio))
                    <li class="active">
                    @else
                    <li>
                    @endif
                        <a href="{{ url('/') }}"><span>Inicio</span></a>
                    </li>

                    @if(isset($link_asociado))
                    <li class="active">
                    @else
                    <li>
                    @endif
                        <a href="{{ url('/asociados') }}"><span>Asociados</span></a>
                    </li>

                    @if(isset($link_proveedor))
                    <li class="active">
                    @else
                    <li>
                    @endif
                        <a href="{{ url('/proveedores') }}"><span>Proveedores</span></a>
                    </li>
                    <li class="treeview">
                        <a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">Link in level 2</a></li>
                            <li><a href="#">Link in level 2</a></li>
                        </ul>
                    </li>
                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>