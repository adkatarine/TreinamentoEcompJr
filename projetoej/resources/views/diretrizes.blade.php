@extends('layouts.admin')

@section('content')
<main role="main" class="container">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Nossas Diretrizes</h1>
            <p>Veja alguns dos serviços que a EcompJr oferece para que você possa realizar o projeto dos seus sonhos, remover aquele gargalo operacional automatizando processos e alavancar ainda mais a sua empresa.</p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="card border-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Icon</div>
                <div class="card-body">
                    <h5 class="card-title">Missão</h5>
                    <p class="card-text"> Através da vivência empresarial e trabalho em equipe, formar profissionais <b> inovadores</b>, <b>comprometidos</b> e <b>capazes de vencer desafios</b> futuros.</p>
                </div>
            </div>
            <div class="card border-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Icon</div>
                <div class="card-body">
                    <h5 class="card-title">Visão</h5>
                    <p class="card-text">Ser uma empresa que realiza <b>projetos de impacto</b>, mais <b>conectada ao movimento empresa júnior</b> e com grande reconhecimento <b>dentro e fora</b> da universidade.</p>
                </div>
            </div>
            <div class="card border-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Icon</div>
                <div class="card-body">
                    <h5 class="card-title">Valores</h5>
                    <p class="card-text">Os valores de uma empresa guiam a conduta da mesma, portanto a EcompJr. baseia-se nos seguintes valores: <b>Protagonismo, Cooperatividade, Assiduidade, Resiliência, Constância em resultados, Evolução com os erros, Conexão com o Movimento, Foco na Qualidade, Ética e Empatia</b>.</p>
                </div>
            </div>

            <hr>

        </div> <!-- /container -->

</main><!-- /.container -->
@endsection