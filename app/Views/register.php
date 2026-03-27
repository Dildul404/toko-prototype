<?php require 'layouts/header.php'; ?>

<h2>Register</h2>

<form method="POST" action="/toko-prototype/public/register">
    <input type="text" name="name" placeholder="Nama" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>

<?php require 'layouts/footer.php'; ?>