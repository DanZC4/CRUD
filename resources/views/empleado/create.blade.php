@extends('layouts.app')

@section('content')
    <div class="flex justify-center pt-24">
       



<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
@include('empleado.form', ['mode' => 'create'])

</form>

</div>


@endsection