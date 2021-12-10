<h1>{{ $mode }} employee</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
      
                @foreach ($errors->all() as $error)
                <li>  {{ $error }}     </li>
                @endforeach
       
        </ul>
    </div>

@endif

<div class="form-group">
    <label for="Nombre"> Nombre</label>
    <input class="form-control" type="text" name="Nombre"
        value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}" id="Nombre">
    <br>
</div>

<div class="form-group">
    <label for="ApellidoPaterno">ApellidoPaterno</label>
    <input type="text" name="ApellidoPaterno" class="form-control"
        value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno') }}" id="ApellidoPaterno">
    <br>
</div>
<div class="form-group">
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input class="form-control" type="text" name="ApellidoMaterno"
        value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : old('ApellidoMaterno') }}" id="ApellidoMaterno">
    <br>
</div>

<div class="form-group">
    <label for="Correo">Email</label>
    <input class="form-control" type="email" name="Correo"
        value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}" id="Correo">
    <br>
</div>

<div class="form-group">
    <label for="Foto">Photo</label>
    @if (isset($empleado->Foto))
        <img src="{{ asset('storage') . '/' . $empleado->Foto }}"
            alt="{{ isset($empleado->Foto) ? $empleado->Foto : old('Foto') }}" width="400px">
    @endif

    <input type="file" class="form-control" name="Foto" value="{{ isset($empleado->Foto) ? $empleado->Foto : old('Foto') }}"
        id="Foto">
    <br>
</div>
<input class="btn btn-success" type="submit" value="{{ $mode }}">

<a href="{{ url('empleado') }}" class="btn btn-primary">to back</a>
