<!DOCTYPE html>
<html>
    <header>
        <title>Login Asisten</title>
        <link rel="stylesheet" href="style.css">
    </header>
    <body>
        <span class="background"></span>
        <span class="centering">
            <form class="my-form" method="post" action="/asisten/cekLogin">
                <?= csrf_field() ?>
                <span class="login-welcome-row">
                    <img class="login-welcome" src="astronaut.jpg" />
                    <!-- optimize the image in production -->
                    <h1>LogIn!</h1>
                </span>
                <div class="text-field">
                    <label for="Username">Username: </label>
                    <input
                        class="form-control"
                        aria-label="Email"
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Masukkan Username"
                        required
                    />
                    <img alt="Email Icon" title="Email Icon" src="email.svg" />
                </div>
                <div class="text-field">
                    <label for="password">Password:</label>
                    <input
                        class="form-control"
                        id="password"
                        type="password"
                        aria-label="Password"
                        name="password"
                        placeholder="Your Password"
                        required
                    />
                    <img alt="Password Icon" title="Password Icon" src="password.svg" />
                </div>
                <input type="submit" class="my-form__button" value="Login" />
            </form>
        </span>
        <script src="script.js"></script>
    </body>
</html>
