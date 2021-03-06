@extends('templates.master')

@section('titulo', 'Contato')

@section('conteudo')

    <div class="row">
        <div class="col-sm-12 offset-md-2 col-md-8 offset-lg-0 col-lg-6">
            <img class="img-fluid img-max-contato" src="<?= asset('images/ilustra-contato.jpg') ?>" alt="logo">
        </div>
        <div class="col-sm-12 offset-md-2 col-md-8 offset-lg-0 col-lg-6">
            <div class="container-fluid">
                <br>
                <h1 class="estilo-titulo text-left">Contato</h1>
                <br>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
        
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Ops!</strong> Aconteceu alguns problemas ao tentar enviar.
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contato.salvar.post') }}" method="POST" enctype="multipart/form-data" class="was-validated">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nome" >Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" size=10 required>
                                    <div class="invalid-feedback">Campo Obrigatório</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="email"  size=10 >Email:</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">Campo Obrigatório</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="telefone"  size=10 >Telefone:</label>
                                    <input type="text" class="form-control" id="telefone" placeholder="(xx) xxxx-xxxx" name="telefone" required>
                                    <div class="invalid-feedback">Campo Obrigatório</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="telefone"  size=10 >Mensagem:</label>
                                    <textarea class="form-control" id="mensagem" name="mensagem" col=4 row=4 required></textarea>
                                    <div class="invalid-feedback">Campo Obrigatório</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="arquivo">Anexar arquivo:</label>
                                <input type="file" class="form-control-file" id="arquivo" name="arquivo" required>
                                <div class="invalid-feedback">Campo Obrigatório</div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center"><button type="submit" class="btn btn-danger">Enviar</button></div>
                </form>
            </div>
        </div>
    </div>

@stop