<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Responden;

class RespondenController extends Controller

{

    private Pertanyaan $pertanyaan;
    private Responden $responden;

    public function __construct(Pertanyaan $pertanyaan, Responden $responden) {
        $this->pertanyaan = $pertanyaan;
        $this->responden = $responden;
    }

    public function postData(Request $request) {
        try{
            // $validated = $request->validate([
            //     "email" => "required",
            //     "jenis_kelamin" => "required",
            //     "status" => "required",
            //     "profesi" => "nullable",
            //     "pendidikan" => "nullable",
            //     'provinsi' => "required",
            //     "kota" => "required",
            //     "pernyataan-1" => "required",
            //     "pernyataan-2" => "required",
            //     "pernyataan-3" => "required",
            //     "pernyataan-4" => "required",
            //     "pernyataan-5" => "required",
            //     "pernyataan-6" => "required",
            //     "pernyataan-7" => "required",
            // ]);

            // dd($request->input('pertanyaan-1'));

            $responden = $this->responden->insert([
                "email" => $request->email,
                "jenis_kelamin" => $request->jenis_kelamin,
                "status" => $request->status,
                "profesi" => $request->profesi,
                "pendidikan" => $request->pendidikan,
                "provinsi" => $request->provinsi,
                "kota" => $request->kota,
            ]);
            if($responden) {
                $data = $this->responden->where('email', $request->email)->first();

                $this->pertanyaan->insert([
                    "pertanyaan_1" => $request->input('pertanyaan-1'),
                    "pertanyaan_2" => $request->input('pertanyaan-2'),
                    "pertanyaan_3" => $request->input('pertanyaan-3'),
                    "pertanyaan_4" => $request->input('pertanyaan-4'),
                    "pertanyaan_5" => $request->input('pertanyaan-5'),
                    "pertanyaan_6" => $request->input('pertanyaan-6'),
                    "pertanyaan_7" => $request->input('pertanyaan-7'),
                    "responden_id" => $data->id,
                ]);
            }


            return redirect('/')->with('success', "Berhasil Mengikuti survey");
        }
        catch(\Exception $e) {
            return redirect('/')->with('error', "Gagal Melakukan Survey");
        }
    }

}
