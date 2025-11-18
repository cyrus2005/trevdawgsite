# cPanel Deployment Checklist for HDRS Realty Co.

## Pre-Deployment Preparation

### ✅ Files Ready
- [ ] All files organized in folder structure
- [ ] All email addresses updated to `leads@hdrsrealtyco.com`
- [ ] All file paths verified
- [ ] All forms tested locally (if possible)

## Step 1: Access cPanel

1. [ ] Log into your cPanel account
   - URL: Usually `https://yourdomain.com/cpanel` or provided by hosting company
   - Username: Your cPanel username
   - Password: Your cPanel password

## Step 2: Upload Files via File Manager

### Option A: Using cPanel File Manager (Recommended for beginners)

1. [ ] Navigate to **File Manager** in cPanel
2. [ ] Go to **public_html** folder (this is your website root)
   - If you have a subdomain, use the appropriate folder
   - For addon domains, use the domain's folder
3. [ ] Delete any default files (index.html, welcome.html, etc.) if present
4. [ ] Upload all files maintaining the folder structure:
   - Upload `index.html` and `index.php` to root
   - Upload entire `cities/` folder
   - Upload entire `assets/` folder (with css/, js/, php/, media/ subfolders)
   - Upload `README.md`, `DEPLOYMENT_CHECKLIST.md`, `FOLDER_STRUCTURE.md` (optional)

### Option B: Using FTP Client (Faster for large uploads)

1. [ ] Get FTP credentials from cPanel:
   - Go to **FTP Accounts** in cPanel
   - Note: FTP host, username, password, port (usually 21)
2. [ ] Connect using FTP client (FileZilla, WinSCP, etc.)
3. [ ] Navigate to `public_html` folder
4. [ ] Upload all files maintaining folder structure

## Step 3: Set File Permissions

1. [ ] In File Manager, set folder permissions:
   - Right-click `assets/php/` folder → **Change Permissions**
   - Set to **755** (rwxr-xr-x)
   - Apply to subdirectories

2. [ ] Set file permissions:
   - All `.php` files: **644** (rw-r--r--)
   - All `.html` files: **644** (rw-r--r--)
   - All `.js` and `.css` files: **644** (rw-r--r--)

3. [ ] Create and set permissions for `search_tracking.json`:
   - Create empty file `search_tracking.json` in root directory
   - Set permissions to **666** (rw-rw-rw-) so PHP can write to it
   - Or set to **644** if 666 doesn't work

## Step 4: Configure PHP Settings

1. [ ] Check PHP version:
   - Go to **Select PHP Version** in cPanel
   - Ensure PHP 7.4 or higher is selected
   - Click **Save**

2. [ ] Enable required PHP extensions:
   - In **Select PHP Version**, click **Extensions**
   - Ensure these are enabled:
     - ✅ `curl` (for HAR.com integration)
     - ✅ `json` (for search tracking)
     - ✅ `mail` (for email functionality)

3. [ ] Configure PHP settings (if needed):
   - Go to **MultiPHP INI Editor**
   - Ensure `allow_url_fopen = On` (for HAR.com fetching)
   - Ensure `file_uploads = On`

## Step 5: Configure Email Settings

1. [ ] Verify email account exists:
   - Go to **Email Accounts** in cPanel
   - Ensure `leads@hdrsrealtyco.com` email account exists
   - If not, create it:
     - Click **Create**
     - Email: `leads`
     - Domain: `hdrsrealtyco.com` (or your domain)
     - Set password
     - Click **Create Account**

2. [ ] Test email functionality:
   - Send a test email to `leads@hdrsrealtyco.com`
   - Check if emails are being received

3. [ ] Configure email routing (if needed):
   - In **Email Routing**, ensure emails are delivered to the mailbox
   - Or set up email forwarding if needed

## Step 6: Test Website Functionality

### Test Main Pages
1. [ ] Visit your domain: `https://yourdomain.com`
   - Should load `index.html` or `index.php`
   - Check all images load correctly
   - Check CSS styling is applied

2. [ ] Test city pages:
   - Visit: `https://yourdomain.com/cities/pearland.html`
   - Verify all city pages load
   - Check links back to main page work

### Test Contact Form
1. [ ] Go to contact section on main page
2. [ ] Fill out contact form:
   - First Name: Test
   - Last Name: User
   - Email: your-test-email@example.com
   - Phone: (optional)
   - Message: Test message
3. [ ] Submit form
4. [ ] Check email inbox `leads@hdrsrealtyco.com`:
   - [ ] Email received with form submission
   - [ ] All information included correctly
5. [ ] Verify success message appears on page

### Test Search Functionality
1. [ ] Go to search section on main page
2. [ ] Fill out search form:
   - City: Pearland
   - Email: your-test-email@example.com
   - Other criteria (optional)
3. [ ] Submit search
4. [ ] Check email inbox `leads@hdrsrealtyco.com`:
   - [ ] Email received with search criteria
   - [ ] All search information included
5. [ ] Verify search results display (or HAR.com link works)

### Test Analytics
1. [ ] Visit: `https://yourdomain.com/assets/php/search_analytics.php`
2. [ ] Should display search analytics (if searches have been made)
3. [ ] **IMPORTANT**: Password protect this page in production!

