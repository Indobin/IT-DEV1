

document.addEventListener('DOMContentLoaded', () => {
    const flashData = document.getElementById('flash-data');
    
    if (flashData) {
        console.log("Flash data found:", flashData.dataset);
        Swal.fire({
            icon: flashData.dataset.type,
            title: flashData.dataset.title,
            text: flashData.dataset.message,
            showConfirmButton: false,
            timer: 1600,
        });
    } else {
        console.log("No flash data found");
    }
});




// Function untuk konfirmasi penghapusan produk
function confirmDelete(id, deleteUrl) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Product data will be deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel',
        width: '400px',  // Ukuran alert
        height: '250px',  // Padding
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect ke URL penghapusan
            window.location.href = deleteUrl + '/' + id;
        }
    });
}
