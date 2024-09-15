<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>

    <!-- karena kita masih membutuhkan style dari index
    kita dapat memanggilanya dengan cara berikut
    dua titik sebelum nama file menandakan perpindahan folder -->
    <link rel="stylesheet" href="../index.css">
   
    <link rel="stylesheet" href="detail.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div id="nav_container">
            <img src="https://th.bing.com/th/id/OIP.3F1NGX4mMcPkPZKgwdYjDQHaHa?w=188&h=188&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="logo" width="50px"
                height="50px">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            <nav id="navbar">
                <a href="../index.html">Home</a>
                <a href="../product.html" class="nav-link">Products</a>
            </nav>
        </div>
    </header>
    <section id="home_article">
        <article>
            <h1 id="title"></h1>
            <p id="description"></p>
            <h1>Category</h1>
            <p id="kategori"></p>
            <h1>Stock</h1>
            <p id="stok"></p>
            <h1>Price</h1>
            <p id="harga"></p>
        </article>
        <div class="card">
            <div class="card-image">
                <img src="" id="prod_img"
                alt="product image">
            </div>
        </div>
           
      
    </section>
    <script src="detail.js"></script>
    <script src="../active.js"></script>
</body>
</html>