/**
 * Main JavaScript File
 * Common functions and initializations
 */

// Initialize DataTables when document is ready
$(document).ready(function() {
    // Initialize all tables with DataTables
    if ($.fn.DataTable) {
        $('.data-table').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json'
            },
            responsive: true,
            pageLength: 10,
            order: [[0, 'desc']]
        });
    }
    
    // Add fade-in animation to main content
    $('.main-content').addClass('fade-in');
});

// SweetAlert2 helper functions
function showSuccess(title, text) {
    Swal.fire({
        icon: 'success',
        title: title,
        text: text,
        confirmButtonText: 'ตรงชนิดเถิด'
    });
}

function showError(title, text) {
    Swal.fire({
        icon: 'error',
        title: title,
        text: text,
        confirmButtonText: 'ตกลง'
    });
}

function showConfirm(title, text, callback) {
    Swal.fire({
        icon: 'question',
        title: title,
        text: text,
        showCancelButton: true,
        confirmButtonText: 'ยืนยัน',
        cancelButtonText: 'ยกเลิก'
    }).then((result) => {
        if (result.isConfirmed && callback) {
            callback();
        }
    });
}

// Form validation helper
function validateForm(formId) {
    const form = document.getElementById(formId);
    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return false;
    }
    return true;
}

// Console log to verify script loading
console.log('IT Borrow System - Main JS Loaded');
console.log('Vercel Web Analytics is active');
