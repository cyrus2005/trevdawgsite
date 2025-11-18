# Website Folder Structure

## Current Organization

```
/
├── index.html              # Main homepage (static)
├── index.php               # Main homepage (PHP version)
├── README.md               # Documentation
├── DEPLOYMENT_CHECKLIST.md # Deployment guide
├── FOLDER_STRUCTURE.md     # This file
│
├── cities/                 # City pages (SEO optimized)
│   ├── pearland.html
│   ├── league-city.html
│   ├── friendswood.html
│   ├── clear-lake.html
│   ├── pasadena.html
│   ├── sugar-land.html
│   ├── missouri-city.html
│   ├── alvin.html
│   ├── manvel.html
│   ├── webster.html
│   ├── seabrook.html
│   ├── la-porte.html
│   ├── deer-park.html
│   └── south-houston.html
│
└── assets/
    ├── css/
    │   └── styles.css      # Custom styles
    │
    ├── js/
    │   ├── script.js       # Main JavaScript
    │   └── search.js       # Search functionality
    │
    ├── php/
    │   ├── contact.php              # Contact form handler
    │   ├── track_search.php         # Search tracking
    │   ├── send_search_email.php    # Search email notifications
    │   ├── search_listings.php      # HAR.com integration
    │   └── search_analytics.php      # Analytics dashboard
    │
    └── media/
        ├── profile/
        │   └── trevor-hondros.jpg
        └── properties/
            ├── 11922-kewalo-basin.jpg
            ├── 23843-wimble-dr.jpg
            └── 3410-meadow-loop.jpg
```

## Path References

### From Root (index.html, index.php)
- CSS: `assets/css/styles.css`
- JS: `assets/js/script.js`, `assets/js/search.js`
- Media: `assets/media/profile/...`, `assets/media/properties/...`
- City Pages: `cities/[city-name].html`
- PHP: `assets/php/[file].php`

### From City Pages (cities/*.html)
- CSS: `../assets/css/styles.css`
- Main Page: `../index.html`
- Media: `../assets/media/...`

### From PHP Files (assets/php/*.php)
- JSON File: `__DIR__ . '/../../search_tracking.json'` (root directory)
- Redirects: `/index.php` (absolute path)

## File Path Updates Completed

✅ All HTML files updated with correct paths
✅ All JavaScript files updated with correct PHP paths
✅ All PHP files updated with correct JSON file paths
✅ All media references updated
✅ All city page links updated
✅ All CSS references updated

## Notes

- `search_tracking.json` will be created automatically in the root directory
- All redirects in PHP use absolute paths (`/index.php`)
- City pages use relative paths (`../`) to access assets
- Main pages use relative paths from root

