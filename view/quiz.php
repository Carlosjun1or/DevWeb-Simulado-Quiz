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
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/quiz.css">
    <link rel="icon" href="img/logo.png">
</head>

<body>

    <header>
        <nav>
            <div class="logo">
                <a href="dashboard.php">
                    <img src="img/logo.png" alt="Logo">
                </a>
            </div>

            <div class="user">
                <p>Olá,<strong> <?php echo $user; ?> </strong> </p>
                <a href="../model/logout.php">Sair</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="quiz">
            <div class="container-form">

                <form action="#" method="POST">

                    <!-- 1 -->
                    <div class="q">
                        <p><strong>1. O comando echo é utilizado para:</strong></p>
                        <label><input type="radio" name="q1" value="a" required> Receber dados</label>
                        <label><input type="radio" name="q1" value="b"> Exibir dados</label>
                        <label><input type="radio" name="q1" value="c"> Criar funções</label>
                        <label><input type="radio" name="q1" value="d"> Encerrar código</label>
                    </div>

                    <!-- 2 -->
                    <div class="q">
                        <p><strong>2. Em PHP, uma variável começa com:</strong></p>
                        <label><input type="radio" name="q2" value="a" required> #</label>
                        <label><input type="radio" name="q2" value="b"> $</label>
                        <label><input type="radio" name="q2" value="c"> @</label>
                        <label><input type="radio" name="q2" value="d"> &</label>
                    </div>

                    <!-- 3 -->
                    <div class="q">
                        <p><strong>3. Qual é uma variável válida?</strong></p>
                        <label><input type="radio" name="q3" value="a" required> $1nome</label>
                        <label><input type="radio" name="q3" value="b"> $nome_usuario</label>
                        <label><input type="radio" name="q3" value="c"> nome$</label>
                        <label><input type="radio" name="q3" value="d"> $nome-usuario</label>
                    </div>

                    <!-- 4 -->
                    <div class="q">
                        <p><strong>4. Qual método envia dados pela URL?</strong></p>
                        <select name="q4" required>
                            <option value="a">POST</option>
                            <option value="b">GET</option>
                        </select>
                    </div>

                    <!-- 5 -->
                    <div class="q">
                        <p><strong>5. Sobre o método POST:</strong></p>
                        <label><input type="checkbox" name="q5[]" value="a" required> Dados visíveis na URL</label>
                        <label><input type="checkbox" name="q5[]" value="b"> Mais seguro</label>
                        <label><input type="checkbox" name="q5[]" value="c"> Permite muitos dados</label>
                        <label><input type="checkbox" name="q5[]" value="d"> Só funciona com texto</label>
                    </div>

                    <!-- 6 -->
                    <div class="q">
                        <p><strong>6. Qual input é mais adequado para senha?</strong></p>
                        <label><input type="radio" name="q6" value="a" required> text</label>
                        <label><input type="radio" name="q6" value="b"> email</label>
                        <label><input type="radio" name="q6" value="c"> password</label>
                    </div>

                    <!-- 7 -->
                    <div class="q">
                        <p><strong>7. Qual permite escolher apenas UMA opção?</strong></p>
                        <label><input type="radio" name="q7" value="a" required> checkbox</label>
                        <label><input type="radio" name="q7" value="b"> radio</label>
                        <label><input type="radio" name="q7" value="c"> text</label>
                        <label><input type="radio" name="q7" value="d"> textarea</label>
                    </div>

                    <!-- 8 -->
                    <div class="q">
                        <p><strong>8. Checkbox é usado quando:</strong></p>
                        <select name="q8" required>
                            <option value="a">Apenas uma opção</option>
                            <option value="b">Múltiplas opções</option>
                        </select>
                    </div>

                    <!-- 9 -->
                    <div class="q">
                        <p><strong>9. A tag &lt;select&gt; serve para:</strong></p>
                        <label><input type="radio" name="q9" value="a" required> Campos de texto</label>
                        <label><input type="radio" name="q9" value="b"> Lista suspensa</label>
                        <label><input type="radio" name="q9" value="c"> Botão</label>
                        <label><input type="radio" name="q9" value="d"> Sessão</label>
                    </div>

                    <!-- 10 -->
                    <div class="q">
                        <p><strong>10. Qual estrutura usamos para decisão?</strong></p>
                        <label><input type="radio" name="q10" value="a" required> for</label>
                        <label><input type="radio" name="q10" value="b"> echo</label>
                        <label><input type="radio" name="q10" value="c"> if</label>
                        <label><input type="radio" name="q10" value="d"> array</label>
                    </div>

                    <!-- 11 -->
                    <div class="q">
                        <p><strong>11. Qual estrutura usamos para repetição?</strong></p>
                        <label><input type="radio" name="q11" value="a" required> if</label>
                        <label><input type="radio" name="q11" value="b"> echo</label>
                        <label><input type="radio" name="q11" value="c"> for</label>
                        <label><input type="radio" name="q11" value="d"> isset</label>
                    </div>

                    <!-- 12 -->
                    <div class="q">
                        <p><strong>12. Um array é:</strong></p>
                        <label><input type="radio" name="q12" value="a" required> Uma função</label>
                        <label><input type="radio" name="q12" value="b"> Uma variável com múltiplos valores</label>
                        <label><input type="radio" name="q12" value="c"> Um formulário</label>
                        <label><input type="radio" name="q12" value="d"> Um loop</label>
                    </div>

                    <!-- 13 -->
                    <div class="q">
                        <p><strong>13. Para criar uma função usamos:</strong></p>
                        <label><input type="radio" name="q13" value="a" required> create</label>
                        <label><input type="radio" name="q13" value="b"> function</label>
                        <label><input type="radio" name="q13" value="c"> delf</label>
                        <label><input type="radio" name="q13" value="d"> func</label>
                    </div>

                    <!-- 14 -->
                    <div class="q">
                        <p><strong>14. Sessões servem para:</strong></p>
                        <label><input type="radio" name="q14" value="a" required> Armazenar no navegador</label>
                        <label><input type="radio" name="q14" value="b"> Armazenar no servidor</label>
                        <label><input type="radio" name="q14" value="c"> Criar HTML</label>
                        <label><input type="radio" name="q14" value="d"> Fazer requisições</label>
                    </div>

                    <!-- 15 -->
                    <div class="q">
                        <p><strong>15. Cookies são armazenados:</strong></p>
                        <select name="q15" required>
                            <option value="a">No servidor</option>
                            <option value="b">No navegador</option>
                        </select>
                    </div>

                    <!-- 16 -->
                    <div class="q">
                        <p><strong>16. Qual função pode consumir API?</strong></p>
                        <label><input type="radio" name="q16" value="a" required> echo</label>
                        <label><input type="radio" name="q16" value="b"> file_get_contents</label>
                        <label><input type="radio" name="q16" value="c"> isset</label>
                        <label><input type="radio" name="q16" value="d"> print_r</label>
                    </div>

                    <!-- 17 -->
                    <div class="q">
                        <p><strong>17. Sobre cURL:</strong></p>
                        <label><input type="checkbox" name="q17[]" value="a" required> Faz requisições HTTP</label>
                        <label><input type="checkbox" name="q17[]" value="b"> Consome APIs</label>
                        <label><input type="checkbox" name="q17[]" value="c"> Apenas imprime dados</label>
                        <label><input type="checkbox" name="q17[]" value="d"> Substitui sessão</label>
                    </div>

                    <!-- 18 -->
                    <div class="q">
                        <p><strong>18. Para acessar dados via POST usamos:</strong></p>
                        <label><input type="radio" name="q18" value="a" required> $_GET</label>
                        <label><input type="radio" name="q18" value="b"> $_POST</label>
                        <label><input type="radio" name="q18" value="c"> $_SESSION</label>
                        <label><input type="radio" name="q18" value="d"> $_COOKIE</label>
                    </div>

                    <!-- 19 -->
                    <div class="q">
                        <p><strong>19. Para verificar se variável existe:</strong></p>
                        <label><input type="radio" name="q19" value="a" required> check()</label>
                        <label><input type="radio" name="q19" value="b"> isset()</label>
                        <label><input type="radio" name="q19" value="c"> exist()</label>
                        <label><input type="radio" name="q19" value="d"> verify()</label>
                    </div>

                    <!-- 20 -->
                    <div class="q">
                        <p><strong>20. Para iniciar sessão usamos:</strong></p>
                        <label><input type="radio" name="q20" value="a" required> start_session()</label>
                        <label><input type="radio" name="q20" value="b"> session_start()</label>
                        <label><input type="radio" name="q20" value="c"> init_session()</label>
                        <label><input type="radio" name="q20" value="d"> begin_session()</label>
                    </div>

                    <button type="submit">Finalizar Quiz</button>

                </form>

            </div>
        </section>
    </main>

</body>

</html>