document.addEventListener("DOMContentLoaded", function () {
    console.log("Halaman sudah di-load");
    getProductFromDummyJson();
});

function getProductFromDummyJson() {
    fetch('https://dummyjson.com/products') // Mengambil data produk dari DummyJSON
        .then(response => response.json())
        .then(data => {
            var container = document.querySelector('#product_container');
            container.innerHTML = ''; // Kosongkan container sebelum menambahkan produk baru
            // Batasi jumlah produk yang diambil hanya 10
            const limitedProducts = data.products.slice(0, 10);

            // Looping produk yang sudah dibatasi
            limitedProducts.forEach(product => {
                product.description = shortText(product.description, 70); // Batasi panjang deskripsi
                product.title = shortText(product.title, 15); // Batasi panjang judul
                container.insertAdjacentHTML('beforeend',
                    `<div class="card">
                        <div class="card-img">
                            <img src="${product.thumbnail}" alt="img product">
                        </div>
                        <section>
                            <header>
                                <p class="fw-bold">${product.title}</p>
                            </header>
                            <p>${product.description}</p>
                            
                            <a href="detail/detail.html?id=${product.id}">
                                <button class="bg-blue p-2 text-white fw-bold border-radius shadow">detail</button>
                            </a>
                        </section>
                    </div>`
                );
            });
        })
        .catch(error => console.error('Error fetching products:', error));
}

// Fungsi untuk mempersingkat teks
function shortText(text, maxLength) {
    return text.length > maxLength ? text.substring(0, maxLength) + '...' : text;
}

document.addEventListener("DOMContentLoaded", function () {
   const navLink = document.querySelector('#navbar a')
   const Url = window.location.href;
   navLink.forEach(link =>{
        if (link.href === Url) {
            // Tambahkan kelas 'link-active'
            link.classList.add('link-active');
        }
   });
});