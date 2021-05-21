@extends('layouts.admin')

@section('content')
<div class="container">
    <p>
        <h2>Login</h2>
    </p>
    <form action="/login/save" method="post">
        @csrf

        @if($errors->all())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Digite seu email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="text" class="form-control" name="password" placeholder="Digite sua senha">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
@endsection