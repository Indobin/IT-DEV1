<?php 
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'];?></title>
    <!-- <link rel="stylesheet" href="<?= BASEURL; ?>/css/index.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= BASEURL; ?>/js/sweetalert2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <script src="<?= BASEURL; ?>/js/sweetalert2.all.min.js"></script>


</head>

<body>
<?php
// session_start(); // Mulai session jika belum ada

// Cek apakah ada flash message
if (Messege::flashExists()) :
?>
    <div id="flash-data" 
         data-type="<?= Messege::getFlash('type'); ?>" 
         data-title="<?= Messege::getFlash('title'); ?>" 
         data-message="<?= Messege::getFlash('message'); ?>"></div>
<?php
    Messege::clearFlash();  // Hapus flash setelah dibaca
endif;
?>
<header id="navbarHeader" class="fixed top-0 left-0 w-full z-50 transition-colors duration-300 bg-gray-800 bg-opacity-90">
    <div id="nav_container" class="flex items-center justify-start p-4 w-full">
        <!-- Logo -->
        <img src="https://th.bing.com/th/id/OIP.3F1NGX4mMcPkPZKgwdYjDQHaHa?w=188&h=188&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="logo" width="50px" height="50px">

        <!-- Hamburger Menu (visible on mobile) -->
        <div class="hamburger block lg:hidden cursor-pointer ml-4" id="hamburger">
            <span class="block w-6 h-0.5 bg-gray-300 mb-1"></span>
            <span class="block w-6 h-0.5 bg-gray-300 mb-1"></span>
            <span class="block w-6 h-0.5 bg-gray-300"></span>
        </div>

        <!-- Navbar Links (hidden on mobile, visible on larger screens) -->
        <nav id="navbar" class="hidden lg:flex space-x-4 ml-4">
            <a href="<?= BASEURL; ?>/Home" class="nav-link text-gray-300 hover:text-gray-100 transition-colors duration-300">Home</a>
            <a href="<?= BASEURL; ?>/Products" id="Product-link" class="nav-link text-gray-300 hover:text-gray-100 transition-colors duration-300">Products</a>
        </nav>
    </div>
</header>

<script>
    // Mengubah opasitas header saat scroll
    window.addEventListener('scroll', function() {
        var header = document.getElementById('navbarHeader');
        if (window.scrollY > 50) {
            // Saat scroll ke bawah, tambahkan opasitas penuh dan shadow
            header.classList.remove('bg-opacity-90');
            header.classList.add('bg-opacity-100', 'shadow-lg');
        } else {
            // Saat scroll ke atas (posisi awal), kembalikan opasitas menjadi transparan
            header.classList.remove('bg-opacity-100', 'shadow-lg');
            header.classList.add('bg-opacity-90');
        }
    });
</script>

<!-- Script untuk Hamburger Menu dan Transparent Navbar saat Scroll -->
<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    const navbarHeader = document.getElementById('navbarHeader');

    // Toggle mobile menu saat hamburger di-click
    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Change navbar background on scroll
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbarHeader.classList.add('bg-gray-800', 'bg-opacity-90');
        } else {
            navbarHeader.classList.remove('bg-gray-800', 'bg-opacity-90');
        }
    });
</script>


<!-- Script untuk Hamburger Menu -->
<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script> -->
