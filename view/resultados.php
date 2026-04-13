<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: ../view/login.php');
    exit();
}

$user = $_SESSION['name'];

include '../model/api.php';
$motivacao = buscarFraseMotivacional();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/resultados.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="quiz.php"><img src="img/logo.png" alt="Logo"></a>
            </div>
            <div class="user">
                <?php echo "olá! " . $user; ?>
                <a href="../model/logout.php">Sair</a>
            </div>
        </nav>
    </header>
    <main>
        <section class="resultados">
            <div class="container">
                <h2>Resultados do Quiz</h2>
                <div class="resultado">
                    <?php
                    include '../model/processamento.php';
                    echo resultado($pontuacao);
                    ?>
                </div>
                <div class="motivacao">
                    <span>💡</span>
                    <p>"<?php echo htmlspecialchars($motivacao['frase']); ?>"</p>
                    <small>— <?php echo htmlspecialchars($motivacao['autor']); ?></small>
                </div>
                <button onclick="window.location.href='quiz.php'">Refazer Quiz</button>
            </div>
        </section>
    </main>
</body>

</html>