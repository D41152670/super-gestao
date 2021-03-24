<h3>Fornecedor</h3>

@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
        Iteração Atual: {{ $loop->iteration }} <br />

        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? 'CNPJ não Cadastrado' }}
        <br />
        Telefone : {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG
                @break
            @case('85')
                Fortaleza - CE
                @break
            @default
                Estado não identificado
        @endswitch
        <br />
        @if($loop->first)
            Primeira iteração do loop
        @endif
            @if($loop->last)
            Última iteração do loop
            <br />
            Total de registros: {{ $loop->count }}
        @endif
        <hr />
        <br />
        @empty
            Não existem fornecedores cadastrados!
    @endforelse
@endisset

<br />



