@extends('layouts.app')

@section('title', 'IT Solution - Professional IT Services')

@section('content')
<!-- Hero Section -->
<section class="relative bg-linear-to-r from-blue-600 to-blue-800 dark:from-blue-900 dark:to-gray-900 text-white py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Professional IT Solutions for Your Business
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    We provide comprehensive IT services including web development, CCTV installation, 
                    network setup, and custom information systems.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/services" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors text-center">
                        Our Services
                    </a>
                    <a href="/contact" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors text-center">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="hidden md:flex justify-center">
                <div class="w-full h-96 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center">
                    <i data-lucide="monitor" class="w-48 h-48 text-white/50"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Our Services</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300">Comprehensive IT solutions tailored to your needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Web Development -->
            <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 dark:bg-blue-900 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <i data-lucide="code" class="w-8 h-8 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Web Development</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Custom website and web application development using modern technologies and best practices.
                </p>
                <a href="/services/web-development" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">
                    Learn More →
                </a>
            </div>
            
            <!-- CCTV Installation -->
            <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 dark:bg-blue-900 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <i data-lucide="camera" class="w-8 h-8 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">CCTV Installation</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Professional CCTV camera installation and surveillance system setup for your security needs.
                </p>
                <a href="/services/cctv-installation" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">
                    Learn More →
                </a>
            </div>
            
            <!-- Network Setup -->
            <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 dark:bg-blue-900 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <i data-lucide="network" class="w-8 h-8 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Network Setup</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Complete network infrastructure setup including internet, LAN, and wireless connectivity.
                </p>
                <a href="/services/network-setup" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">
                    Learn More →
                </a>
            </div>
            
            <!-- Information Systems -->
            <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 dark:bg-blue-900 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <i data-lucide="database" class="w-8 h-8 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Information Systems</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Custom information system development to streamline your business processes and operations.
                </p>
                <a href="/services/information-systems" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">
                    Learn More →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Why Choose Us</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300">We deliver excellence in every project</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-blue-100 dark:bg-blue-900 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="shield" class="w-10 h-10 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Professional & Reliable</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Our team of experts ensures high-quality service delivery with professional standards.
                </p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-100 dark:bg-blue-900 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="clock" class="w-10 h-10 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Fast & Efficient</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    We value your time and complete projects efficiently without compromising quality.
                </p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-100 dark:bg-blue-900 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="server" class="w-10 h-10 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Latest Technology</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    We use cutting-edge technology and tools to deliver modern solutions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-blue-600 dark:bg-blue-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Project?</h2>
        <p class="text-xl mb-8 text-blue-100">Let's discuss how we can help transform your business with our IT solutions.</p>
        <a href="/contact" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors inline-block">
            Get in Touch
        </a>
    </div>
</section>
@endsection
