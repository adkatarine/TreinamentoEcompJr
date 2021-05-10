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
        <a href="{{ url('/company/list') }}" ><button >Listar Empresas</button></a>
    </div>
</body>
</html>