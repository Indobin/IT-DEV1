<section class="pt-20 pb-12 w-full">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-6 text-left mt-4 m"><?= $data['judul'] ?></h1>

        <div class="flex flex-col lg:flex-row mt-4 items-center lg:items-start space-y-8 lg:space-y-0 lg:space-x-12">

            <!-- Product Image -->
            <div class="lg:w-1/2 mt-4">
            <div class="card-img h-auto w-full bg-gray-200 flex items-center justify-center">
                        <img src="<?= BASEURL; ?>/img/products/<?= $data['prd']['img']; ?>" alt="<?= $product['name']; ?>" class="object-cover h-full w-full">
                    </div>
            </div>
            
            <!-- Product Information -->
            <div class="lg:w-1/2">
                <h1 class="text-3xl font-bold mb-4 mt-2"><?= $data['prd']['name'] ?></h1>
                <p class="text-gray-700 mb-6">
                   <?= $data['prd']['description'] ?>
                </p>
                <p class="text-2xl font-semibold text-blue-600 mb-6">Rp <?= $data['prd']['price'] ?></p>
                
              

                <!-- Product Details -->
                <div class="mt-8">
                    <h2 class="text-xl font-bold mb-4">Detail Produk</h2>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Category: <?= $data['prd']['category'] ?></li>
                        <li>Stock   : <?= $data['prd']['stock'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  
</section>