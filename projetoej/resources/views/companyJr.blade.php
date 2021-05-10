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
            <select name="federation_id" id="federation_id">
                <option value="" disabled selected>Selecione uma federação</option>
                @foreach($federacoes as $federacao)
                    <option value="{{$federacao->id}}">{{$federacao->nome}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>