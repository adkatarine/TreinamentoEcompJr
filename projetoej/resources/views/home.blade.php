<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="{{ url('/company') }}" ><button >Cadastrar Empresa</button></a>
        <a href="{{ url('/federation') }}" ><button >Cadastrar Federacao</button></a>
        <a href="{{ url('/company/list')}}/-1" ><button type="submit" >Listar todas as empresas</button></a>
        <br>
        <br>
        <form action="{{ route('/company/list') }}" method="get">
            <select name="selecionado">
                <option value="0" disabled selected>Selecione uma federação</option>
                @foreach($federacoes as $federacao)
                    <option value="{{$federacao->id}}">{{$federacao->nome}}</option>
                @endforeach
            </select>
            <button type="submit" >Listar empresas por federação</button>
        </form>
        <br>
        <form action="{{ route('/company/search') }}" method="get">
            <input type="text" name="empresa" id="empresa" placeholder="Escreva o nome da Empresa">
            <button type="submit" >Buscar EmpresaJr</button>
        </form>

    </div>
</body>
</html>