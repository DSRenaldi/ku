<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Exception;
use Illuminate\Http\Request;

class RespondenController extends Controller
{
    private Responden $responden;

    public function __construct(Responden $responden) {
        $this->responden = $responden;
    }

    public function store(Request $request) {
        try {
            $validateResponse = $request->validate([
                'email' => 'required|email',
                'status' => 'required',
                'jenis_kelamin' => 'required',
                'provinsi' => 'required',
                'kota' => 'required',
                'profesi' => 'nullable',
                'pendidikan' => 'nullable',
            ]);
            
            $responden =$this->responden->create($validateResponse);
            return redirect()->route('question', $responden->id)->with('success', 'Data Responden Berhasil');
        }
        catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
