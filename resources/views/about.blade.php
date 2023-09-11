@extends('main')

@section('content')

<!-- Hero Section -->
<div class="bg-gray-800 relative overflow-hidden h-screen">
  <img class="absolute inset-0 h-full w-full object-cover" src="path/to/your/background-image.jpg" alt="Background Image">
  <div class="relative bg-opacity-75 bg-gray-800">
    <div class="container mx-auto py-36 text-center relative z-10">
      <h1 class="text-5xl font-extrabold text-white mb-4">About Us</h1>
      <p class="text-xl text-white">Learn more about our story, mission, and values.</p>
    </div>
  </div>
</div>

<!-- Our Story Section -->
<section class="bg-white py-20">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-10">Our Story</h2>
    <p class="mb-6 text-gray-700">Our journey began in ...</p>
    <p class="mb-6 text-gray-700">In 20xx, we ...</p>
    <!-- Add more paragraphs to expand the story -->
  </div>
</section>

<!-- Our Team Section -->
<section class="bg-gray-100 py-20">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-10">Meet Our Team</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

      <!-- Team Member 1 -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img class="w-32 mx-auto rounded-full mb-4" src="path/to/your/team-member-1.jpg" alt="Team Member 1">
        <h3 class="text-xl font-semibold mb-2">Member 1</h3>
        <p class="text-gray-600 mb-2">Position 1</p>
        <p class="text-gray-700">Bio of team member 1.</p>
      </div>

      <!-- Team Member 2 -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img class="w-32 mx-auto rounded-full mb-4" src="path/to/your/team-member-2.jpg" alt="Team Member 2">
        <h3 class="text-xl font-semibold mb-2">Member 2</h3>
        <p class="text-gray-600 mb-2">Position 2</p>
        <p class="text-gray-700">Bio of team member 2.</p>
      </div>

      <!-- Add more team members as necessary -->

    </div>
  </div>
</section>

<!-- Our Values Section -->
<section class="bg-white py-20">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-10">Our Values</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

      <!-- Value 1 -->
      <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold mb-2">Value 1</h3>
        <p class="text-gray-700">Description of value 1.</p>
      </div>

      <!-- Value 2 -->
      <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold mb-2">Value 2</h3>
        <p class="text-gray-700">Description of value 2.</p>
      </div>

      <!-- Add more values as necessary -->

    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="bg-gray-100 py-20">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-10">What People Are Saying</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

      <!-- Testimonial 1 -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-gray-700 italic mb-4">"Testimonial 1..."</p>
        <p class="text-gray-600 font-semibold">- Person 1</p>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-gray-700 italic mb-4">"Testimonial 2..."</p>
        <p class="text-gray-600 font-semibold">- Person 2</p>
      </div>

      <!-- Add more testimonials as necessary -->

    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="bg-white py-20">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-10">Get in Touch</h2>
    <p class="text-gray-700 mb-6">We'd love to hear from you. <a href="/contact" class="text-blue-500 underline">Contact Us</a></p>
  </div>
</section>

@endsection