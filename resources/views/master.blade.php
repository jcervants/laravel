<!-- Stored in resources/views/master.blade.php -->
<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

  @include('shared.navbar')
    <!--Navbar-->
  @show

  <!--Contenido Home Page-->
  <div class="container">
    @yield('content')  
  </div>
  <br>

  <!--Contacto-->
  <div class="container">
    @include('contact')
    <!--Navbar-->
    @show
  </div>

  <!--Acerca-->
  <div class="container">
    @include('about')
    <!--Navbar-->
    @show
  </div>

  <!--Footer-->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="text-muted">© 2023 inGenia</span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a>Linkedin</li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a>Facebook</li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a>Twitter</li>
      </ul>
    </footer>
  </div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
