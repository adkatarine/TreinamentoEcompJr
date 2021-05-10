<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>CADASTRAR EMPRESA JR</h2>
        <form action="/company/save" method="post">
        @csrf
            <label for="">Nome</label>
            <input type="text" name="nome" placeholder="Escreva seu Nome"/>
            <label for="">Federação</label>
            <input type="text" name="federation_id" placeholder="Escreva sua Federação"/>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>