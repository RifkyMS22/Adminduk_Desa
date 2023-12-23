@extends('layouts.app')

@section('container')
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-semibold mb-4">Login</h2>
        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-input mt-1 block w-full" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" name="password" id="password" class="form-input mt-1 block w-full" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
        </form>
    </div>
@endsection
