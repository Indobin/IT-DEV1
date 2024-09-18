// alert.js
// alert.js
console.log("alert.js loaded");

document.addEventListener('DOMContentLoaded', () => {
    const flashData = document.getElementById('flash-data');
    
    if (flashData) {
        console.log("Flash data found:", flashData.dataset);
        Swal.fire({
            icon: flashData.dataset.type,
            title: flashData.dataset.title,
            text: flashData.dataset.message,
            showConfirmButton: true
        });
    } else {
        console.log("No flash data found");
    }
});




// Function untuk konfirmasi penghapusan produk
function confirmDelete(id, deleteUrl) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data produk akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
        width: '400px',  // Ukuran alert
        height: '250px',  // Padding
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect ke URL penghapusan
            window.location.href = deleteUrl + '/' + id;
        }
    });
}
