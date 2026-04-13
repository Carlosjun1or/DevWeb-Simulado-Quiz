<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: ../view/login.php');
    exit();
}
$user = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/quiz.css">
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
        <section class="quiz">
            <div class="container-form">

                <form action="resultados.php" method="POST">
                    <div class="q">
                        <label><strong>1. O comando echo é utilizado para: </strong></label><br>
                        <input type="radio" name="q1" value="a" required>Receber dados<br>
                        <input type="radio" name="q1" value="b">Exibir dados<br>
                        <input type="radio" name="q1" value="c">Criar funções<br>
                        <input type="radio" name="q1" value="d">Encerrar o codigo<br><br>
                    </div>
                    <div class="q">
                        <label><strong>2. Em PHP, uma variável começa com: </strong></label><br>
                        <input type="radio" name="q2" value="a" required>#<br>
                        <input type="radio" name="q2" value="b">$<br>
                        <input type="radio" name="q2" value="c">@<br>
                        <input type="radio" name="q2" value="d">&<br><br>
                    </div>
                    <div class="q">
                        <label><strong>3. Qual é uma variável válida? </strong></label><br>
                        <input type="radio" name="q3" value="a" required>$1nome<br>
                        <input type="radio" name="q3" value="b">$nome_usuario<br>
                        <input type="radio" name="q3" value="c">nome$<br>
                        <input type="radio" name="q3" value="d">$nome-usuario<br><br>
                    </div>
                    <div class="q">
                        <label><strong>4. Qual método envia os dados pela URL: </strong></label>
                        <select name="q4" required>
                            <option value="a">POST</option>
                            <option value="b">GET</option>
                        </select>
                        <br><br>
                    </div>
                    <div class="q">
                        <label><strong>5. Sobre o método POST (marque as corretas):</strong></label><br>
                        <input type="checkbox" name="q5[]" value="a">Dados ficam visíveis na URL<br>
                        <input type="checkbox" name="q5[]" value="b" required>Mais seguro para envio de dados<br>
                        <input type="checkbox" name="q5[]" value="c">Permite envio de grande volume de dados<br>
                        <input type="checkbox" name="q5[]" value="d">Só funciona com textos<br><br>
                    </div>
                    <div class="q">
                        <label><strong>6. Qual input é mais adequado para senha? </strong></label><br>
                        <input type="radio" name="q6" value="a" required>text<br>
                        <input type="radio" name="q6" value="b">email<br>
                        <input type="radio" name="q6" value="c">password<br><br>
                    </div>
                    <div class="q">
                        <label><strong>7. Qual permite escolher apenas UMA opção? </strong></label><br>
                        <input type="radio" name="q7" value="a" required>checkbox<br>
                        <input type="radio" name="q7" value="b">radio<br>
                        <input type="radio" name="q7" value="c">text<br>
                        <input type="radio" name="q7" value="d">textarea<br><br>
                    </div>
                    <div class="q">
                        <label><strong>8. Checkbox é usado quando: </strong></label>
                        <select name="q8" required>
                            <option value="a">Apenas uma opção</option>
                            <option value="b">Múltiplas opções</option>
                        </select>
                        <br><br>
                    </div>
                    <div class="q">
                        <label><strong>9. A tag < select> serve para:</select>" </strong></label><br>
                        <input type="radio" name="q9" value="a" required>Campos de texto<br>
                        <input type="radio" name="q9" value="b">Lista suspensa<br>
                        <input type="radio" name="q9" value="c">Botão<br>
                        <input type="radio" name="q9" value="d">sessão<br><br>
                    </div>
                    <div class="q">
                        <label><strong>10. Qual estrutura usamos para decisão? </strong></label><br>
                        <input type="radio" name="q10" value="a" required>for<br>
                        <input type="radio" name="q10" value="b">echo<br>
                        <input type="radio" name="q10" value="c">if<br>
                        <input type="radio" name="q10" value="d">array<br><br>
                    </div>
                    <div class="q">
                        <label><strong>11. Qual estrutura usamos para repetição? </strong></label><br>
                        <input type="radio" name="q11" value="a" required>if<br>
                        <input type="radio" name="q11" value="b">echo<br>
                        <input type="radio" name="q11" value="c">for<br>
                        <input type="radio" name="q11" value="d">isset<br><br>
                    </div>
                    <div class="q">
                        <label><strong>12. Um array é: </strong></label><br>
                        <input type="radio" name="q12" value="a" required>Uma função<br>
                        <input type="radio" name="q12" value="b">Uma variável com multiplos valores<br>
                        <input type="radio" name="q12" value="c">Um formulário<br>
                        <input type="radio" name="q12" value="d">Um loop<br><br>
                    </div>
                    <div class="q">
                        <label><strong>13. Para criar uma função usamos: </strong></label><br>
                        <input type="radio" name="q13" value="a" required>create<br>
                        <input type="radio" name="q13" value="b">function<br>
                        <input type="radio" name="q13" value="c">delf<br>
                        <input type="radio" name="q13" value="d">func<br><br>
                    </div>
                    <div class="q">
                        <label><strong>14. Sessões servem para: </strong></label><br>
                        <input type="radio" name="q14" value="a" required>Armazenar no navegador<br>
                        <input type="radio" name="q14" value="b">Armazenar no servidor<br>
                        <input type="radio" name="q14" value="c">criar HTML<br>
                        <input type="radio" name="q14" value="d">Fazer requisições<br><br>
                    </div>
                    <div class="q">
                        <label><strong>15. Cookies são armazenados: </strong></label>
                        <select name="q15" required>
                            <option value="a">No servidor</option>
                            <option value="b">No navegador</option>
                        </select>
                        <br><br>
                    </div>
                    <div class="q">
                        <label><strong>16. Qual função pode consumir API? </strong></label><br>
                        <input type="radio" name="q16" value="a" required>echo<br>
                        <input type="radio" name="q16" value="b">file_get_contents<br>
                        <input type="radio" name="q16" value="c">isset<br>
                        <input type="radio" name="q16" value="d">print_r<br><br>
                    </div>
                    <div class="q">
                        <label><strong>17. Sobre cURL (marque as corretas):</strong></label><br>
                        <input type="checkbox" name="q17[]" value="a">Faz requisições HTTP<br>
                        <input type="checkbox" name="q17[]" value="b" required>Consome APIs<br>
                        <input type="checkbox" name="q17[]" value="c">Apenas imprime dados<br>
                        <input type="checkbox" name="q17[]" value="d">Substitui sessão<br><br>
                    </div>
                    <div class="q">
                        <label><strong>18. Para acessar dados via POST usamos: </strong></label><br>
                        <input type="radio" name="q18" value="a" required>$_GET<br>
                        <input type="radio" name="q18" value="b">$_POST<br>
                        <input type="radio" name="q18" value="c">$_SESSION<br>
                        <input type="radio" name="q18" value="d">$_COOKIE<br><br>
                    </div>
                    <div class="q">
                        <label><strong>19. Para verificar se a variável existe: </strong></label><br>
                        <input type="radio" name="q19" value="a" required>check()<br>
                        <input type="radio" name="q19" value="b">isset()<br>
                        <input type="radio" name="q19" value="c">exist()<br>
                        <input type="radio" name="q19" value="d">verify()<br><br>
                    </div>
                    <div class="q">
                        <label><strong>20. Para iniciar uma sessão usamos: </strong></label><br>
                        <input type="radio" name="q20" value="a" required>start_session()<br>
                        <input type="radio" name="q20" value="b">session_strat()<br>
                        <input type="radio" name="q20" value="c">init_session()<br>
                        <input type="radio" name="q20" value="d">begin_seeion()<br><br>
                    </div>
                    <button type="submit">Finalizar Quiz</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>