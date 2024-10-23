<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Senges - @yield('title')</title>
    <!-- Inserir CSS do Materialize -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Inserir o Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <!-- Carregando o partial -->
        @include('partials.navbar')
    </header>
    <!-- Principal -->
    <main class="container">
        <!-- Verifica se existe uma mensagem de sucesso -->
        @if (session('success'))
            <div class="card green lighten-1 white-text">
                <div class="card-content">
                    <span class="card-title">Sucesso</span>
                    <p>{{ session('success') }}</p>
                </div>
                <div class="card-action">
                    <a href="#" class="white-text" onclick="this.closest('.card').style.display='none';">Fechar</a>
                </div>
            </div>
        @endif

        <!-- Verifica se existe uma mensagem de erro -->
        @if (session('error'))
            <div class="card red lighten-1 white-text">
                <div class="card-content">
                    <span class="card-title">Erro</span>
                    <p>{{ session('error') }}</p>
                </div>
                <div class="card-action">
                    <a href="#" class="white-text" onclick="this.closest('.card').style.display='none';">Fechar</a>
                </div>
            </div>
        @endif

        <div class="section" style="min-height: 675px;">
            @yield('content')
        </div>
    </main>
    <!-- Rodapé -->
    <!-- Carregando o partial -->
    @include('partials.footer')
    <!-- Inserir JS do Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
