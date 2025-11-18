# Deployment Checklist

## Pre-Deployment Verification

### ✅ Essential Files Present
- [x] index.html (main page)
- [x] index.php (PHP version)
- [x] styles.css
- [x] script.js
- [x] search.js
- [x] All 14 city HTML pages
- [x] contact.php
- [x] track_search.php
- [x] send_search_email.php
- [x] search_listings.php
- [x] search_analytics.php
- [x] media/ folder with images

### ✅ Cleanup Completed
- [x] Removed development scripts (.ps1, .py)
- [x] Removed template files
- [x] Removed documentation files
- [x] Removed test files

## Server Configuration

### For PHP Hosting:
1. **PHP Version**: Ensure PHP 7.4+ is installed
2. **File Permissions**:
   - Directories: 755
   - Files: 644
   - search_tracking.json: 666 (will be created automatically)
3. **Email Configuration**:
   - Update email addresses in `contact.php` and `send_search_email.php`
   - Configure PHP mail() or SMTP settings
4. **Required PHP Extensions**:
   - curl (for HAR.com integration)
   - json (for search tracking)

### For Static Hosting:
- Only HTML/CSS/JS files needed
- PHP functionality will not work
- Contact forms will not function

## Post-Deployment Tasks

1. **Test All Pages**:
   - Visit main page (index.html)
   - Test all 14 city pages
   - Verify "Who We Serve" dropdown works
   - Check all internal links

2. **Test Functionality**:
   - Contact form submission
   - Home search feature
   - Search tracking (check search_analytics.php)
   - Email notifications

3. **SEO Setup**:
   - Submit sitemap to Google Search Console
   - Verify all city pages are indexed
   - Set up Google Analytics (if desired)
   - Claim Google Business Profile

4. **Performance**:
   - Test page load speeds
   - Verify images are optimized
   - Check mobile responsiveness

## File Structure for Upload

```
/
├── index.html
├── index.php
├── styles.css
├── script.js
├── search.js
├── contact.php
├── track_search.php
├── send_search_email.php
├── search_listings.php
├── search_analytics.php
├── pearland.html
├── league-city.html
├── friendswood.html
├── clear-lake.html
├── pasadena.html
├── sugar-land.html
├── missouri-city.html
├── alvin.html
├── manvel.html
├── webster.html
├── seabrook.html
├── la-porte.html
├── deer-park.html
├── south-houston.html
└── media/
    ├── profile/
    │   └── trevor-hondros.jpg
    └── properties/
        ├── 11922-kewalo-basin.jpg
        ├── 23843-wimble-dr.jpg
        └── 3410-meadow-loop.jpg
```

## Notes

- All city pages link back to index.html for SEO
- Search functionality requires PHP and curl extension
- Email functionality requires proper server mail configuration
- Analytics accessible at: yourdomain.com/search_analytics.php

