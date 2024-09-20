<?php 
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'];?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= BASEURL; ?>/js/sweetalert2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


</head>

<body>
<?php
if (Messege::flashExists()) :
?>
    <div id="flash-data" 
         data-type="<?= Messege::getFlash('type'); ?>" 
         data-title="<?= Messege::getFlash('title'); ?>" 
         data-message="<?= Messege::getFlash('message'); ?>"></div>
<?php
    Messege::clearFlash();
endif;
?>
<header id="navbarHeader" class="fixed top-0 left-0 w-full z-50 transition-colors duration-300 bg-blue-700">
    <div id="nav_container" class="flex items-center justify-start p-4 w-full">
        <!-- Logo -->
        <img src="https://pluspng.com/img-png/png-toko-toko-pasar-png-512.png" alt="logo" width="50px" height="50px">

        <div class="hamburger block lg:hidden cursor-pointer ml-4" id="hamburger">
            <span class="block w-6 h-0.5 bg-gray-300 mb-1"></span>
            <span class="block w-6 h-0.5 bg-gray-300 mb-1"></span>
            <span class="block w-6 h-0.5 bg-gray-300"></span>
        </div>

        <!-- Navbar, initially hidden on mobile -->
        <nav id="navbar" class="hidden lg:flex space-x-8 container mx-[65px] transition-all duration-300 ease-in-out transform">
            <a href="<?= BASEURL; ?>/Home" class="nav-link text-gray-300 hover:text-gray-100 transition-colors duration-300 text-lg">Home</a>
            <a href="<?= BASEURL; ?>/Products" id="Product-link" class="nav-link text-gray-300 hover:text-gray-100 transition-colors duration-300 text-lg">Products</a>
        </nav>
    </div>
</header>



