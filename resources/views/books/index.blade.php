<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
</head>
<body>
    <h1>Lista de Livros</h1>
    <a href="{{ route('items.create') }}">Adicionar Item</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ route('items.show', $item->id) }}">Ver</a>
                        <a href="{{ route('items.edit', $item->id) }}">Editar</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
