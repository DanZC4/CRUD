@extends('layouts.app')

@section('content')
<div class=" h-96 mt-32">
    <div class="flex items-center justify-center h-full">
        <div class="bg-green-100 px-16 py-16 shadow-xl transform duration-200">
            <div class="card">
                <div class="text-2xl font-bold text-gray-800 mb-6">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="">
                            <label for="email" class="text-gray-900 font-bold">{{ __('E-Mail Address') }}</label>

                            <div class="flex flex-col space-y-2">
                                <input id="email" type="email" class="outline-none p-2 border-b-2 border-gray-400  focus:border-green-500 bg-green-100" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class=" text-red-600" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mt-4">
                            <label for="password" class="text-gray-900 font-bold">{{ __('Password') }}</label>

                            <div class="flex flex-col space-y-2">
                                <input id="password" type="password" class="outline-none p-2 border-b-2 border-gray-400  focus:border-green-500 bg-green-100" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class=" text-red-600" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="my-4">
                            <div class="col-md-6 offset-md-4">
                                <div class="flex items-center ">
                                    <input class="w-5 h-5" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-gray-900 font-bold pl-2" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="flex justify-between items-center">
                                <button type="submit" class="bg-green-600 text-white px-3 py-2  hover:bg-emerald-700 duration-200 font-bold">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="font-bold  hover:text-red-600 duration-300 text-gray-800" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
