@extends('layout.app')

@section('content')
    @include('partials.header') 
    <h1 class="text-2xl font-semibold mb-4">Data Pemain</h1>

    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Pemain</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No Punggung</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Posisi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($pemain as $p)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $p->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $p->nama_pemain }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $p->no_punggung }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $p->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('partials.footer') 
@endsection