## Step 7: Security Settings

1. [ ] Password protect analytics page:
   - Go to **Password Protect Directories** in cPanel
   - Navigate to `public_html/assets/php/`
   - Click **Protect**
   - Create username and password for `search_analytics.php`
   - Note: This prevents public access to search data

2. [ ] Set up .htaccess (optional but recommended):
   - Create `.htaccess` file in root
   - Add security headers (provided below)

3. [ ] Verify file permissions are correct (not too permissive)

## Step 8: Domain and DNS (If Setting Up New Domain)

1. [ ] Point domain to hosting:
   - Update nameservers at domain registrar
   - Nameservers provided by hosting company
   - Wait 24-48 hours for propagation

2. [ ] Add domain in cPanel:
   - Go to **Addon Domains** or **Subdomains**
   - Add your domain
   - Point to `public_html` or subdirectory

## Step 9: SSL Certificate (HTTPS)

1. [ ] Install SSL certificate:
   - Go to **SSL/TLS Status** in cPanel
   - Select your domain
   - Click **Run AutoSSL** (if available)
   - Or install Let's Encrypt certificate

2. [ ] Force HTTPS (optional):
   - Add redirect in `.htaccess` (provided below)

## Step 10: Final Testing

1. [ ] Test on desktop browser
2. [ ] Test on mobile device
3. [ ] Test all forms submit correctly
4. [ ] Test all email notifications work
5. [ ] Test all links work
6. [ ] Test search functionality
7. [ ] Verify all images load
8. [ ] Check page load speed

## Step 11: Google Services Setup (Optional but Recommended)

1. [ ] Submit sitemap to Google Search Console
2. [ ] Set up Google Analytics (if desired)
3. [ ] Verify Google Business Profile
4. [ ] Submit all city pages for indexing

## Troubleshooting Common Issues

### Emails Not Sending
- [ ] Check spam folder
- [ ] Verify email account exists in cPanel
- [ ] Check PHP mail() function is enabled
- [ ] Consider using SMTP instead of mail() (requires additional configuration)

### Forms Not Working
- [ ] Check file permissions (755 for folders, 644 for files)
- [ ] Verify PHP is enabled
- [ ] Check error logs in cPanel
- [ ] Verify form action paths are correct

### Search Tracking Not Working
- [ ] Check `search_tracking.json` file exists and is writable (666 or 644)
- [ ] Verify PHP can write to root directory
- [ ] Check PHP error logs

### Images Not Loading
- [ ] Verify `assets/media/` folder uploaded correctly
- [ ] Check file paths in HTML
- [ ] Verify file permissions

### 404 Errors on Pages
- [ ] Check file names match exactly (case-sensitive on Linux)
- [ ] Verify folder structure is correct
- [ ] Check .htaccess isn't blocking files

## Additional Configuration Files

### .htaccess for Security (Create in root)
```apache
# Security Headers
<IfModule mod_headers.c>
    Header set X-Content-Type-Options "nosniff"
    Header set X-Frame-Options "SAMEORIGIN"
    Header set X-XSS-Protection "1; mode=block"
</IfModule>

# Force HTTPS (uncomment if SSL is installed)
# RewriteEngine On
# RewriteCond %{HTTPS} off
# RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Prevent directory listing
Options -Indexes

# Protect sensitive files
<FilesMatch "\.(json|log)$">
    Order allow,deny
    Deny from all
</FilesMatch>
```

### robots.txt (Create in root)
```
User-agent: *
Allow: /
Disallow: /assets/php/
Sitemap: https://yourdomain.com/sitemap.xml
```

## Post-Deployment Checklist

- [ ] All pages load correctly
- [ ] Contact form sends emails to leads@hdrsrealtyco.com
- [ ] Search form sends emails to leads@hdrsrealtyco.com
- [ ] All city pages accessible
- [ ] All links work
- [ ] Mobile responsive
- [ ] SSL certificate installed
- [ ] Analytics page password protected
- [ ] Email notifications working
- [ ] Search tracking saving data

## Support Contacts

- **Hosting Support**: Contact your hosting provider
- **cPanel Documentation**: https://docs.cpanel.net/
- **PHP Documentation**: https://www.php.net/docs.php

---

## Quick Reference: File Structure on Server

```
public_html/
├── index.html
├── index.php
├── search_tracking.json (create this file, set to 666)
├── .htaccess (optional)
├── robots.txt (optional)
├── cities/
│   └── [14 city HTML files]
└── assets/
    ├── css/
    │   └── styles.css
    ├── js/
    │   ├── script.js
    │   └── search.js
    ├── php/
    │   ├── contact.php
    │   ├── track_search.php
    │   ├── send_search_email.php
    │   ├── search_listings.php
    │   └── search_analytics.php (password protect!)
    └── media/
        ├── profile/
        │   └── trevor-hondros.jpg
        └── properties/
            └── [3 property images]
```

---

**Last Updated**: Ready for cPanel deployment
**Email Destination**: leads@hdrsrealtyco.com
**PHP Version Required**: 7.4+

