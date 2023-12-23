@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
    </div>
  </div>
</div>
<div class="container mt-4">
  <div class="row">
      <!-- Kartu Data - Total Penduduk -->
      <div class="col-md-4">
          <div class="p-2 bg-danger rounded-md shadow-md text-white">
              <h2 class="text-base font-semibold mb-2">Total Penduduk</h2>
              <i class="fas fa-users text-3xl"></i>
              {{-- <p class="text-3xl font-bold">{{ $dashboardData['totalPenduduk'] }}</p> --}}
          </div>
      </div>

      <!-- Kartu Data - Jumlah Laki-Laki -->
      <div class="col-md-4">
          <div class="p-2 bg-secondary rounded-md shadow-md text-white">
              <h2 class="text-base font-semibold mb-2">Jumlah Laki-Laki</h2>
              <i class="fas fa-male text-3xl"></i>
              {{-- <p class="text-3xl font-bold">{{ $dashboardData['totalLakiLaki'] }}</p> --}}
          </div>
      </div>

      <!-- Kartu Data - Jumlah Perempuan -->
      <div class="col-md-4">
          <div class="p-2 bg-success rounded-md shadow-md text-white">
              <h2 class="text-base font-semibold mb-2">Jumlah Perempuan</h2>
              <i class="fas fa-female text-3xl"></i>
              {{-- <p class="text-3xl font-bold">{{ $dashboardData['totalPerempuan'] }}</p> --}}
          </div>
      </div>

      <!-- Kartu Data - Jumlah Kelahiran -->
      <div class="col-md-4">
          <div class="p-2 bg-primary rounded-md shadow-md text-white">
              <h2 class="text-base font-semibold mb-2">Jumlah Kelahiran</h2>
              <i class="fas fa-baby text-3xl"></i>
              {{-- <p class="text-3xl font-bold">{{ $dashboardData['jumlahKelahiran'] }}</p> --}}
          </div>
      </div>

      <!-- Kartu Data - Jumlah Kematian -->
      <div class="col-md-4">
          <div class="p-2 bg-purple rounded-md shadow-md text-white">
              <h2 class="text-base font-semibold mb-2">Jumlah Kematian</h2>
              <i class="fas fa-skull text-3xl"></i>
              {{-- <p class="text-3xl font-bold">{{ $dashboardData['jumlahKematian'] }}</p> --}}
          </div>
      </div>

      <!-- Tambahkan kartu data lainnya sesuai kebutuhan -->
  </div>
</div>

@endsection
