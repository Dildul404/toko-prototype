<?php require 'layouts/header.php'; ?>
<?php if (!empty($errors)): ?>
    <ul style="color:red;">
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<h2>Register</h2>

<form method="POST" action="/toko-prototype/public/register">
    <input type="text" name="name" placeholder="Nama" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
    <input type="hidden" name="csrf_token" value="<?= csrf_token() ?>">
</form>

<?php require 'layouts/footer.php'; ?>