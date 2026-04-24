# 🧠 DevWeb Simulado Quiz

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
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
├── index.html
├── model/
│   ├── api.php
│   ├── processamento.php
│   ├── session.php
│   └── logout.php
├── view/
│   ├── css/
│   ├── img/
│   ├── login.php
│   ├── quiz.php
│   └── resultados.php
└── .gitattributes
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

