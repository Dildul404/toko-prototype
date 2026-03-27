<?php require 'layouts/header.php'; ?>

<h1>Detail Produk</h1>

<p>Nama: <?= $product['name'] ?></p>
<p>Harga: Rp<?= number_format($product['price']) ?></p>

<a href="/toko-prototype/public/products">Kembali</a>

<?php require 'layouts/footer.php'; ?>