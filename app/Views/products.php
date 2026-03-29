<?php require 'layouts/header.php'; ?>

<h1>Daftar Produk</h1>

<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <a href="/toko-prototype/public/products/<?= htmlspecialchars($product['id']) ?>">
                <?= htmlspecialchars($product['name']) ?>
            </a>
            - Rp<?= htmlspecialchars(number_format($product['price'])) ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php require 'layouts/footer.php'; ?>