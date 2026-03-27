<?php require 'layouts/header.php'; ?>

<h2>Login</h2>

<form method="POST" action="/toko-prototype/public/login">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

<?php require 'layouts/footer.php'; ?>