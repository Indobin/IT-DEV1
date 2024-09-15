<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'];?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div id="nav_container">
            <img src="https://th.bing.com/th/id/OIP.3F1NGX4mMcPkPZKgwdYjDQHaHa?w=188&h=188&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="logo" width="50px" height="50px">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        
            <nav id="navbar">
                <a href="<?= BASEURL;?>/Home" class="nav-link">Home</a>
                <a href="<?= BASEURL;?>/Products" id="Product-link" class="nav-link">Products</a>
            </nav>
        </div>
    </header>
   
