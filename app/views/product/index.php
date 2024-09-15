<section id="our_products">
        <!-- <center> -->
            <h1 class="mb-4 font-semibold">Our Products</h1>
            <a href="<?= BASEURL; ?>/product/add">
                    <button class="bg-green-500 px-4 p-2 mb-12 text-white font-semibold 
                    hover:bg-green-600 rounded-lg">Add Products</button>
                </a>
        <!-- </center> -->
        <div id="product_container">
        <div class="card">
            <?php 
            foreach ($data['prd'] as $data) {
            ?>
            <div class="card-img">
                <img src="" alt="img product">
            </div>
            <section>
                <header>
                    <p class="fw-bold"><?= $data['name'] ?></p>
                </header>
                <p><?= $data['description'] ?></p>
                
                <a href="detail/detail.html?id=${product.id}">
                    <button class="bg-blue p-2 text-white fw-bold border-radius shadow">detail</button>
                </a>
            </section>
            <?php
            }
            ?>
        </div>
        </div>
    </section>