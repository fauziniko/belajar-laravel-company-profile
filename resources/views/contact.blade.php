@extends('layouts.app')

@section('title', 'Contact Us - IT Solution')

@section('content')
<!-- Page Header -->
<section class="bg-linear-to-r from-blue-600 to-blue-800 dark:from-blue-900 dark:to-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
        <p class="text-xl text-blue-100">Get in touch with our team</p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Let's Connect</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-8">
                    Have a question or want to discuss your project? We're here to help! 
                    Reach out to us through any of the following channels.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-100 dark:bg-blue-900 w-12 h-12 rounded-lg flex items-center justify-center shrink-0">
                            <i data-lucide="mail" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Email</h3>
                            <p class="text-gray-600 dark:text-gray-300">info@itsolution.com</p>
                            <p class="text-gray-600 dark:text-gray-300">support@itsolution.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-100 dark:bg-blue-900 w-12 h-12 rounded-lg flex items-center justify-center shrink-0">
                            <i data-lucide="phone" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Phone</h3>
                            <p class="text-gray-600 dark:text-gray-300">+62 812-3456-7890</p>
                            <p class="text-gray-600 dark:text-gray-300">+62 821-9876-5432</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-100 dark:bg-blue-900 w-12 h-12 rounded-lg flex items-center justify-center shrink-0">
                            <i data-lucide="map-pin" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Office</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Jl. Sudirman No. 123<br>
                                Jakarta Pusat, DKI Jakarta<br>
                                Indonesia 10220
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-100 dark:bg-blue-900 w-12 h-12 rounded-lg flex items-center justify-center shrink-0">
                            <i data-lucide="clock" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Business Hours</h3>
                            <p class="text-gray-600 dark:text-gray-300">Monday - Friday: 9:00 AM - 6:00 PM</p>
                            <p class="text-gray-600 dark:text-gray-300">Saturday: 9:00 AM - 2:00 PM</p>
                            <p class="text-gray-600 dark:text-gray-300">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="mt-8">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-100 dark:bg-gray-800 hover:bg-blue-100 dark:hover:bg-blue-900 w-10 h-10 rounded-lg flex items-center justify-center transition-colors">
                            <i data-lucide="facebook" class="w-5 h-5 text-gray-600 dark:text-gray-400"></i>
                        </a>
                        <a href="#" class="bg-gray-100 dark:bg-gray-800 hover:bg-blue-100 dark:hover:bg-blue-900 w-10 h-10 rounded-lg flex items-center justify-center transition-colors">
                            <i data-lucide="twitter" class="w-5 h-5 text-gray-600 dark:text-gray-400"></i>
                        </a>
                        <a href="#" class="bg-gray-100 dark:bg-gray-800 hover:bg-blue-100 dark:hover:bg-blue-900 w-10 h-10 rounded-lg flex items-center justify-center transition-colors">
                            <i data-lucide="instagram" class="w-5 h-5 text-gray-600 dark:text-gray-400"></i>
                        </a>
                        <a href="#" class="bg-gray-100 dark:bg-gray-800 hover:bg-blue-100 dark:hover:bg-blue-900 w-10 h-10 rounded-lg flex items-center justify-center transition-colors">
                            <i data-lucide="linkedin" class="w-5 h-5 text-gray-600 dark:text-gray-400"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-lg">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send us a Message</h2>
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Full Name
                        </label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Phone Number
                        </label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Service Interest
                        </label>
                        <select id="service" name="service"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select a service</option>
                            <option value="web-development">Web Development</option>
                            <option value="cctv-installation">CCTV Installation</option>
                            <option value="network-setup">Network Setup</option>
                            <option value="information-systems">Information Systems</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Message
                        </label>
                        <textarea id="message" name="message" rows="4" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>
                    
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
