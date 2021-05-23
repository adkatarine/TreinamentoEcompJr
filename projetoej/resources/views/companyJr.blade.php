@extends('layouts.admin')

@section('content')
<div class="container" id="div-form">
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <p class="p-form">Cadastrar Empresa Jr</p>
    <hr>
    <form action="/company/save" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="Digite o nome da empresa">
        </div>
        <div class="form-group">
            <select class="form-control" name="federation_id" id="federation_id">
                <option value="" disabled selected>Selecione uma federação</option>
                @foreach($federacoes as $federacao)
                <option value="{{$federacao->id}}">{{$federacao->nome}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary" id="color-button">Cadastrar</button>
    </form>
    </div>
</div>
</div>
@endsection