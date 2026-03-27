<?php require 'layouts/header.php'; ?>

<h1>Dashboard</h1>
<p>Selamat datang, <?= $_SESSION['user']['name'] ?></p>

<a href="/toko-prototype/public/logout">Logout</a>

<?php require 'layouts/footer.php'; ?>