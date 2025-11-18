# HDRS Realty Co. - Real Estate Website

Professional real estate website for Trevor Hondros serving the Houston area.

## Website Structure

### Main Pages
- **index.html** - Main homepage (static version)
- **index.php** - Main homepage (PHP version with contact form functionality)

### City Pages (SEO Optimized)
14 dedicated city pages for local SEO:
- pearland.html
- league-city.html
- friendswood.html
- clear-lake.html
- pasadena.html
- sugar-land.html
- missouri-city.html
- alvin.html
- manvel.html
- webster.html
- seabrook.html
- la-porte.html
- deer-park.html
- south-houston.html

### Assets
- **styles.css** - Custom styles
- **script.js** - Main JavaScript functionality
- **search.js** - Home search functionality
- **media/** - Images (profile and properties)

### PHP Files (Server-side)
- **contact.php** - Contact form handler
- **track_search.php** - Search tracking endpoint
- **send_search_email.php** - Email handler for searches
- **search_listings.php** - HAR.com search integration
- **search_analytics.php** - Search analytics dashboard

## Deployment Requirements

### For Static Hosting (HTML only)
- Upload all `.html` files
- Upload `styles.css`, `script.js`, and `search.js`
- Upload `media/` folder with all images
- Note: Contact forms and search tracking will not work without PHP

### For PHP Hosting (Full functionality)
- Upload all files including `.php` files
- Ensure PHP 7.4+ is installed
- Configure email settings in `contact.php` and `send_search_email.php`
- Set proper file permissions (755 for directories, 644 for files)
- Ensure `search_tracking.json` is writable (will be created automatically)

## Features

- ✅ Responsive design (mobile-friendly)
- ✅ SEO-optimized city pages
- ✅ Home search integration with HAR.com
- ✅ Contact forms
- ✅ Search tracking and analytics
- ✅ Luxury design aesthetic
- ✅ Multiple CTAs throughout site

## Contact Information

- **Agent**: Trevor Hondros
- **Company**: HDRS Realty Co. | Priority One Real Estate
- **Phone**: (713) 408-0604
- **Email**: info@hdrsrealty.com

## Notes

- All city pages link back to the main page for SEO
- Search functionality requires PHP and proper server configuration
- Email functionality requires PHP mail() or SMTP configuration
- Analytics dashboard accessible at `/search_analytics.php`

