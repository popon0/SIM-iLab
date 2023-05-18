<?php

namespace App\Http\Controllers;

use App\Exports\{PeminjamanExport, InventarisExport, JenisExport, RuangExport};
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function index()
    {
        $this->authorize('isAdmin');
        return view('admin.laporan.index');
    }

    /**
     * Method cetak laporan `peminjaman` Excel
     */
    public function exportPeminjamanExcel()
    {
        $this->authorize('isAdmin');
        return Excel::download(new PeminjamanExport, date('d-m-Y', time()) . '-peminjaman-' . time() . '.xlsx');
    }

    /**
     * Method cetak laporan `inventaris` Excel
     */
    public function exportInventarisExcel()
    {
        $this->authorize('isAdmin');
        return Excel::download(new InventarisExport, date('d-m-Y', time()) . '-inventaris-' . time() . '.xlsx');
    }

    /**
     * Method cetak laporan `jenis` Excel
     */
    public function exportJenisExcel()
    {
        $this->authorize('isAdmin');
        return Excel::download(new JenisExport, date('d-m-Y', time()) . '-jenis-' . time() . '.xlsx');
    }

    /**
     * Method cetak laporan `ruang` Excel
     */
    public function exportRuangExcel()
    {
        $this->authorize('isAdmin');
        return Excel::download(new RuangExport, date('d-m-Y', time()) . '-ruang-' . time() . '.xlsx');
    }
}
