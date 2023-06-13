<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php if (session()->getFlashData('error')) : ?>
        <div><?= session()->getFlashData('error') ?></div>
    <?php endif; ?>

   <form action="/login" method="post">
    <!-- Input untuk username -->
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
    </div>
    <!-- Input untuk password -->
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
    </div>
    <!-- Tombol submit -->
    <div>
        <input type="submit" value="Login">
    </div>
</form>

</body>
</html>
