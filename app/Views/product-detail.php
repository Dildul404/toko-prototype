<?php require 'layouts/header.php'; ?>

<h1>Detail Produk</h1>

<p>Nama: <?= htmlspecialchars($product['name']) ?></p>
<p>Harga: Rp<?= htmlspecialchars(number_format($product['price'])) ?></p>

<a href="/toko-prototype/public/products">Kembali</a>

<?php require 'layouts/footer.php'; ?>