 <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="logo"><b>Cecofersa</b>Consumos</a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                @if (!Auth::guest()))
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                @endif
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                     
                        <!-- Tasks Menu -->
                        
                        <!-- User Account Menu -->
                        @if (!Auth::guest()))
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{ asset("/bower_components/AdminLte/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs"> </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    
                                    <img src="{{ asset("/bower_components/AdminLte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
                                    
                                    <p>

                                        {{ Auth::user()->name }}
                                        <small> {{ Auth::user()->email }}</small>
                                    </p>
                                    
                                </li>

                                <!-- Menu Body -->
                            
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    
                                    <div class="pull-right">
                                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>