@extends('layouts.app')

@section('content')
    <div class="flex justify-center pt-24">
<form action="{{ url('/empleado/' . $empleado->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    @include('empleado.form', ['mode' => 'edit'])

</form>


</div>


@endsection