<!DOCTYPE html>
<html>
<head>
    <title>Editar Corretor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Editar Corretor</h1>
        <form action="{{ route('corretores.update', $corretor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="cpf" name="cpf" required placeholder="Digite seu cpf" maxlength="11" value="{{ $corretor->cpf }}">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="creci" name="creci" required placeholder="Digite seu creci" minlength="2" value="{{ $corretor->creci }}">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Digite seu nome" minlength="2" value="{{ $corretor->name }}">
                </div>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
