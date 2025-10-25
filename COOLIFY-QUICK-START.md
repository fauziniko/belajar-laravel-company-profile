# 🚀 Coolify Deployment - Quick Reference

## Checklist Sebelum Deploy

- [ ] Project sudah di-push ke Git repository (GitHub/GitLab/Bitbucket)
- [ ] File `Dockerfile` sudah ada
- [ ] File `.dockerignore` sudah ada
- [ ] Generate `APP_KEY` dengan: `php artisan key:generate --show`

## Step-by-Step Deploy

### 1. Login ke Coolify Dashboard
URL: `https://your-coolify-domain.com`

### 2. Create New Resource
Click: **+ New Resource** → **Public/Private Repository**

### 3. Repository Configuration
```
Repository URL: https://github.com/username/company-profile.git
Branch: main
Build Pack: Dockerfile
```

### 4. Set Environment Variables

Copy dan paste dari `.env.coolify`, jangan lupa ganti:
- `APP_KEY` - Hasil dari `php artisan key:generate --show`
- `APP_URL` - Domain Anda
- Database credentials (jika pakai MySQL/PostgreSQL)

**Minimum Required:**
```env
APP_NAME="IT Solution"
APP_ENV=production
APP_KEY=base64:YOUR_GENERATED_KEY_HERE
APP_DEBUG=false
APP_URL=https://yourdomain.com
DB_CONNECTION=sqlite
```

### 5. Port Configuration
- Port: `8000`
- Enable Public Port: ✅

### 6. Domain Setup (Optional)
- Add domain: `yourdomain.com`
- SSL: Coolify auto-generates with Let's Encrypt

### 7. Deploy
Click: **Deploy** button

### 8. Monitor Build
Watch logs untuk memastikan:
- ✅ Dependencies installed
- ✅ Assets built successfully
- ✅ Migrations ran
- ✅ Server started on port 8000

## Troubleshooting

### Build Failed - APP_KEY Error
```bash
# Generate new key
php artisan key:generate --show

# Copy output dan masukkan ke Environment Variables
```

### Database Error
**SQLite (Recommended untuk simple deployment):**
```env
DB_CONNECTION=sqlite
```

**MySQL:**
```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=company_profile
DB_USERNAME=root
DB_PASSWORD=your_password
```

### Assets Not Loading (404)
Check:
1. `APP_URL` matches your actual domain
2. Build logs show "npm run build" succeeded
3. Public directory is accessible

### Permission Denied
Dockerfile already handles this, but if needed:
```dockerfile
RUN chmod -R 775 /var/www/html/storage
RUN chmod -R 775 /var/www/html/bootstrap/cache
```

## Post-Deployment

### Verify Deployment
- [ ] Website accessible via URL
- [ ] All pages load (Home, Services, About, Contact)
- [ ] Dark mode toggle works
- [ ] Icons display correctly
- [ ] Forms work (if enabled)

### Enable Auto-Deploy (Optional)
Settings → Enable **Auto Deploy on Push**

Setiap kali push ke branch `main`, Coolify akan auto-deploy.

## Update/Redeploy

```bash
# 1. Make changes locally
# 2. Commit and push
git add .
git commit -m "Update: description"
git push

# 3. In Coolify Dashboard
Click: "Redeploy" button
```

## Monitoring

### View Logs
Dashboard → Your App → **Logs** tab

### Check Status
- Build Status: Success/Failed
- Runtime Status: Running/Stopped
- Resource Usage: CPU/Memory

## Quick Commands

### View Application Logs (in Coolify)
```bash
# Real-time logs
tail -f storage/logs/laravel.log
```

### Clear Cache (if needed)
Add temporary shell in Coolify:
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## Support Resources

- 📖 Full Guide: See `DEPLOY.md`
- 🌐 Coolify Docs: https://coolify.io/docs
- 💬 Coolify Discord: https://discord.gg/coolify

---

**Happy Deploying! 🎉**
