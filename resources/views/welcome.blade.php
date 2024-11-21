<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo à Minha Tarefa - Quadro de Tarefas com Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            width: 90%;
            max-width: 650px;
        }
        h1 {
            color: #2C3E50;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin: 15px 0;
        }
        .button {
            background-color: #3498DB;
            color: #fff;
            padding: 12px 25px;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #2980B9;
        }
        .footer {
            font-size: 0.9em;
            color: #888;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Bem-vindo à Minha Tarefa sobre Quadro de Tarefas com Laravel</h1>
        <p>Olá! Seja bem-vindo à página da minha entrega sobre o quadro de tarefas desenvolvido com o framework Laravel.</p>
        <p>Este projeto tem como objetivo demonstrar a implementação de um quadro de tarefas onde você pode adicionar, editar, excluir e visualizar suas atividades de forma simples e eficiente.</p>
        <p>Aqui você encontrará a interface do quadro de tarefas, construída utilizando as melhores práticas do Laravel, com funcionalidades de autenticação, gerenciamento de tarefas e controle de status.</p>
        <p>Clique no link abaixo para acessar o sistema e conferir a funcionalidade completa do quadro de tarefas.</p>
        <a href="{{ route('tarefas.index') }}" class="button">Visualizar Quadro de Tarefas</a>

        <div class="footer">
            <p>Se tiver alguma dúvida sobre a implementação ou o funcionamento do sistema, fique à vontade para entrar em contato comigo. Agradeço pela atenção!</p>
        </div>
    </div>

</body>
</html>
