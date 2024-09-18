<section class="pt-20 pb-12 bg-gray-100 w-full">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-6 text-left mt-4">Our Products</h1>

        <div class="flex justify-start mb-6">
            <a href="<?= BASEURL; ?>/Products/form">
                <button class="bg-green-500 px-6 py-2 text-white font-semibold hover:bg-green-600 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Add Products
                </button>
            </a>
        </div>

        <!-- Grid container untuk card produk -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            <?php foreach ($data['prd'] as $product) { ?>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-500 hover:scale-105">
                    <!-- Gambar produk -->
                    <div class="card-img h-48 w-full bg-gray-200 flex items-center justify-center">
                        <img src="<?= BASEURL; ?>/img/products/<?= $product['img']; ?>" alt="<?= $product['name']; ?>" class="object-cover h-full w-full">
                    </div>

                    <!-- Informasi produk -->
                    <div class="p-4">
                        <header class="mb-2">
                            <h3 class="text-lg font-bold"><?= $product['name']; ?></h3>
                        </header>
                        <p class="text-gray-700 text-sm mb-4 truncate-multiline">
                            <?= $product['description']; ?>
                        </p>
                        <div class="flex space-x-2">
                            <a href="<?= BASEURL; ?>/products/details/<?= $product['id']; ?>">
                                <button class="w-full bg-gray-500 text-white py-2 px-2 font-semibold rounded-lg transition duration-300 ease-in-out transform hover:bg-gray-600 hover:scale-105">
                                    Detail
                                </button>
                            </a>
                            <a href="<?= BASEURL; ?>/products/form/<?= $product['id']; ?>">
                                <button class="w-full bg-blue-500 text-white py-2 px-2 font-semibold rounded-lg transition duration-300 ease-in-out transform hover:bg-blue-600 hover:scale-105">
                                    Edit
                                </button>
                            </a>
                            <button 
                            onclick="confirmDelete(<?= $product['id']; ?>, '<?= BASEURL; ?>/products/delete')"
                            class="w-full bg-red-500 text-white py-2 px-2 font-semibold rounded-lg transition duration-300 ease-in-out transform hover:bg-red-600 hover:scale-105">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <style>
    .truncate-multiline {
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Batasi pada 3 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-img img {
        max-height: 192px; /* Sesuaikan dengan kebutuhan */
        object-fit: cover;
    }
    </style>
</section>
