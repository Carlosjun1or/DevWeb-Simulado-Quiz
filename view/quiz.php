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
                        <label class="pergunta">1. O comando echo é utilizado para:</label>
                        <label class="opcao"><input type="radio" name="q1" value="a" required> Receber dados</label>
                        <label class="opcao"><input type="radio" name="q1" value="b"> Exibir dados</label>
                        <label class="opcao"><input type="radio" name="q1" value="c"> Criar funções</label>
                        <label class="opcao"><input type="radio" name="q1" value="d"> Encerrar o código</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">2. Em PHP, uma variável começa com:</label>
                        <label class="opcao"><input type="radio" name="q2" value="a" required> #</label>
                        <label class="opcao"><input type="radio" name="q2" value="b"> $</label>
                        <label class="opcao"><input type="radio" name="q2" value="c"> @</label>
                        <label class="opcao"><input type="radio" name="q2" value="d"> &</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">3. Qual é uma variável válida?</label>
                        <label class="opcao"><input type="radio" name="q3" value="a" required> $1nome</label>
                        <label class="opcao"><input type="radio" name="q3" value="b"> $nome_usuario</label>
                        <label class="opcao"><input type="radio" name="q3" value="c"> nome$</label>
                        <label class="opcao"><input type="radio" name="q3" value="d"> $nome-usuario</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">4. Qual método envia os dados pela URL?</label>
                        <select name="q4" required>
                            <option value="">Selecione...</option>
                            <option value="a">POST</option>
                            <option value="b">GET</option>
                        </select>
                    </div>

                    <div class="q">
                        <label class="pergunta">5. Sobre o método POST (marque as corretas):</label>
                        <label class="opcao"><input type="checkbox" name="q5[]" value="a"> Dados ficam visíveis
                            na URL</label>
                        <label class="opcao"><input type="checkbox" name="q5[]" value="b" required> Mais seguro para
                            envio de dados</label>
                        <label class="opcao"><input type="checkbox" name="q5[]" value="c"> Permite envio de
                            grande volume de dados</label>
                        <label class="opcao"><input type="checkbox" name="q5[]" value="d"> Só funciona com
                            textos</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">6. Qual input é mais adequado para senha?</label>
                        <label class="opcao"><input type="radio" name="q6" value="a" required> text</label>
                        <label class="opcao"><input type="radio" name="q6" value="b"> email</label>
                        <label class="opcao"><input type="radio" name="q6" value="c"> password</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">7. Qual permite escolher apenas UMA opção?</label>
                        <label class="opcao"><input type="radio" name="q7" value="a" required> checkbox</label>
                        <label class="opcao"><input type="radio" name="q7" value="b"> radio</label>
                        <label class="opcao"><input type="radio" name="q7" value="c"> text</label>
                        <label class="opcao"><input type="radio" name="q7" value="d"> textarea</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">8. Checkbox é usado quando:</label>
                        <select name="q8" required>
                            <option value="">Selecione...</option>
                            <option value="a">Apenas uma opção</option>
                            <option value="b">Múltiplas opções</option>
                        </select>
                    </div>

                    <div class="q">
                        <label class="pergunta">9. A tag &lt;select&gt; serve para:</label>
                        <label class="opcao"><input type="radio" name="q9" value="a" required> Campos de texto</label>
                        <label class="opcao"><input type="radio" name="q9" value="b"> Lista suspensa</label>
                        <label class="opcao"><input type="radio" name="q9" value="c"> Botão</label>
                        <label class="opcao"><input type="radio" name="q9" value="d"> Sessão</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">10. Qual estrutura usamos para decisão?</label>
                        <label class="opcao"><input type="radio" name="q10" value="a" required> for</label>
                        <label class="opcao"><input type="radio" name="q10" value="b"> echo</label>
                        <label class="opcao"><input type="radio" name="q10" value="c"> if</label>
                        <label class="opcao"><input type="radio" name="q10" value="d"> array</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">11. Qual estrutura usamos para repetição?</label>
                        <label class="opcao"><input type="radio" name="q11" value="a" required> if</label>
                        <label class="opcao"><input type="radio" name="q11" value="b"> echo</label>
                        <label class="opcao"><input type="radio" name="q11" value="c"> for</label>
                        <label class="opcao"><input type="radio" name="q11" value="d"> isset</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">12. Um array é:</label>
                        <label class="opcao"><input type="radio" name="q12" value="a" required> Uma função</label>
                        <label class="opcao"><input type="radio" name="q12" value="b"> Uma variável com múltiplos
                            valores</label>
                        <label class="opcao"><input type="radio" name="q12" value="c"> Um formulário</label>
                        <label class="opcao"><input type="radio" name="q12" value="d"> Um loop</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">13. Para criar uma função usamos:</label>
                        <label class="opcao"><input type="radio" name="q13" value="a" required> create</label>
                        <label class="opcao"><input type="radio" name="q13" value="b"> function</label>
                        <label class="opcao"><input type="radio" name="q13" value="c"> delf</label>
                        <label class="opcao"><input type="radio" name="q13" value="d"> func</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">14. Sessões servem para:</label>
                        <label class="opcao"><input type="radio" name="q14" value="a" required> Armazenar no
                            navegador</label>
                        <label class="opcao"><input type="radio" name="q14" value="b"> Armazenar no servidor</label>
                        <label class="opcao"><input type="radio" name="q14" value="c"> Criar HTML</label>
                        <label class="opcao"><input type="radio" name="q14" value="d"> Fazer requisições</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">15. Cookies são armazenados:</label>
                        <select name="q15" required>
                            <option value="">Selecione...</option>
                            <option value="a">No servidor</option>
                            <option value="b">No navegador</option>
                        </select>
                    </div>

                    <div class="q">
                        <label class="pergunta">16. Qual função pode consumir API?</label>
                        <label class="opcao"><input type="radio" name="q16" value="a" required> echo</label>
                        <label class="opcao"><input type="radio" name="q16" value="b"> file_get_contents</label>
                        <label class="opcao"><input type="radio" name="q16" value="c"> isset</label>
                        <label class="opcao"><input type="radio" name="q16" value="d"> print_r</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">17. Sobre cURL (marque as corretas):</label>
                        <label class="opcao"><input type="checkbox" name="q17[]" value="a"> Faz requisições
                            HTTP</label>
                        <label class="opcao"><input type="checkbox" name="q17[]" value="b" required> Consome
                            APIs</label>
                        <label class="opcao"><input type="checkbox" name="q17[]" value="c"> Apenas imprime
                            dados</label>
                        <label class="opcao"><input type="checkbox" name="q17[]" value="d"> Substitui
                            sessão</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">18. Para acessar dados via POST usamos:</label>
                        <label class="opcao"><input type="radio" name="q18" value="a" required> $_GET</label>
                        <label class="opcao"><input type="radio" name="q18" value="b"> $_POST</label>
                        <label class="opcao"><input type="radio" name="q18" value="c"> $_SESSION</label>
                        <label class="opcao"><input type="radio" name="q18" value="d"> $_COOKIE</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">19. Para verificar se a variável existe:</label>
                        <label class="opcao"><input type="radio" name="q19" value="a" required> check()</label>
                        <label class="opcao"><input type="radio" name="q19" value="b"> isset()</label>
                        <label class="opcao"><input type="radio" name="q19" value="c"> exist()</label>
                        <label class="opcao"><input type="radio" name="q19" value="d"> verify()</label>
                    </div>

                    <div class="q">
                        <label class="pergunta">20. Para iniciar uma sessão usamos:</label>
                        <label class="opcao"><input type="radio" name="q20" value="a" required> start_session()</label>
                        <label class="opcao"><input type="radio" name="q20" value="b"> session_start()</label>
                        <label class="opcao"><input type="radio" name="q20" value="c"> init_session()</label>
                        <label class="opcao"><input type="radio" name="q20" value="d"> begin_session()</label>
                    </div>

                    <button type="submit">Finalizar Quiz</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>