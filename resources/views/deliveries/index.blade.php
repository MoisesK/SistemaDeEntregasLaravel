<x-layout title="Listagem de Entregas" icone="bi bi-clipboard2">
    <ul>
        @foreach ($deliveries as $delivery)
        <li>{{ $delivery }}</li>
        @endforeach
    </ul>
</x-layout>