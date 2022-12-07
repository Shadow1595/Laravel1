<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
        <a href="{{ route('clientes.registrar') }}" class="btn btn-primary registrar">Registrar cliente</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th>Appellido</th>
                        <th>Telefono</th>
                        <th>Dirrecion</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach ($listado as $cliente)
                    <tr>
                        <th>{{ $cliente->contactFirstName }}</th>
                        <th>{{ $cliente->contactLastName }}</th>
                        <th>{{ $cliente->phone }}</th>
                        <th>{{ $cliente->addressLine1 }}</th>
                        <td>
                            <a href="/clientes/actualizar/{{ $cliente->customerNumber }}" class="btn btn-success">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </table>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>