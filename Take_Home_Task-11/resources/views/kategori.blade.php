<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Kategori Ikan</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav>
      <h1>Website Penjualan Ikan</h1>
      <ul>
        <li>
          <a href="index">Beranda </a>
        </li>
        <li>
          <a href="kategori">Kategori</a>
        </li>
        <li>
          <a href="">Keranjang</a>
        </li>
        <li>
          <a href="">Pesanan</a>
        </li>
        <li>
          <a href="">Akun</a>
        </li>
      </ul>
      <form action="#">
        <input
          type="text"
          name="cari"
          id="cari"
          placeholder="Cari kategori...."
        />
        <input type="submit" value="Cari" />
      </form>
    </nav>

    <div class="content-grid" id="kategori-container">
      <!-- isinya pada array -->
    </div>
  </body>
</html>

<script>
  const kategoriIkan = ['Segar', 'Laut', 'Tawar', 'Tangkap Sendiri', 'Import'];

  function tampilkanKategori() {
    const kategoriContainer = document.getElementById('kategori-container');

    kategoriIkan.forEach((kategori) => {
      const div = document.createElement('div');
      div.classList.add('kategori-item');
      const heading = document.createElement('h2');
      heading.textContent = kategori;

      div.appendChild(heading);
      kategoriContainer.appendChild(div);
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    tampilkanKategori();
  });
</script>
