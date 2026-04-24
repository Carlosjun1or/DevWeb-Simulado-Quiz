# 🧠 DevWeb Simulado Quiz

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)</br>
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)</br>
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

Um sistema de simulado interativo desenvolvido em **PHP**, focado em proporcionar uma experiência dinâmica de aprendizado. O projeto foi concebido como uma atividade prática para a disciplina de **Desenvolvimento Web**, integrando lógica de back-end com APIs externas de tradução e citações motivacionais.

</br>

## 🚀 Funcionalidades

- **Sistema de Login:** Acesso restrito para identificação do usuário e gestão de sessões.

- **Quiz Interativo:** 20 questões técnicas com diferentes formatos de resposta.

- **Processamento em Tempo Real:** Validação instantânea de acertos e erros ao finalizar o simulado.

- **Integração com APIs:**
  - ```MyMemory API:``` Tradução automática de conteúdos.
  - ```ZenQuotes API:``` Exibição de frases motivacionais dinâmicas na tela de resultados.

- **Interface Responsiva:** Design adaptável para diferentes dispositivos e resoluções.

</br>

## 🛠️ Tecnologias e Ferramentas

O projeto utiliza as seguintes tecnologias:

- **Linguagem Principal:** ```PHP``` (Lógica de negócio e sessões)

- **Front-end:** ```HTML5``` e ```CSS3``` (Estruturação e estilização modular)

- **Integrações:** ```cURL``` para consumo de APIs REST.

- **Versionamento:** ```Git & GitHub```.

</br>

## 📂 Estrutura de Pastas

```
/DevWeb-Simulado-Quiz
├── index.html          # Ponto de entrada (redirecionamento)
├── model/              # Lógica de negócio e processamento
│   ├── api.php         # Integração com APIs externas (Tradução/Citações)
│   ├── processamento.php # Validação do gabarito e cálculo de pontos
│   ├── session.php      # Controle de autenticação e persistência
│   └── logout.php       # Encerramento de sessão
├── view/               # Camada de apresentação
│   ├── css/            # Estilos (Global, Layout, Quiz, Resultados)
│   ├── img/            # Ativos visuais e logotipos
│   ├── login.php       # Interface de autenticação
│   ├── quiz.php        # Interface do simulado
│   └── resultados.php  # Exibição de desempenho e frases motivacionais
└── .gitattributes      # Configurações do repositório
```

</br>

## ⚙️ Como Executar o Projeto

1. **Pré-requisitos:**
  - Servidor local (XAMPP, WAMP, Laragon ou PHP Built-in Server).
  - Conexão com a internet (para as APIs externas).

1. **Instalação:**

   ```bash
   # Clone o repositório
   git clone https://github.com/Carlosjun1or/DevWeb---Simulado-Quiz.git
   
   # Mova para a pasta do servidor (ex: htdocs )
   cd DevWeb---Simulado-Quiz
   ```

1. **Execução:**
  - Inicie seu servidor.
  - Acesse `http://localhost/DevWeb---Simulado-Quiz` no seu navegador.

</br>

## 📚 Contexto Acadêmico

Este projeto foi desenvolvido com o objetivo de aplicar conceitos fundamentais de:

```
- Manipulação de **Superglobais** (`$_POST`, `$_SESSION` ).

- Estruturas de controle e repetição em PHP.

- Consumo de serviços web via **JSON**.

- Organização de código seguindo padrões de separação de responsabilidades.
```

</br>

# 👥 Colaboradores

| Nome |
| :--- |
| [**Carolina Ribeiro**](https://github.com/caroldvlribeiro) |
| [**Carlos Roberto**](https://github.com/Carlosjun1or) |

</br>

> "O sucesso é a soma de pequenos esforços repetidos dia após dia." — *Frase traduzida via ZenQuotes API*

