
  <ul class="sidebar-menu">
    <li class="menu-header text-center">EMPRESA</li>
    
    @role('Admin')
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Personal</span></a>
      <ul class="dropdown-menu">
        <li ><a class="nav-link" href="{{route('usuarios.index')}}">Lista Personal</a></li>
        <li ><a class="nav-link" href="{{route('usuarios.asignarsucursal')}}">Asignar Sucursal</a></li>
      </ul>
    </li>
    @endrole

    @role('Admin')
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Administracion</span></a>
      <ul class="dropdown-menu">
        <li ><a class="nav-link" href="{{route('sucursal.index')}}">Sucursales</a></li>
        <li ><a class="nav-link" href="{{route('sucursal.asignar_producto')}}">Asignar productos a Sucursal</a></li>
      </ul>
    </li>
    @endrole

    @role('Admin|Encargado|Usuario')
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Ventas Diarias</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{route('ventas.index')}}">Mis ventas</a></li>
        <li><a class="nav-link" href="{{route('ventas.cierre_venta')}}">Cierre Venta</a></li>
        <li><a class="nav-link" href="{{route('ventas.report_venta')}}">Reporte de ventas por Sucursal</a></li>
      </ul>
    </li>
    @endrole

    @role('Admin|Encargado')
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Inventarios</span></a>
      <ul class="dropdown-menu">
        <li ><a class="nav-link" href="{{route('inventario.index')}}">Inventario </a></li>
        <li ><a class="nav-link" href="{{route('categoria.index')}}">Categoria </a></li>
        <li ><a class="nav-link" href="{{route('unidad.index')}}">Unidades </a></li>
        <li ><a class="nav-link" href="{{route('producto.index')}}">Productos </a></li>
      </ul>
    </li>
    @endrole
    
    {{-- <li class="menu-header">Pages</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
      <ul class="dropdown-menu">
        <li><a href="auth-forgot-password.html">Forgot Password</a></li>
        <li><a href="auth-login.html">Login</a></li>
        <li><a class="beep beep-sidebar" href="auth-login-2.html">Login 2</a></li>
        <li><a href="auth-register.html">Register</a></li>
        <li><a href="auth-reset-password.html">Reset Password</a></li>
      </ul>
    </li> --}}

  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
      <i class="fas fa-rocket"></i> Documentation
    </a>
  </div>