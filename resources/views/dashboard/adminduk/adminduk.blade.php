@extends('dashboard.layouts-dashboard.app')      

@section('content')
<div class="h-screen bg-white p-4 rounded-xl overflow-x-auto"> 
<h1 class="text-2xl font-semibold mb-6">Administrasi Kependudukan</h1>
<div class="flex flex-wrap -mx-4">
    <!-- Menu 1 -->
    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
        <a href="{{ route('dashboard.adminduk.index') }}" class="block bg-gray-100 p-6 rounded-md shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
            <h2 class="text-xl text-center font-semibold">Akta Kelahiran</h2>
            <!-- Isi menu 1 -->
        </a>
    </div>
    
    <!-- Menu 2 -->
    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
        <a href="{{ route('dashboard.kematian.index') }}" class="block bg-gray-100 p-6 rounded-md shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
            <h2 class="text-xl text-center font-semibold">Akta Kematian</h2>
            <!-- Isi menu 2 -->
        </a>
    </div>
    
    <!-- Menu 3 -->
    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
        <a href="{{ route('dashboard.pindah.index') }}" class="block bg-gray-100 p-6 rounded-md shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
            <h2 class="text-xl text-center font-semibold">Keterangan Pindah</h2>
            <!-- Isi menu 3 -->
        </a>
    </div>
    
    <!-- Menu 4 -->
    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
        <a href="{{ route('dashboard.bbm.index') }}" class="block bg-gray-100 p-6 rounded-md shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
            <h2 class="text-xl text-center font-semibold">Keterangan Datang</h2>
            <!-- Isi menu 4 -->
        </a>
    </div>
</div>
</div>
@endsection
