# 🏢 IT Solution - Company Profile Website

Modern company profile website untuk jasa IT solution yang dibangun dengan Laravel, Tailwind CSS v4, dan Lucide Icons.

## ✨ Fitur

- 🎨 **Modern Design** - Clean dan professional design
- 🌓 **Dark/Light Mode** - Toggle tema dengan localStorage persistence
- 📱 **Responsive** - Mobile-first design yang sempurna di semua device
- ⚡ **Fast Performance** - Optimized dengan Vite dan Tailwind CSS v4
- 🎯 **SEO Friendly** - Semantic HTML dan meta tags
- 🔤 **Font Poppins** - Typography yang modern dan readable
- 🎨 **Lucide Icons** - Beautiful SVG icons

## 🛠️ Tech Stack

- **Framework**: Laravel 12.x
- **CSS**: Tailwind CSS v4
- **Icons**: Lucide Icons
- **Font**: Google Fonts (Poppins)
- **Build Tool**: Vite
- **Database**: SQLite (default) / MySQL / PostgreSQL

## 📄 Halaman

1. **Home** - Hero section, services overview, why choose us
2. **Services** - Detail layanan IT yang ditawarkan:
   - Web Development
   - CCTV Installation
   - Network Setup
   - Information Systems
3. **About** - Profil perusahaan, misi, visi, dan nilai
4. **Contact** - Informasi kontak dan form kontak

## 🚀 Quick Start

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js >= 18
- NPM atau Yarn

### Installation

1. Clone repository
```bash
git clone https://github.com/username/company-profile.git
cd company-profile
```

2. Install PHP dependencies
```bash
composer install
```

3. Install NPM dependencies
```bash
npm install
```

4. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

5. Setup database
```bash
# Untuk SQLite (default)
touch database/database.sqlite
php artisan migrate

# Atau konfigurasi MySQL/PostgreSQL di .env
```

6. Build assets
```bash
npm run build
```

7. Run development server
```bash
php artisan serve
```

8. Akses aplikasi di `http://localhost:8000`

## 🔧 Development

Untuk development dengan hot reload:

```bash
# Terminal 1 - Laravel server
php artisan serve

# Terminal 2 - Vite dev server
npm run dev
```

## 🌐 Deploy ke Coolify

Panduan lengkap deploy ke Coolify ada di **[DEPLOY.md](DEPLOY.md)**

Quick steps:
1. Push project ke Git repository
2. Buat project baru di Coolify
3. Connect dengan repository
4. Set environment variables (lihat `.env.coolify`)
5. Deploy!

## 📦 Build untuk Production

```bash
npm run build
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🎨 Customization

### Mengubah Warna

Edit `resources/css/app.css` untuk custom color palette:

```css
@theme {
    --color-primary: #3b82f6;
    --color-secondary: #8b5cf6;
}
```

### Mengubah Font

Ganti Google Fonts import di `resources/css/app.css`:

```css
@import url('https://fonts.googleapis.com/css2?family=YourFont:wght@300;400;500;600;700&display=swap');

@theme {
    --font-sans: 'YourFont', sans-serif;
}
```

### Menambah/Mengubah Content

Edit file Blade di `resources/views/`:
- `home.blade.php` - Halaman utama
- `services.blade.php` - Halaman services
- `about.blade.php` - Halaman about
- `contact.blade.php` - Halaman contact

## 📝 Environment Variables

Lihat file `.env.coolify` untuk daftar lengkap environment variables yang diperlukan.

Key variables:
- `APP_NAME` - Nama aplikasi
- `APP_URL` - URL aplikasi
- `DB_CONNECTION` - Database driver (sqlite/mysql/pgsql)

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👤 Author

**Your Name**
- GitHub: [@username](https://github.com/username)

## 🙏 Acknowledgments

- Laravel Framework
- Tailwind CSS
- Lucide Icons
- Coolify for hosting

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# belajar-laravel-company-profile
