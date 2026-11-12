<?php
/**
 * Main Router File
 * This file controls the main routing and checks permissions
 */

session_start();

// Set base URL for assets
$base_url = '/';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page
    header('Location: auth/login.php');
    exit();
}

// Check user role and redirect accordingly
if ($_SESSION['role'] === 'admin') {
    header('Location: admin/dashboard.php');
} else {
    header('Location: user/devices.php');
}
exit();
