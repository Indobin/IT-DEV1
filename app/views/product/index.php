<section id="our_products">
        <center>
            <h1>Our Products</h1>
        </center>
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