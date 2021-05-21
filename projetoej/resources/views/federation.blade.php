@extends('layouts.admin')

@section('content')
<div class="container" id="div-form">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="p-form">Cadastrar Federação</p>
    <hr>
    <form action="/federation/save" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="Digite o nome da federação">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="state_id" placeholder="Digite o estado do estado">
        </div>
        <button type="submit" class="btn btn-primary" id="color-button">Cadastrar</button>
    </form>
    </div>
</div>
</div>
@endsection