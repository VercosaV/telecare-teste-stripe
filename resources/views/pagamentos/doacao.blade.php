<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe</title>
    <!-- CSS do Bootstrap 5 via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main class="container mt-5 mb-5">

        <p class="text-center">
            Faça uma doação
        </p>

        <div class="row">
            <form class="row g-3" action="{{ route('stripe.pagamento') }}" method="POST">
                @csrf
                <div class="md:col-6">
                    <label for="inputEmail4" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="md:col-6">
                    <label for="inputPassword4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Valor</label>
                    <input type="number" class="form-control" id="inputAddress" name="valor"
                        placeholder="Exemplo: 70">
                </div>
            
            
                <div class="col-12">
                    <button type="submit" class="btn-solid theme-primary">Doar</button>
                </div>
            </form>
        </div>

    </main>
    <!-- JS do Bootstrap 5 (Opcional para componentes interativos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
