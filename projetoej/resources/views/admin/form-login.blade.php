@extends('layouts.admin')

@section('content')
<div class="container" id="div-form">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="p-form">Login</p>
    <hr>
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
            <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Digite seu email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
        </div>
        <button type="submit" class="btn btn-primary" id="color-button">Entrar</button>
    </form>
    </div>
</div>
</div>
@endsection