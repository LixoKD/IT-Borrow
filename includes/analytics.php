<?php
/**
 * Vercel Web Analytics Integration
 * This file should be included in the <head> section of your pages
 * Add <?php include 'includes/analytics.php'; ?> in your header.php or layout files
 */
?>
<script type="module">
  import { inject } from 'https://cdn.jsdelivr.net/npm/@vercel/analytics@1/dist/index.js';
  inject();
</script>
