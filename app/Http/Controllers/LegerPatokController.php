<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teknik\Patok\LegerPatok;
use App\Models\Teknik\Patok\DataPatok;

class LegerPatokController extends Controller
{
    /**
     * Tampilkan halaman leger patok dengan preview peta dan tabel detail.
     */
    public function index(Request $request)
    {
        $legerId = $request->input('leger_id');

        // Ambil data leger patok dengan relasi dataPatok
        $legerPatok = LegerPatok::with('dataPatok')
            ->where('leger_id', $legerId)
            ->get();

        // Data koordinat untuk peta (dari data_patok)
        $coordinates = $legerPatok->map(function ($item) {
            return [
                'id' => $item->data_patok_id,
                'x' => $item->dataPatok->koordinat_x ?? null,
                'y' => $item->dataPatok->koordinat_y ?? null,
                'nomor_patok' => $item->dataPatok->nomor_patok ?? '',
            ];
        });

        return view('frontend.legerpatok.index', compact('legerPatok', 'coordinates', 'legerId'));
    }

    /**
     * API untuk ambil data leger patok JSON (misal untuk AJAX).
     */
    public function getData(Request $request, $legerId)
    {
        $data = LegerPatok::with('dataPatok')
            ->where('leger_id', $legerId)
            ->get();

        return response()->json($data);
    }

    /**
     * Simpan atau update data leger patok.
     */
    public function store(Request $request)
    {
        $request->validate([
            'leger_id' => 'required|integer',
            'data_patok_id' => 'required|integer',
            'kode_leger' => 'required|string',
        ]);

        $legerPatok = LegerPatok::updateOrCreate(
            ['leger_id' => $request->leger_id, 'data_patok_id' => $request->data_patok_id],
            ['kode_leger' => $request->kode_leger]
        );

        return response()->json([
            'message' => 'Leger Patok berhasil disimpan',
            'data' => $legerPatok
        ]);
    }
}
