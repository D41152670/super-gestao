@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                @component('site.layouts._components.form_contato', ['classe' => 'borda-branca', 'motivo_contatos' => $motivo_contatos])
                @endcomponent
            </div>
        </div>

@endsection