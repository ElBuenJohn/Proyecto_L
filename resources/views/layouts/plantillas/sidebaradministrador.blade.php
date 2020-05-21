
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
           
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{ route ('productos.index') }}">Productos</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{ route ('proveedores.index') }}">Proveedores</a>
            </li>
            <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{ route ('compras.index') }}">Compras</a>
            </li>
            <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{ route ('clientes.index') }}">Clientes</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{ route ('ventas.index') }}">Ventas</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{ route ('usuarios.index') }}">Usuarios</a>
            </li>
            <li class="nav-item px-lg-4">
                <form method="POST" action="{{ route('logout') }}">
                    {{ csrf_field() }}
                    <button type="submit" class="btn nav-link text-uppercase text-expanded">Logout</button>
                </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <div class="cta-inner text-center rounded">

                @yield('content')

            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <h3>
            <p class="m-0 small">Panaderia INGEniosa</p>
        </h3>
      </div>
    </footer>