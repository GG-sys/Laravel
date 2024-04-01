<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Veiculos</title>
</head>
<body>
    <h1>Lista Veiculos</h1>
    <a href="/veiculos">Lista</a><br>
    <a href="/veiculos/novo">Novo</a><br>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fabricante</th>
                <th>Modelo</th>
                <th>Cavalos</th>
            </tr>
        </thead>

        <tbody>
            @foreach($lista as $v)
                <tr>
                    <td>{{ $v -> id}}</td>
                    <td>{{ $v -> fabricante}}</td>
                    <td>{{ $v -> modelo}}</td>
                    <td>{{ $v -> cavalos}}</td>
                    <td>
                        <form action="/veiculos/edit" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $v -> id }}">
                            <button>Editar</button>
                        </form>
                    </td>
                    <td>
                        <form action="/veiculos/delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $v -> id }}">
                            <button>Deletar</button>
                        </form>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>