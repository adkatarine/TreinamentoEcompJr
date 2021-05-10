<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>CADASTRAR FEDERAÇÃO</h2>
        <form action="/federation/save" method="post">
        @csrf
            <input type="text" name="nome" placeholder="Escreva seu Nome">Nome</input>
            <input type="text" name="state_id" placeholder="Escreva seu Estado"> Estado</input>
            <br>
            <br>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>