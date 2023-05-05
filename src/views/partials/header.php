<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>~ CRUD MVC ~</title>
    <style>
        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            text-align: center;
            margin: 0 auto 40px;
            max-width: 1920px;
        }
        .id {
            width: 10%;
        }
        .nome {
            width: 40%;
        }
        .email {
            width: 40%;
        }
        .acoes {
            width: 10%;
        }
        table form {
            display: inline-block;
        }
        table form button {
            padding: 1;
            font-size: 10px;
            justify-content: center;
            width: 40px;
            display: inline-flex;
        }
        hr {
            margin: 0;
        }
        .novo {
            display: inline-block;
            margin: 20px;
        }
        tr {
            height: 27px;
        }
        th {
            height: 30px;
            background-color: #ccc;
        }
        footer {
            margin-top: 30px;
        }

    </style>
</head>
<body>
    <header>
        <h1>Título do site</h1>
        <p><a href="/crudmvc">Página inicial</a></p>
        <hr>
    </header>
    <main>