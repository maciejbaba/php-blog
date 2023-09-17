<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Php blog log vlog glock</title>
</head>

<body class="m-0 p-0 w-full h-full">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-gray-800 mt-2">
    <div class="container-fluid m-2">
      <div>
        <a class="navbar-brand text-white font-bold" href="#">Php blog log vlog glock</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item m-1 uppercase font-bold">
            <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item m-1 uppercase font-bold">
            <a class="nav-link text-white" href="{{ url('/contact') }}">Contact</a>
          </li>
          <li class="nav-item m-1 uppercase font-bold">
            <a class="nav-link text-white" href="{{ url('/welcome') }}">Welcome</a>
          </li>
          <li class="nav-item m-1 uppercase font-bold">
            <a class="nav-link text-white" href="{{ url('/about') }}">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Container -->
  <div class="container mt-2">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 bg-gray-800 text-white">
        <!-- Profile Section -->
        <div class="flex items-center p-4">
          <div class="mr-3">
            <img class="w-12 h-12 rounded-full" src="githubProf.jfif" alt="User Avatar" />
          </div>
          <div>
            <h2 class="text-xl font-semibold">Maciej</h2>
            <p class="text-sm text-gray-400">View Profile</p>
          </div>
        </div>

        <!-- Navigation Menu -->
        <ul class="list-none">
          <li class="px-4 py-2 hover:bg-gray-700">
            <a href="#" class="flex items-center text-white hover:text-gray-300">
              <i class="fas fa-home mr-3"></i>
              Home
            </a>
          </li>
          <li class="px-4 py-2 hover:bg-gray-700">
            <a href="#about" class="flex items-center text-white hover:text-gray-300">
              <i class="fas fa-info-circle mr-3"></i>
              About Us
            </a>
          </li>
          <li class="px-4 py-2 hover:bg-gray-700">
            <a href="#features" class="flex items-center text-white hover:text-gray-300">
              <i class="fas fa-cogs mr-3"></i>
              Our Features
            </a>
          </li>
          <li class="px-4 py-2 hover:bg-gray-700">
            <a href="#latest" class="flex items-center text-white hover:text-gray-300">
              <i class="fas fa-envelope mr-3"></i>
              Latest Blog Posts
            </a>
          </li>
          <li class="px-4 py-2 hover:bg-gray-700">
            <a href="#contact" class="flex items-center text-white hover:text-gray-300">
              <i class="fas fa-envelope mr-3"></i>
              Contact Us
            </a>
          </li>
          <!-- Add more menu items as needed -->
        </ul>
      </div>

      <!-- Main Content -->
      <div class="col-md-9">
        @section('content')
        <!-- Hero Section -->
        <div class="bg-gray-800 relative overflow-hidden h-screen flex items-center justify-center" style="background-image: url('path/to/your/background-image.jpg'); background-size: cover;">
          <div class="text-center relative z-10">
            <h1 class="text-5xl font-extrabold text-white mb-4">Welcome to Our Website</h1>
            <p class="text-xl text-white mb-8">We are committed to providing the best services.</p>
            <a href="#about" class="text-white font-bold py-2 px-4 bg-blue-500 hover:bg-blue-700 rounded-full">
              Learn More
            </a>
          </div>
          <div class="absolute inset-0 bg-gray-800 opacity-75"></div>
        </div>

        <!-- About Us Section -->
        <section id="about" class="bg-white py-20">
          <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">About Us</h2>
            <p class="text-gray-700 mb-6">We started our journey in ...</p>
            <p class="text-gray-700 mb-6">Our mission is to ...</p>
            <!-- You can add more content here -->
          </div>
        </section>

        <!-- Features Section -->
        <section class="bg-gray-100 py-20">
          <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-10">Our Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

              <!-- Feature 1 -->
              <div class="feature-item text-center">
                <div class="feature-icon mb-6">
                  <i class="fas fa-rocket text-4xl text-blue-500"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Feature 1</h3>
                <p class="text-gray-700">Description of feature 1.</p>
              </div>

              <!-- Feature 2 -->
              <div class="feature-item text-center">
                <div class="feature-icon mb-6">
                  <i class="fas fa-shield-alt text-4xl text-blue-500"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Feature 2</h3>
                <p class="text-gray-700">Description of feature 2.</p>
              </div>

              <!-- Add more features as necessary -->
            </div>
          </div>
        </section>

        <!-- Blog Section -->
        <section class="bg-white py-20">
          <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-10">Latest Blog Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

              <!-- Blog Post 1 -->
              <div class="blog-item p-6 bg-gray-100 rounded-lg shadow-lg">
                <img class="w-full h-56 object-cover rounded-t-lg mb-4" src="path/to/your/blog-post-1.jpg" alt="Blog Post 1">
                <h3 class="text-xl font-semibold mb-2">Blog Post 1</h3>
                <p class="text-gray-700">Excerpt of blog post 1.</p>
                <a href="#" class="text-blue-500 underline">Read more</a>
              </div>

              <!-- Blog Post 2 -->
              <div class="blog-item p-6 bg-gray-100 rounded-lg shadow-lg">
                <img class="w-full h-56 object-cover rounded-t-lg mb-4" src="path/to/your/blog-post-2.jpg" alt="Blog Post 2">
                <h3 class="text-xl font-semibold mb-2">Blog Post 2</h3>
                <p class="text-gray-700">Excerpt of blog post 2.</p>
                <a href="#" class="text-blue-500 underline">Read more</a>
              </div>

              <!-- Add more blog posts as necessary -->
            </div>
          </div>
        </section>

        <!-- Contact Section -->
        <section class="bg-gray-100 py-20">
          <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">Contact Us</h2>
            <p class="text-gray-700 mb-6">We'd love to hear from you. Feel free to get in touch with us.</p>
            <a href="/contact" class="text-white font-bold py-2 px-4 bg-blue-500 hover:bg-blue-700 rounded-full">
              Contact Us
            </a>
          </div>
        </section>

        @show
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