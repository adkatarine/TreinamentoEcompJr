@extends('layouts.admin')

@section('content')
<div class="container">
    <p>
        <h2>CADASTRAR EMPRESA JR</h2>
    </p>
    <form action="/company/save" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Empresa</label>
            <input type="text" class="form-control" name="empresa" aria-describedby="emailHelp" placeholder="Digite o nome da empresa">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" name="federation_id" id="federation_id">
                <option value="" disabled selected>Selecione uma federação</option>
                @foreach($federacoes as $federacao)
                <option value="{{$federacao->id}}">{{$federacao->nome}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection