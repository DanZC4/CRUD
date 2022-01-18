@extends('layouts.app')


@section('content')

    <div class="mt-8">


        <div class="flex justify-center">
            <div>

                <div>



                    <a href="{{ url('empleado/create') }}"
                        class="bg-blue-500 text-white font-bold p-2 rounded-md  ">Register new
                        empleado</a>

                    @if (Session::has('menssage'))
                        <div class="bg-red-500 text-white font-bold p-2 rounded-lg my-3" role="alert">
                            {{ Session::get('menssage') }}
                        </div>
                    @endif
                </div>
                <br>

                <table class="table table-light">

                    <thead class="thead-light">
                        <tr class="bg-green-500 text-gray-100   ">
                            <th class="w-16 border-2 border-gray-50">Id</th>
                            <th class="border-2 border-gray-50">Photo</th>
                            <th class="w-32 border-2 border-gray-50">Name</th>
                            <th class="w-32 border-2 border-gray-50">Last Name</th>
                            <th class="w-56 border-2 border-gray-50">Last Name 2</th>
                            <th class="border-2 border-gray-50">Email</th>
                            <th class=" border-2 border-gray-50">Actions</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($empleados as $empleado)



                            <tr>
                                <td class="text-center">{{ $empleado->id }}</td>
                                <td><img class="w-56 h-44 bg-contain p-2"
                                        src="{{ asset('storage') . '/' . $empleado->Foto }}" alt="{{ $empleado->Foto }}"
                                        width="">
                                </td>
                                <td class="p-2">{{ $empleado->Nombre }}</td>
                                <td class="p-2">{{ $empleado->ApellidoPaterno }}</td>
                                <td class="p-2">{{ $empleado->ApellidoMaterno }}</td>
                                <td class="p-2">{{ $empleado->Correo }}</td>

                                @can('view', $empleado)
                                    <td>
                                        <div class="flex space-x-2">
                                            <div class="flex justify-center items-center">
                                                <a href="{{ url('/empleado/' . $empleado->id . '/edit') }}"
                                                    class=" py-2 px-3 text-white font-bold bg-yellow-500 rounded-md hover:bg-yellow-7   00 hover:py-3 hover:px-4 hover:text-xl duration-300 transform">
                                                    edit
                                                </a>
                                            </div>

                                            <form action="{{ url('/empleado/' . $empleado->id) }}" method="post"
                                                class="flex justify-center items-center">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <input type="submit" value="Delete"
                                                    class="cursor-pointer py-2 px-3 text-white font-bold bg-red-600 rounded-md hover:bg-red-500 hover:py-3 hover:px-4 hover:text-xl duration-300 transform"
                                                    onclick="return confirm('Are you sure about delet it?')">
                                            </form>
                                        </div>
                                    </td>
                                @endcan
                            </tr>

                        @endforeach

                    </tbody>

                </table>
                <div class="flex justify-center">
                    {!! $empleados->links('pagination::tailwind') !!}
                </div>
            </div>
         
        </div>
      
    </div>


@endsection
