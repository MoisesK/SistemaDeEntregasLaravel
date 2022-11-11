<x-layout title="Listagem de Entregadores" icone="bi bi-clipboard2">

    @isset($successMsg)
    <div class="alert alert-success text-center">
        <strong>{{ $successMsg }} </strong>
    </div>
    @endisset

    <a class="btn btn-primary btn-sm mb-3" href="{{ route('deliverymens.create') }}"> CADASTRAR ENTREGADOR </a>

    <table class="text-center table table-striped table-bordered table-hover table-dark pb-2">
        <thead class="thead-light">
            <tr>
                <th class="col-1">#</th>
                <th class="col-1">NOME</th>
                <th class="col-2">IDADE</th>
                <th class="col-2">ENDEREÇO</th>
                <th class="col-1">QTD DE ENTREGAS</th>
                <th class="col-2">VEÍCULO</th>
                <th class="col-1 text-center">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deliverie_mens as $delivery_men)
            <tr>
                <td class="col-1 break">{{ $delivery_men->id }}</td>
                <td class="col-1 break">{{ $delivery_men->name }}</td>
                <td class="col-1 break">{{ $delivery_men->age }}</td>
                <td class="col-1 break">{{ $delivery_men->adress }}</td>
                <td class="col-1 break">{{ $delivery_men->deliveries_id }}</td>
                <td class="col-1">{{ $delivery_men->vehicle }}</td>
                <td class="col-1 text-center align-middle">
                    <span class="d-flex">
                        <!-- Botão de deletar -->
                        <form action="{{ route('deliveries.destroy',$delivery_men->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="bi bi-clipboard-x"></i></button>
                        </form>

                        <!-- BOtão de editar -->
                        <a href="{{ route('deliveries.edit', [$delivery_men->id]) }}" class="btn btn-primary ms-2"><i class="bi bi-pencil-square"></i></a>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>