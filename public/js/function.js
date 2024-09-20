const hamburger = document.getElementById('hamburger');
  const navbar = document.getElementById('navbar');

  hamburger.addEventListener('click', () => {
    navbar.classList.toggle('hidden'); // Toggle the hidden class
    navbar.classList.toggle('opacity-0'); // Add opacity transition
    navbar.classList.toggle('opacity-100'); // Visible state
  });
    // Mengubah opasitas header saat scroll
    window.addEventListener('scroll', function() {
        var header = document.getElementById('navbarHeader');
        if (window.scrollY > 50) {
            // Saat scroll ke bawah, tambahkan opasitas penuh dan shadow
            header.classList.remove('bg-opacity-90');
            header.classList.add('bg-opacity-95', 'shadow-lg');
        } else {
            // Saat scroll ke atas (posisi awal), kembalikan opasitas menjadi transparan, tapi background color tetap
            header.classList.remove('bg-opacity-90', 'shadow-lg');
            header.classList.add('bg-blue-700'); // Tetap menggunakan bg-gray-800 dengan opasitas 90%
        }
    });