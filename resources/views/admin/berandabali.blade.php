<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>{{ $title }}</h1>
                <h2>Nama : {{ $data['bali']['nama'] }}</h2>
                <h2>Prodi : {{ $data['bali']['prodi'] }}</h2>
                <h2>Alamat : {{ $data['bali']['alamat'] }}</h2>
            </div>
        </div>
    </div>
</x-template-layout>
