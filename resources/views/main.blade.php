@extends('templates.master')

@section('titulo', 'Apresentação')

@section('conteudo')

    <div class="row">
        <div class="col-sm-12 offset-md-2 col-md-8 offset-lg-0 col-lg-6">
            <img class="img-fluid img-max-main" src="<?= asset('images/apresentacao.jpg') ?>" alt="logo">
        </div>
        <div class="col-sm-12 offset-md-2 col-md-8 offset-lg-0 col-lg-6">
            <br>
            <h1 class="estilo-titulo text-left">Seja Bem-vindo!</h1>
            <h5 class="estilo-subtitulo text-left">Agenda Netshows.me</h5>
            <br>
            <p class="text-left justify formata-texto">Temos como missão ajudar empresas e organizações a construírem e sustentarem negócios por meio de tecnologias de vídeos online e transmissões ao vivo. Nos consolidamos como referência do setor e já recebemos diversos prêmios nacionais e internacionais pela nossa cultura de inovação, atendendo clientes de diversos portes e mercados como Oracle, Santander, XP Investimentos, B3 e centenas de outros.</p>
            <p class="text-left justify formata-texto">Se você quer trabalhar num ambiente colaborativo e flexível, a Netshow.me é o lugar certo! Nossa cultura de trabalho tem como pilares o aprendizado rápido, aprimoramento constante, diálogo entre as equipes e foco nas necessidades do cliente. Quer se desenvolver profissionalmente e crescer com a empresa? Aqui é o lugar ideal para o crescimento da sua carreira!</p>
        </div>
    </div>

@stop