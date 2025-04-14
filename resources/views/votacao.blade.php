<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Votação do Grêmio Estudantil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5"> 
    <h2 class="text-center mb-4">Votação do Grêmio Estudantil</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('votar') }}" method="POST" class="card p-4 shadow">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Seu e-mail escolar</label>
            <input type="email" name="email" id="email" class="form-control" required placeholder="exemplo@escola.com">
        </div>

        <div class="mb-3">
            <label class="form-label">Escolha sua chapa:</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="chapa" id="chapa1" value="Chapa 1" required>
                <label class="form-check-label" for="chapa1">
                    Chapa 1 – União Estudantil
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="chapa" id="chapa2" value="Chapa 2" required>
                <label class="form-check-label" for="chapa2">
                    Chapa 2 – Voz Jovem
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Votar</button>
    </form>
</div>

</body>
</html>
