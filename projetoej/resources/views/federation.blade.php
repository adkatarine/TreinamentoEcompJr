@extends('layouts.admin')

@section('content')
<div class="container">
    <p>
        <h2>CADASTRAR FEDERAÇÃO</h2>
    </p>
    <form action="/federation/save" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Federação</label>
            <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="Digite o nome da federação">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Estado</label>
            <input type="text" class="form-control" name="state_id" placeholder="Digite o estado da federação">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection