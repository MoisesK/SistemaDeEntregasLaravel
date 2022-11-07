<x-layout title="Listagem de Entregas" icone="bi bi-clipboard2">

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
                <td class="col-1">{{ $delivery->id }}</td>
                <td class="col-1">{{ $delivery->title }}</td>
                <td class="col-1">{{ $delivery->descript }}</td>
                <td class="col-1">{{ $delivery->place }}</td>
                <td class="col-1">{{ $delivery->stats }}</td>
                <td class="col-1">{{ $delivery->deadline }}</td>
                <td class="col-1 text-center align-middle">
                    <form action="{{ route('deliveries.destroy',$delivery->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="bi bi-clipboard-x"></i></button>
                        <a href="/deliveries/update"><i class="bi bi-pencil-square"></i></a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>