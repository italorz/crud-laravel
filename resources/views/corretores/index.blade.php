<!DOCTYPE html>
<html>

<head>
    <title>Lista de Corretores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mx-auto mt-4" style="width: 400px;">
            <h2 class="mt-5">Cadastrar Corretor</h2>
            <form class="p-2 card shadow-sm" action="{{ route('corretores.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="cpf" name="cpf" required placeholder="Digite seu cpf" maxlength="11">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="creci" name="creci" required placeholder="Digite seu creci" minlength="2">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Digite seu nome" minlength="2">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        <h2 class="mt-5">Lista de Corretores</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>CRECI</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($corretores as $corretor)
                <tr>
                    <td>{{ $corretor->id }}</td>
                    <td>{{ $corretor->name }}</td>
                    <td>{{ $corretor->cpf }}</td>
                    <td>{{ $corretor->creci }}</td>
                    <td>
                        <a href="{{ route('corretores.edit', $corretor->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('corretores.destroy', $corretor->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
