@extends('layouts.app')

@section('content')
<div class="h-96 mt-32">
    <div class="flex items-center justify-center h-full">
        <div class="bg-green-100 px-16 py-16 shadow-xl transform duration-200">
            <div class="card">
                <div class="text-2xl font-bold text-gray-800 mb-6">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="text-gray-900 font-bold">{{ __('Name') }}</label>

                            <div class="flex flex-col space-y-2">
                                <input id="name" type="text" class="outline-none p-2 border-b-2 border-gray-400  focus:border-green-500 bg-green-100" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class=" text-red-600" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="text-gray-900 font-bold">{{ __('E-Mail Address') }}</label>

                            <div class="flex flex-col space-y-2">
                                <input id="email" type="email" class="outline-none p-2 border-b-2 border-gray-400  focus:border-green-500 bg-green-100" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class=" text-red-600" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="text-gray-900 font-bold">{{ __('Password') }}</label>

                            <div class="flex flex-col space-y-2">
                                <input id="password" type="password" class="outline-none p-2 border-b-2 border-gray-400  focus:border-green-500 bg-green-100" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class=" text-red-600" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="text-gray-900 font-bold">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="outline-none p-2 border-b-2 border-gray-400  focus:border-green-500 bg-green-100" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="flex justify-end mt-4">
                            <div class="">
                                <button type="submit" class="bg-green-600 text-white px-3 py-2  hover:bg-emerald-700 duration-200 font-bold">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
