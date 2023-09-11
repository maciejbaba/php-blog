@extends('main')

@section('content')

<!-- Page Header -->
<div class="bg-gray-800 py-16">
    <h1 class="text-center text-white text-4xl font-extrabold">Contact Me</h1>
</div>

<!-- Contact Form Section -->
<div class="bg-white py-16">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-8">Get in Touch</h2>
        <form class="space-y-6">
            <div>
                <label class="block text-gray-700">Full Name</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="John Doe">
            </div>
            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="example@email.com">
            </div>
            <div>
                <label class="block text-gray-700">Message</label>
                <textarea class="w-full p-2 border border-gray-300 rounded mt-1" rows="5" placeholder="Your message..."></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700">Send</button>
            </div>
        </form>
    </div>
</div>

<!-- FAQ Section -->
<div class="bg-gray-100 py-16">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-8">Frequently Asked Questions</h2>
        <div class="space-y-6">
            <div>
                <h3 class="text-xl font-semibold">Question 1</h3>
                <p class="text-gray-700">Answer to question 1.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold">Question 2</h3>
                <p class="text-gray-700">Answer to question 2.</p>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="bg-white py-16">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-8">Our Location</h2>
        <div class="relative h-96 w-full border-2">
            <!-- Embed a Google Map iframe here -->
            <!-- <iframe src="https://www.google.com/maps/embed?..." class="absolute top-0 left-0 w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
        </div>
    </div>
</div>

@endsection