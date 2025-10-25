# 🚀 Deploy Laravel Company Profile ke Coolify

Panduan lengkap untuk deploy aplikasi Laravel company profile ke Coolify.

## 📋 Prerequisites

1. **Akun Coolify** yang sudah terinstall dan berjalan
2. **Git Repository** (GitHub/GitLab/Bitbucket) - Push project ini ke repository
3. **Domain** (opsional, tapi direkomendasikan)

## 🔧 Persiapan Project

### 1. Push ke Git Repository

```bash
# Inisialisasi git jika belum
git init

# Tambahkan remote repository
git remote add origin https://github.com/username/company-profile.git

# Add dan commit semua file
git add .
git commit -m "Initial commit - Laravel company profile"

# Push ke repository
git push -u origin main
```

### 2. File-file yang Sudah Disiapkan

✅ `Dockerfile` - Container configuration untuk production
✅ `.dockerignore` - Exclude file yang tidak perlu
✅ `docker/php/custom.ini` - PHP configuration untuk production

## 🌐 Deploy ke Coolify

### Step 1: Buat Project Baru di Coolify

1. Login ke Coolify dashboard Anda
2. Klik **"+ New Resource"** atau **"Add New Project"**
3. Pilih **"Public Repository"** atau **"Private Repository"**

### Step 2: Konfigurasi Repository

1. **Repository URL**: Masukkan URL git repository Anda
   ```
   https://github.com/username/company-profile.git
   ```

2. **Branch**: Pilih branch yang akan di-deploy (biasanya `main`)

3. **Build Pack**: Pilih **"Dockerfile"**

### Step 3: Environment Variables

Pada tab **Environment Variables**, tambahkan variabel berikut:

#### ⚙️ Required Environment Variables:

```env
# Application
APP_NAME="IT Solution"
APP_ENV=production
APP_KEY=base64:GENERATE_KEY_BARU
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Database (SQLite - Default)
DB_CONNECTION=sqlite
# Atau jika pakai MySQL/PostgreSQL:
# DB_CONNECTION=mysql
# DB_HOST=mysql
# DB_PORT=3306
# DB_DATABASE=company_profile
# DB_USERNAME=root
# DB_PASSWORD=your_password

# Session & Cache
SESSION_DRIVER=file
CACHE_DRIVER=file
QUEUE_CONNECTION=sync

# Logging
LOG_CHANNEL=stack
LOG_LEVEL=error
```

#### 🔑 Generate APP_KEY:

Jalankan command ini di local untuk generate key baru:
```bash
php artisan key:generate --show
```

Copy output dan masukkan ke environment variable `APP_KEY`

### Step 4: Port Configuration

1. Di **Port Settings**, set port ke **8000**
2. Enable **Public Port** jika ingin aplikasi bisa diakses

### Step 5: Domain Setup (Opsional)

1. Di **Domains**, tambahkan domain Anda:
   ```
   yourdomain.com
   ```
2. Coolify akan otomatis setup SSL/HTTPS dengan Let's Encrypt

### Step 6: Deploy!

1. Klik tombol **"Deploy"**
2. Tunggu proses build selesai (biasanya 3-5 menit untuk pertama kali)
3. Monitor logs untuk memastikan tidak ada error

## 📊 Health Check

Setelah deploy, cek apakah aplikasi berjalan:

1. Akses URL yang diberikan Coolify atau domain Anda
2. Test dark mode toggle
3. Navigate ke semua halaman (Home, Services, About, Contact)

## 🔍 Troubleshooting

### Error: "No application encryption key has been specified"

**Solusi**: Pastikan `APP_KEY` sudah di-set di environment variables

### Error: Database Connection

**Solusi untuk SQLite**:
- Pastikan `DB_CONNECTION=sqlite` 
- File database akan otomatis dibuat oleh Dockerfile

**Solusi untuk MySQL/PostgreSQL**:
- Buat database service di Coolify
- Update environment variables dengan credentials database

### Error: Permission Denied

**Solusi**: 
- Dockerfile sudah mengatur permission otomatis
- Jika masih error, tambahkan di Dockerfile:
  ```dockerfile
  RUN chmod -R 775 /var/www/html/storage
  RUN chmod -R 775 /var/www/html/bootstrap/cache
  ```

### Assets tidak load (CSS/JS 404)

**Solusi**:
- Pastikan `npm run build` berjalan di Dockerfile
- Check `APP_URL` environment variable sesuai dengan domain Anda

## 🔄 Update/Redeploy

Untuk deploy update terbaru:

1. Push changes ke repository:
   ```bash
   git add .
   git commit -m "Update: description"
   git push
   ```

2. Di Coolify dashboard:
   - Klik tombol **"Redeploy"** atau
   - Enable **"Auto Deploy"** untuk otomatis deploy saat ada push ke repository

## 🎨 Fitur yang Akan Berjalan:

✅ Responsive design (mobile & desktop)
✅ Dark/Light mode dengan localStorage
✅ Lucide icons
✅ Tailwind CSS styling
✅ Font Poppins dari Google Fonts
✅ All pages: Home, Services, About, Contact

## 📱 Akses Aplikasi

Setelah berhasil deploy:

- **Coolify URL**: https://your-app.coolify.domain
- **Custom Domain**: https://yourdomain.com

## 🛡️ Security Checklist

- ✅ `APP_DEBUG=false` di production
- ✅ `APP_ENV=production`
- ✅ Strong `APP_KEY`
- ✅ HTTPS enabled (via Coolify/Let's Encrypt)
- ✅ `.env` tidak ter-commit ke git

## 📞 Support

Jika ada masalah:
1. Check Coolify logs
2. Check browser console untuk error frontend
3. Verify semua environment variables sudah benar

---

**Selamat! 🎉 Aplikasi Laravel company profile Anda sudah live di production!**
