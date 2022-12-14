<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleados') }}
        </h2>
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
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach ($empleados as $empleado)
                    <tr>
                        <th>{{ $empleado->lastName }}</th>
                        <th>{{ $empleado->firstName }}</th>
                        <th>{{ $empleado->employeeNumber }}</th>
                        <th>{{ $empleado->email }}</th>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
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