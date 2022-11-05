<x-layout title="Lista">
    <ul>
        @foreach ($deliveries as $delivery)
        <li>{{ $delivery }}</li>
        @endforeach
    </ul>
</x-layout>