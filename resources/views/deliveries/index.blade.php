<x-layout title="Listagem de Entregas" icone="bi bi-clipboard2">

    @isset($successMsg)
    <div class="alert alert-success text-center">
        <strong>{{ $successMsg }} </strong>
    </div>
    @endisset

    <a class="btn btn-primary btn-sm mb-3" href="{{ route('deliveries.create') }}"> CADASTRAR ENTREGAS </a>

    <table class="table table-striped table-bordered table-hover table-dark">
        <thead class="thead-light">
            <tr>
                <th class="col-1">#</th>
                <th class="col-1">TITULO</th>
                <th class="col-2">DESCRIÇÃO</th>
                <th class="col-2">LOCAL DE ENTREGA</th>
                <th class="col-1">STATUS</th>
                <th class="col-2">PRAZO</th>
                <th class="col-1 text-center">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deliveries as $delivery)
            <tr>
                <td class="col-1 break">{{ $delivery->id }}</td>
                <td class="col-1 break">{{ $delivery->title }}</td>
                <td class="col-1 break">{{ $delivery->descript }}</td>
                <td class="col-1 break">{{ $delivery->place }}</td>
                <td class="col-1">{{ $delivery->stats }}</td>
                <td class="col-1">{{ $delivery->deadline }}</td>
                <td class="col-1 text-center align-middle">
                    <span class="d-flex">
                        <!-- Botão de deletar -->
                        <form action="{{ route('deliveries.destroy',$delivery->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="bi bi-clipboard-x"></i></button>
                        </form>

                        <!-- BOtão de editar -->
                        <a href="{{ route('deliveries.edit', [$delivery->id]) }}" class="btn btn-primary ms-2"><i class="bi bi-pencil-square"></i></a>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>