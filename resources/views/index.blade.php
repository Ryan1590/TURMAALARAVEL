

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>
<body>

<h1 class="text-center">Seja bem-vindo à página inicial</h1>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Unialfa</a>
    </div>
</nav>

<div class="container mt-5">
    <h1>Lista de clientes</h1>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>VISUALISAR</th>
                <th>ENDEREÇO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
          <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->nome }}</td>
            <td><a href="{{route('clients.show', $client)}}">{{ $client->nome }}</a></td>
            <td>{{ $client->endereco }}</td>
            <td><a href=""</a></td>
          </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
