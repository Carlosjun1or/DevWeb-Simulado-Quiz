<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: ../view/login.php');
    exit();
}
$user = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body>
    <header>

        <nav>
            <div class="logo">
                <a href="dashboard.php"><img src="img/logo.png" alt="Logo"></a>
            </div>
            <div class="user">
                <?php echo "olá! " . $user; ?>
                <a href="../model/logout.php">Sair</a>
            </div>
        </nav>
    </header>

</body>

</html>