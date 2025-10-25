@extends('layouts.app')

@section('title', 'About Us - IT Solution')

@section('content')
<!-- Page Header -->
<section class="bg-linear-to-r from-blue-600 to-blue-800 dark:from-blue-900 dark:to-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">About Us</h1>
        <p class="text-xl text-blue-100">Your trusted IT solution partner</p>
    </div>
</section>

<!-- About Content -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Who We Are</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    IT Solution is a leading provider of comprehensive IT services in Indonesia. With years of experience
                    in the industry, we specialize in delivering cutting-edge technology solutions that help businesses
                    grow and succeed in the digital age.
                </p>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Our team consists of highly skilled professionals who are passionate about technology and committed
                    to delivering exceptional results. We take pride in our ability to understand our clients' unique
                    needs and provide tailored solutions that exceed expectations.
                </p>
                <p class="text-gray-600 dark:text-gray-300">
                    From small startups to large enterprises, we've helped numerous clients transform their business
                    operations through innovative IT solutions.
                </p>
            </div>
            <div class="bg-gray-100 dark:bg-gray-800 rounded-lg h-96 flex items-center justify-center">
                <i data-lucide="server" class="w-48 h-48 text-blue-600 dark:text-blue-400"></i>
            </div>
        </div>
        
        <!-- Mission & Vision -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <div class="bg-blue-50 dark:bg-gray-800 p-8 rounded-lg">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-600 dark:bg-blue-500 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                        <i data-lucide="target" class="w-6 h-6 text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Our Mission</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-300">
                    To empower businesses with innovative IT solutions that drive growth, efficiency, and success.
                    We strive to be the most trusted technology partner by delivering excellence in every project.
                </p>
            </div>
            
            <div class="bg-blue-50 dark:bg-gray-800 p-8 rounded-lg">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-600 dark:bg-blue-500 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                        <i data-lucide="eye" class="w-6 h-6 text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Our Vision</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-300">
                    To be the leading IT solutions provider in Indonesia, recognized for our innovation, quality,
                    and commitment to customer success. We envision a future where technology empowers every business.
                </p>
            </div>
        </div>
        
        <!-- Values -->
        <div>
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Our Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center p-6">
                    <div class="bg-blue-100 dark:bg-blue-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="trophy" class="w-8 h-8 text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h4 class="font-bold text-gray-900 dark:text-white mb-2">Excellence</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300">We strive for excellence in everything we do</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-blue-100 dark:bg-blue-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="users" class="w-8 h-8 text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h4 class="font-bold text-gray-900 dark:text-white mb-2">Collaboration</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300">We work together to achieve great results</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-blue-100 dark:bg-blue-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="lightbulb" class="w-8 h-8 text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h4 class="font-bold text-gray-900 dark:text-white mb-2">Innovation</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300">We embrace new ideas and technologies</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-blue-100 dark:bg-blue-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="heart" class="w-8 h-8 text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h4 class="font-bold text-gray-900 dark:text-white mb-2">Integrity</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-300">We maintain the highest ethical standards</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
