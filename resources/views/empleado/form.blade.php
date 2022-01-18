<div class="bg-blue-100 px-16 py-16 shadow-xl transform duration-200">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">{{ $mode }} employe</h1>

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="pb-3 flex flex-col">
        <label class="text-gray-900 font-bold" for="Nombre"> Nombre</label>
        <input class="outline-none p-1 border-b-2 border-gray-400  focus:border-yellow-500 bg-blue-100" type="text"
            name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}" id="Nombre">
        @error('Nombre')
        <div class="text-red-500 mt-2">
            {{$message}}
        </div>
        @enderror
       
        <br>
    </div>

    <div class="pb-3 flex flex-col">
        <label class="text-gray-900 font-bold" for="ApellidoPaterno">ApellidoPaterno</label>
        <input type="text" name="ApellidoPaterno"
            class="outline-none p-1 border-b-2 border-gray-400  focus:border-yellow-500 bg-blue-100"
            value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno') }}"
            id="ApellidoPaterno">
            @error('ApellidoPaterno')
            <div class="text-red-500 mt-2">
                {{$message}}
            </div>
            @enderror
        <br>
    </div>
    <div class="pb-3 flex flex-col">
        <label class="text-gray-900 font-bold" for="ApellidoMaterno">ApellidoMaterno</label>
        <input class="outline-none p-1 border-b-2 border-gray-400  focus:border-yellow-500 bg-blue-100" type="text"
            name="ApellidoMaterno"
            value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : old('ApellidoMaterno') }}"
            id="ApellidoMaterno">
            @error('ApellidoMaterno')
            <div class="text-red-500 mt-2">
                {{$message}}
            </div>
            @enderror
        <br>
    </div>

    <div class="pb-3 flex flex-col">
        <label class="text-gray-900 font-bold" for="Correo">Email</label>
        <input class="outline-none p-1 border-b-2 border-gray-400  focus:border-yellow-500 bg-blue-100" type="email"
            name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}" id="Correo">
            @error('Correo')
                <div class="text-red-500 mt-2">
                    {{$message}}
                </div>
            @enderror
        <br>
    </div>

    <div class="pb-3 flex flex-col space-y-2">
        <label class="text-gray-900 font-bold" for="Foto">Photo</label>
        @if (isset($empleado->Foto))
            <img src="{{ asset('storage') . '/' . $empleado->Foto }}"
                alt="{{ isset($empleado->Foto) ? $empleado->Foto : old('Foto') }}" width="400px">
        @endif

        <input type="file"
            class="form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-blue-200 bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            name="Foto" value="{{ isset($empleado->Foto) ? $empleado->Foto : old('Foto') }}" id="Foto">
            @error('Foto')
            <div class="text-red-500 mt-2">
                {{$message}}
            </div>
        @enderror
        <br>
    </div>
    <div class="flex justify-between items-center">
        <input class="bg-blue-600 text-white px-3 py-2  hover:bg-emerald-700 duration-200 font-bold" type="submit" value="{{ $mode }}">

        <a href="{{ url('empleado') }}" class="font-bold  hover:text-red-600 duration-300 text-gray-800">to back</a>
    </div>
</div>
