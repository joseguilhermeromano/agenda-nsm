@extends('templates.master')

@section('titulo', 'Apresentação')

@section('conteudo')

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?= asset('images/apresentacao.jpg') ?>" width="100%" height="100%" alt="logo">
                </div>
                <div class="col-sm-6">
                    <h1>TESTE</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
@stop