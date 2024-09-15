document.addEventListener("DOMContentLoaded", function() {
 // Ambil semua elemen dengan class nav-link
 const navLinks = document.querySelectorAll('#navbar a');
 // Ambil URL saat ini
 const currentUrl = window.location.href;
 const hamburger = document.querySelector('.hamburger');
 const navbar = document.querySelector('#navbar');
 // Loop melalui setiap tautan navigasi
 navLinks.forEach(link => {
     // Jika href dari tautan cocok dengan URL saat ini
     if (link.href === currentUrl) {
         // Tambahkan kelas 'link-active'
         link.classList.add('link-active');
     }
 });
 hamburger.addEventListener('click', function() {
    navbar.classList.toggle('show');  // Tampilkan atau sembunyikan menu
    hamburger.classList.toggle('active');  // Animasi hamburger
});
});