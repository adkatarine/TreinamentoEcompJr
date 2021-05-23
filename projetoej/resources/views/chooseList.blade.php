@extends('layouts.admin')

@section('content')
<div class="container" id="div-form">
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <p class="p-form">Listar Empresas:</p>
    <hr>
    <div class="form-group icon">
    <a href="{{ route('/company/list') }}/-1"><button class="btn btn-info #color-button"  type="submit">Todas</button></a>
    </div>
    <div class="form-group">
    <form action="{{ route('/company/list') }}" method="get" class="input-group">
    @csrf
        <select class="custom-select" name="selecionado"  aria-label="Example select with button addon">
            <option value="0" disabled selected>Por Federação</option>
            @foreach($federacoes as $federacao)
                <option value="{{$federacao->id}}">{{$federacao->nome}}</option>
            @endforeach
        </select>
        <div class="input-group-append">
            <button class="btn btn-info #color-button" type="submit">Buscar</button>
        </div>
    </form>
    </div>
    </div>
</div>
</div>
@endsection