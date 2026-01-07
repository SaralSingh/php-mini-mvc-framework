<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
</head>

<body>
    <?php if ($msg = flash('error')): ?>
    <p class="error"><?= $msg ?></p>
<?php endif; ?>

    <h1>login page</h1>
    <form action="<?= url('/login') ?>" method="POST">
        <label>Email: </label>
        <input type="text" name="email" placeholder="enter your email">
        <label>Password: </label>
        <input type="text" name="password" placeholder="enter your password">
        <button type="submit">login</button>
    </form>
</body>

</html>