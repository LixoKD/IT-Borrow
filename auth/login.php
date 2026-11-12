<?php
/**
 * Login Page
 * User authentication page
 */

session_start();

// If already logged in, redirect
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] === 'admin') {
        header('Location: ../admin/dashboard.php');
    } else {
        header('Location: ../user/devices.php');
    }
    exit();
}

$page_title = 'เข้าสู่ระบบ - IT Borrow System';
$base_url = '../';

// Include header with Vercel Analytics
include '../includes/header.php';
?>

<!-- Login Page Content -->
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">
                        <i class="bi bi-laptop"></i> เข้าสู่ระบบ
                    </h3>
                    <form id="loginForm" method="POST" action="">
                        <div class="mb-3">
                            <label for="username" class="form-label">ชื่อผู้ใช้งาน</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">เข้าสู่ระบบ</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="register.php" class="text-decoration-none">ลงทะเบียนผู้ใช้งานใหม่</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
