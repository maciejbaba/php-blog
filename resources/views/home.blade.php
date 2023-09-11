@extends('main')

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

@endsection
