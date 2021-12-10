@extends('layouts.app')

@section('content')
    <div class="container">
      
            @if (Session::has('menssage'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ Session::get('menssage') }}
            </div>
            @endif 
           

        <a href="{{ url('empleado/create') }}" class="btn btn-success">Register new empleado</a>
        <br>
        <br>
        <table class="table table-light">

            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Last Name 2</th>
                    <th>Email</th>
                    <th>Actions</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->id }}</td>
                        <td><img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $empleado->Foto }}"
                                alt="{{ $empleado->Foto }}" width="200">
                        </td>
                        <td>{{ $empleado->Nombre }}</td>
                        <td>{{ $empleado->ApellidoPaterno }}</td>
                        <td>{{ $empleado->ApellidoMaterno }}</td>
                        <td>{{ $empleado->Correo }}</td>

                        <td>
                            <a href="{{ url('/empleado/' . $empleado->id . '/edit') }}" class="btn btn-warning">
                                edit
                            </a>
                            |
                            <form action="{{ url('/empleado/' . $empleado->id) }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" value="Delete" class="btn btn-danger"
                                    onclick="return confirm('Are you sure about delet it?')">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
        {!! $empleados->links() !!}

    </div>


@endsection
