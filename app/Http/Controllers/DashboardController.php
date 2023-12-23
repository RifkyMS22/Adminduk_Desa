<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Middleware 'user' diaplikasikan pada seluruh metode controller
        $this->middleware('role:admin');
    }

    public function index(Request $request)
    {
        // Menghitung total jumlah penduduk
        $totalPenduduk = DataPenduduk::count();

        // Menghitung total jumlah kepala keluarga
        $totalKepalaKeluarga = DataPenduduk::where('stts_hub_keluarga', 'KEPALA KELUARGA')->count();

        // Hitung jumlah laki-laki
        $totalLakiLaki = DataPenduduk::where('jns_kelamin', 'Laki-Laki')->count();

        // Hitung jumlah perempuan
        $totalPerempuan = DataPenduduk::where('jns_kelamin', 'Perempuan')->count();

        // Memanggil fungsi untuk mengambil data berdasarkan rentang waktu yang dipilih
        $selectedRange = $request->input('selectedRange', 'last7days');
        $data = $this->getDataBasedOnRange($selectedRange);

        // Menyiapkan data untuk grafik
        $dateLabels = $data->pluck('created_at')->map(function ($date) {
            return $date->format('M'); // Format tanggal menjadi nama bulan
        });

        $dataLakiLaki = [
            'Total' => $data->where('jns_kelamin', 'Laki-Laki')->count(),
        ];

        $dataPerempuan = [
            'Total' => $data->where('jns_kelamin', 'Perempuan')->count(),
        ];

        return view('dashboard.layouts-dashboard.index', [
            'totalPenduduk' => $totalPenduduk,
            'totalLakiLaki' => $totalLakiLaki,
            'totalPerempuan' => $totalPerempuan,
            'totalKepalaKeluarga' => $totalKepalaKeluarga,
            'selectedRange' => $selectedRange,
            'dateLabels' => $dateLabels,
            'dataLakiLaki' => $dataLakiLaki,
            'dataPerempuan' => $dataPerempuan,
        ]);
    }

    private function getDataBasedOnRange($selectedRange)
    {
        switch ($selectedRange) {
            case 'yesterday':
                return DataPenduduk::whereDate('created_at', now()->subDay())->get();

            case 'today':
                return DataPenduduk::whereDate('created_at', today())->get();

            case 'last7days':
                return DataPenduduk::where('created_at', '>=', now()->subDays(7))->get();

            case 'last30days':
                return DataPenduduk::where('created_at', '>=', now()->subDays(30))->get();

            case 'last90days':
                return DataPenduduk::where('created_at', '>=', now()->subDays(90))->get();

            default:
                return collect(); // Mengembalikan koleksi kosong jika tidak ada range yang cocok
        }
    }
}
