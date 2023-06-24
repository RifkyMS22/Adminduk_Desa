<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\DataPenduduk;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImportDataCommand extends Command
{
    protected $signature = 'import:data {file : Path to the CSV file}';

    protected $description = 'Import data from CSV file';

    public function handle()
    {
        $file = $this->argument('file');
        $path = storage_path('app/csv/' . $file);

        if (!Storage::exists('csv/' . $file)) {
            $this->error('File not found: '.$file);
            return;
        }

        $handle = fopen($file, 'r');
        $header = fgetcsv($handle, 0, "\t");

        while ($row = fgetcsv($handle, 0, "\t")) {
            $dataPenduduk = array_combine($header, $row);
    
            // Lakukan validasi data jika diperlukan
    
            DataPenduduk::create($dataPenduduk);
        }
    
        fclose($handle);
    
        $this->info('Data has been imported successfully.');
    }
}
