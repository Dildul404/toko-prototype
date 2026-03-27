<?php require 'layouts/header.php'; ?>

<h1>Daftar Produk</h1>

<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <a href="/toko-prototype/public/products/<?= $product['id'] ?>">
                <?= $product['name'] ?>
            </a>
            - Rp<?= number_format($product['price']) ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php require 'layouts/footer.php'; ?>