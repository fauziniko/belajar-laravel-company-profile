@extends('layouts.app')

@section('title', 'Our Services - IT Solution')

@section('content')
<!-- Page Header -->
<section class="bg-linear-to-r from-blue-600 to-blue-800 dark:from-blue-900 dark:to-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Services</h1>
        <p class="text-xl text-blue-100">Comprehensive IT solutions for your business needs</p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Web Development -->
            <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="h-48 bg-linear-to-r from-blue-500 to-blue-700 dark:from-blue-800 dark:to-gray-800 flex items-center justify-center">
                    <i data-lucide="code" class="w-24 h-24 text-white"></i>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Web Development</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        We create modern, responsive, and user-friendly websites and web applications tailored to your business needs.
                        Our expertise includes e-commerce platforms, corporate websites, and custom web solutions.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Responsive Design</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Modern Frameworks (Laravel, React, Vue)</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">SEO Optimization</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">E-commerce Solutions</span>
                        </li>
                    </ul>
                    <a href="/services/web-development" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors inline-block">
                        View Details
                    </a>
                </div>
            </div>
            
            <!-- CCTV Installation -->
            <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="h-48 bg-linear-to-r from-purple-500 to-purple-700 dark:from-purple-800 dark:to-gray-800 flex items-center justify-center">
                    <i data-lucide="camera" class="w-24 h-24 text-white"></i>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">CCTV Installation</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Professional CCTV camera installation and surveillance system setup for homes and businesses.
                        We provide end-to-end security solutions with high-quality equipment and expert installation.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">HD & 4K Camera Options</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Remote Monitoring Access</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Night Vision Support</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Storage & Backup Solutions</span>
                        </li>
                    </ul>
                    <a href="/services/cctv-installation" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors inline-block">
                        View Details
                    </a>
                </div>
            </div>
            
            <!-- Network Setup -->
            <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="h-48 bg-linear-to-r from-green-500 to-green-700 dark:from-green-800 dark:to-gray-800 flex items-center justify-center">
                    <i data-lucide="network" class="w-24 h-24 text-white"></i>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Network Setup</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Complete network infrastructure setup including internet connectivity, LAN configuration, 
                        and wireless network deployment for optimal performance and reliability.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">LAN & WiFi Configuration</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Router & Switch Setup</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Network Security Implementation</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Cable Management</span>
                        </li>
                    </ul>
                    <a href="/services/network-setup" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors inline-block">
                        View Details
                    </a>
                </div>
            </div>
            
            <!-- Information Systems -->
            <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="h-48 bg-linear-to-r from-orange-500 to-orange-700 dark:from-orange-800 dark:to-gray-800 flex items-center justify-center">
                    <i data-lucide="database" class="w-24 h-24 text-white"></i>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Information Systems</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Custom information system development to streamline your business processes, improve efficiency, 
                        and provide better data management and reporting capabilities.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Custom Software Development</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Database Design & Management</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">Reporting & Analytics</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2 mt-1"></i>
                            <span class="text-gray-700 dark:text-gray-300">System Integration</span>
                        </li>
                    </ul>
                    <a href="/services/information-systems" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors inline-block">
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
