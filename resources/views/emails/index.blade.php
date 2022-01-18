@extends('layouts.app')


@section('content')
    <div class="flex justify-center pt-24">
        <div class="bg-blue-100 px-16 py-16 shadow-xl transform duration-200">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Contact Us</h1>

            <form action="{{ route('contactanos.store') }}" method="post">
                @csrf
                <div class="">
                    <div class="pb-3 flex flex-col">
                        <label class="text-gray-900 font-bold" for="name">Name:</label>
                        <input class="outline-none p-1 border-b-2 border-gray-400  focus:border-yellow-500 bg-blue-100" type="text" name="name" id="name">
                        @error('name')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pb-3 flex flex-col">
                        <label class="text-gray-900 font-bold" for="email">Email:</label>
                        <input class="outline-none p-1 border-b-2 border-gray-400  focus:border-yellow-500 bg-blue-100" type="text" name="email" id="email">
                        @error('email')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pb-3 flex flex-col">
                        <label class="text-gray-900 font-bold" for="message">Message:</label>
                        <textarea class="outline-none p-1 border-b-2 border-gray-400  focus:border-yellow-500 bg-blue-100" name="message" id="message" cols="30" rows="10"></textarea>
                        @error('message')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="bg-blue-600 text-gray-100 px-4 py-2 rounded-md">Send</button>
            </form>
        </div>
    </div>
@endsection
