# Vercel Web Analytics Setup

This document describes how Vercel Web Analytics has been integrated into the IT Borrow-Return System.

## Installation

The `@vercel/analytics` package has been installed via npm:

```bash
npm install @vercel/analytics
```

## Integration for PHP Project

Since this is a PHP-based project (not a JavaScript framework like Next.js or React), we're using the vanilla JavaScript approach to integrate Vercel Analytics.

### Files Created/Modified

1. **package.json** - Added to manage the @vercel/analytics dependency
2. **includes/analytics.php** - Created to inject the Vercel Analytics script
3. **includes/header.php** - Created/Updated to include analytics.php

### How It Works

The integration uses the ES Module import from a CDN to inject the Vercel Analytics tracking:

```php
<!-- includes/analytics.php -->
<script type="module">
  import { inject } from 'https://cdn.jsdelivr.net/npm/@vercel/analytics@1/dist/index.js';
  inject();
</script>
```

This script is automatically included in the `<head>` section through `includes/header.php`.

### Usage in Your Pages

Every PHP page should include the header file which now contains the analytics:

```php
<?php
$page_title = 'Your Page Title';
$base_url = '/'; // or '../' depending on directory depth
include 'includes/header.php';
?>

<!-- Your page content here -->

<?php include 'includes/footer.php'; ?>
```

## Enabling Analytics in Vercel Dashboard

To activate tracking:

1. Go to your Vercel project dashboard
2. Navigate to **Analytics** tab
3. Click **Enable Web Analytics**
4. Deploy your project to Vercel

The analytics will start tracking page views automatically once deployed to Vercel.

## Testing

You can test the integration locally:

1. Start your XAMPP server (Apache and MySQL)
2. Open your browser and navigate to `http://localhost/project/`
3. Open browser developer tools (F12)
4. Check the Console tab - you should see the analytics script loading
5. Check the Network tab - look for requests to Vercel's analytics endpoints

## Production Deployment

When deploying to Vercel:

1. Ensure your project is connected to Vercel
2. The analytics will automatically track visitors
3. View analytics data in your Vercel dashboard under the Analytics section

## Notes

- The analytics work on the client-side and don't require any PHP processing
- Page views are tracked automatically
- The script is lightweight and loaded asynchronously
- Analytics data will only appear in your Vercel dashboard after deployment to Vercel's platform

## Troubleshooting

If analytics aren't working:

1. Verify the script is loaded in your page source (View Page Source)
2. Check browser console for any JavaScript errors
3. Ensure you've enabled Web Analytics in your Vercel project settings
4. Confirm your site is deployed to Vercel (analytics only work on Vercel-hosted sites)
5. Wait a few minutes for data to appear in the dashboard after visiting pages

## References

- [Vercel Web Analytics Quickstart](https://vercel.com/docs/analytics/quickstart)
- [Vercel Analytics Package](https://www.npmjs.com/package/@vercel/analytics)
