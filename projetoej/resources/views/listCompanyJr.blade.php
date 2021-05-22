@extends('layouts.admin')

@section('content')
<main role="main" class="container" id="main">
    <div class="jumbotron title-div">
        <div class="container">
            <p class="p-form" id="p-title" style="font-size: 22px;">Lista de Empresas Jr</p>
        </div>
    </div>
    <div class="container">
        <div class="card card-list" style="width: 45rem;">
            <div class="card-body">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Empresa</th>
                    <th scope="col">Federação</th>
                    <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empresas as $empresa)
                        <tr>
                        <td>{{$empresa->nome}}</td>
                        <td>{{$empresa->federation->nome}}</td>
                        <td>{{$empresa->federation->state->nome}}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection