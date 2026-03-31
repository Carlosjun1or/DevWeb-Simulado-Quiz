<?php
session_start();
$user = isset($_COOKIE['email']) ? $_COOKIE['email'] : "";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Quiz</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body>

    <main>
        <section id="login" class="login">
            <div class="login-container">
                <h2><span> Quiz </span></h2>
                <h2> Login</h2>
                <form action="../model/session.php" method="POST" class="login-form">
                    <input name="name" type="name" placeholder="Nome" required><br>
                    <input name="email" type="email" placeholder="Email" value="<?= htmlspecialchars($user) ?>"><br>
                    <div class="checkbox-container">
                        <input type="checkbox" id="lembre-me" name="lembre_me" <?= $user !== '' ? 'checked' : '' ?>>
                        <label for="lembre-me">Lembre-me</label>
                    </div>
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>