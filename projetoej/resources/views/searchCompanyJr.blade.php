<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h2>Empresas Jr Buscada</h2>
    <hr/>
        @if($empresa != null)
            <p>Nome: <tr>{{$empresa->nome}}</tr></p>
            <p>Federação: <tr>{{$empresa->federation->nome}}</tr></p>
            <p>Estado: <tr>{{$empresa->federation->state->nome}}</tr></p>
        @else
            <p>Empresa Jr não foi encontrada.</p>
        @endif
        <a href="{{ url('/') }}" ><button >Retornar para a home.</button></a>
    </div>
</body>
</html>