<?php
/**
 * Admin Dashboard
 * Summary statistics and overview for administrators
 */

session_start();

// Check authentication and admin role
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../auth/login.php');
    exit();
}

$page_title = 'แดชบอร์ด - Admin';
$base_url = '../';

// Include header with Vercel Analytics
include '../includes/header.php';
?>

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar would go here -->
        <div class="col-md-10 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">
                    <i class="bi bi-speedometer2"></i> แดชบอร์ด
                </h1>
            </div>

            <!-- Statistics Cards -->
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">อุปกรณ์ทั้งหมด</h5>
                            <p class="card-text display-6">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">อุปกรณ์ว่าง</h5>
                            <p class="card-text display-6">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">กำลังยืม</h5>
                            <p class="card-text display-6">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card text-white bg-info">
                        <div class="card-body">
                            <h5 class="card-title">รออนุมัติ</h5>
                            <p class="card-text display-6">0</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Requests Table -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">คำขอล่าสุด</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ผู้ใช้งาน</th>
                                <th>อุปกรณ์</th>
                                <th>วันที่ขอยืม</th>
                                <th>สถานะ</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
