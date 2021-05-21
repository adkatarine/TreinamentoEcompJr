@extends('layouts.admin')

@section('content')
<main role="main" class="container" id="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron descricao-div">
        <div class="container">
            <p class="card-text" id="p-title">Diretrizes Estratégicas da Empresa</p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="card border-light mb-3 div" style="max-width: 18rem;">
                <div class="card-header">Icon </div>
                <div class="card-body">
                    <p class="card-title p-form">Missão</p>
                    <p class="card-text"> Através da vivência empresarial e trabalho em equipe, formar profissionais <b> inovadores</b>, <b>comprometidos</b> e <b>capazes de vencer desafios</b> futuros.</p>
                </div>
            </div>
            <div class="card border-light mb-3 div" style="max-width: 18rem;">
                <div class="card-header">Icon</div>
                <div class="card-body">
                <p class="card-title p-form">Visão</p>
                    <p class="card-text">Ser uma empresa que realiza <b>projetos de impacto</b>, mais <b>conectada ao movimento empresa júnior</b> e com grande reconhecimento <b>dentro e fora</b> da universidade.</p>
                </div>
            </div>
            <div class="card border-light mb-3 div" style="max-width: 18rem;">
                <div class="card-header">Icon</div>
                <div class="card-body">
                <p class="card-title p-form">Valores</p>
                    <p class="card-text">Os valores de uma empresa guiam a conduta da mesma, portanto a EcompJr. baseia-se nos seguintes valores: <b>Protagonismo, Cooperatividade, Assiduidade, Resiliência, Constância em resultados, Evolução com os erros, Conexão com o Movimento, Foco na Qualidade, Ética e Empatia</b>.</p>
                </div>
            </div>

            <hr>

        </div> <!-- /container -->

</main><!-- /.container -->
@endsection