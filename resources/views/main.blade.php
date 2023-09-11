<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Main Layout</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel Project</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/newview') }}">New View</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Container -->
    <div class="container mt-4">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
          <ul class="list-group">
            <li class="list-group-item">Sidebar Item 1</li>
            <li class="list-group-item">Sidebar Item 2</li>
            <li class="list-group-item">Sidebar Item 3</li>
          </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
          @yield('content')
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
      <div class="container text-center">
        <p class="mb-0">Footer Content Here</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
