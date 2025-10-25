import './bootstrap';
import { createIcons, Sun, Moon, Menu, Facebook, Twitter, Instagram, Linkedin, Mail, Phone, MapPin, Monitor, Camera, Network, Database, Code, Server, Shield, Clock, Check, Target, Eye, Trophy, Users, Lightbulb, Heart } from 'lucide';

// Initialize Lucide icons
document.addEventListener('DOMContentLoaded', () => {
    createIcons({
        icons: {
            Sun,
            Moon,
            Menu,
            Facebook,
            Twitter,
            Instagram,
            Linkedin,
            Mail,
            Phone,
            MapPin,
            Monitor,
            Camera,
            Network,
            Database,
            Code,
            Server,
            Shield,
            Clock,
            Check,
            Target,
            Eye,
            Trophy,
            Users,
            Lightbulb,
            Heart
        }
    });
    
    // Dark mode functionality
    const themeToggle = document.getElementById('theme-toggle');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');
    const htmlElement = document.documentElement;
    
    // Check for saved theme preference or default to 'light'
    const currentTheme = localStorage.getItem('theme') || 'light';
    
    if (currentTheme === 'dark') {
        htmlElement.classList.add('dark');
    }
    
    function toggleTheme() {
        htmlElement.classList.toggle('dark');
        
        const theme = htmlElement.classList.contains('dark') ? 'dark' : 'light';
        localStorage.setItem('theme', theme);
        
        // Reinitialize icons after theme change
        createIcons({
            icons: {
                Sun,
                Moon,
                Menu,
                Facebook,
                Twitter,
                Instagram,
                Linkedin,
                Mail,
                Phone,
                MapPin,
                Monitor,
                Camera,
                Network,
                Database,
                Code,
                Server,
                Shield,
                Clock,
                Check,
                Target,
                Eye,
                Trophy,
                Users,
                Lightbulb,
                Heart
            }
        });
    }
    
    if (themeToggle) {
        themeToggle.addEventListener('click', toggleTheme);
    }
    
    if (themeToggleMobile) {
        themeToggleMobile.addEventListener('click', toggleTheme);
    }
    
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
});

