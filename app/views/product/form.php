<section class="pt-20 pb-12 bg-gray-100 w-full">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-6 text-left mt-4"><?= $data['form'] ?></h1>

    <form action="<?= BASEURL; ?>/Products/save" method="post" enctype="multipart/form-data">
        <!-- Hidden field for product ID (if editing) -->
        <?php if (isset($data['product'])): ?>
            <input type="hidden" name="id" value="<?= $data['product']['id']; ?>">
            <input type="hidden" name="existing_img" value="<?= $data['product']['img']; ?>">
        <?php endif; ?>

        <!-- Nama Produk -->
        <div class="mb-4">
            <label for="productName" class="block text-sm font-medium text-gray-700">Name Product:</label>
            <input type="text" id="productName" name="name"
                   class="mt-1 p-2 w-1/2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                   placeholder="Masukkan nama produk" value="<?= $data['product']['name'] ?? ''; ?>" required>
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Category Product:</label>
            <select id="category" name="category"
                    class="mt-1 p-2 w-1/2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                <option value="">Pilih Kategori</option>
                <option value="Electronics" <?= (isset($data['product']['category']) && $data['product']['category'] === 'Electronics') ? 'selected' : ''; ?>>Electronics</option>
                <option value="Clothing" <?= (isset($data['product']['category']) && $data['product']['category'] === 'Clothing') ? 'selected' : ''; ?>>Clothing</option>
                <option value="Appliances" <?= (isset($data['product']['category']) && $data['product']['category'] === 'Appliances') ? 'selected' : ''; ?>>Appliances</option>
                <option value="Groceries" <?= (isset($data['product']['category']) && $data['product']['category'] === 'Groceries') ? 'selected' : ''; ?>>Groceries</option>
            </select>
        </div>

        <!-- Harga -->
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price (Rp):</label>
            <input type="number" id="price" name="price" min="0"
                   class="mt-1 p-2 w-1/2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                   placeholder="Masukkan harga produk" value="<?= $data['product']['price'] ?? ''; ?>" required>
        </div>

        <!-- Stok -->
        <div class="mb-4">
            <label for="stock" class="block text-sm font-medium text-gray-700">Stock Product:</label>
            <input type="number" id="stock" name="stock" min="0"
                   class="mt-1 p-2 w-1/2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                   placeholder="Masukkan jumlah stok produk" value="<?= $data['product']['stock'] ?? ''; ?>" required>
        </div>

        <!-- Deskripsi -->
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description Product:</label>
            <textarea id="description" name="description" rows="4"
                      class="mt-1 p-2 w-1/2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                      placeholder="Masukkan deskripsi produk" required><?= $data['product']['description'] ?? ''; ?></textarea>
        </div>

        <!-- Gambar Produk -->
        <div class="mb-4">
            <label for="img" class="block text-sm font-medium text-gray-700">Image Product:</label>
            <input type="file" id="img" name="img" accept="image/*"
                   class="mt-1 p-2 w-1/2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <!-- Display existing image if editing -->
            <?php if (isset($data['product']['img'])): ?>
                <div class="mt-2">
                    <img src="<?= BASEURL; ?>/img/products/<?= $data['product']['img']; ?>" alt="Current Image" class="w-32 h-32 object-cover">
                </div>
            <?php endif; ?>
        </div>

        <!-- Tombol Submit -->
        <div class="text-left">
            <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <?= isset($data['product']) ? 'Save Changes' : 'Save Product'; ?>
            </button>
        </div>
    </form>
    </div>
</section>
