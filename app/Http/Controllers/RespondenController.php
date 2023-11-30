<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Responden;

class RespondenController extends Controller

{

    private Pertanyaan $pertanyaan;
    private Responden $responden;
    private Answer $answer;

    public function __construct(Pertanyaan $pertanyaan, Responden $responden, Answer $answer) {
        $this->pertanyaan = $pertanyaan;
        $this->responden = $responden;
        $this->answer = $answer;
    }

    public function postData(Request $request) {
        try{
            $pilihan1 = $request->input('pertanyaan_1');
            $pilihan2 = $request->input('pertanyaan_2');
            $pilihan3 = $request->input('pertanyaan_3');
            $pilihan4 = $request->input('pertanyaan_4');
            $pilihan5 = $request->input('pertanyaan_5');
            $pilihan6 = $request->input('pertanyaan_6');
            $pilihan7 = $request->input('pertanyaan_7');

            if($this->responden->where('email', $request->email)->exists()) {
                return back()->with('error', 'Email sudah terdaftar');
            }
            
            $responden = $this->responden->create([
                "email" => $request->email,
                "jenis_kelamin" => $request->jenis_kelamin,
                "status" => $request->status,
                "profesi" => $request->profesi,
                "pendidikan" => $request->pendidikan,
                "provinsi" => $request->provinsi,
                "kota" => $request->kota,
            ]);

            foreach($pilihan1 as $pilih) {
                $this->answer->create([
                    "responden_id" => $responden->id,
                    "question_id" => 1,
                    "answer" => $pilih
                ]);
            }
            
            foreach($pilihan2 as $pilih) {
                $this->answer->create([
                    "responden_id" => $responden->id,
                    "question_id" => 2,
                    "answer" => $pilih
                ]);
            }

            foreach($pilihan3 as $pilih) {
                $this->answer->create([
                    "responden_id" => $responden->id,
                    "question_id" => 3,
                    "answer" => $pilih
                ]);
            }

            foreach($pilihan4 as $pilih) {
                $this->answer->create([
                    "responden_id" => $responden->id,
                    "question_id" => 4,
                    "answer" => $pilih
                ]);
            }

            foreach($pilihan5 as $pilih) {
                $this->answer->create([
                    "responden_id" => $responden->id,
                    "question_id" => 5,
                    "answer" => $pilih
                ]);
            }

            foreach($pilihan6 as $pilih) {
                $this->answer->create([
                    "responden_id" => $responden->id,
                    "question_id" => 6,
                    "answer" => $pilih
                ]);
            }

            foreach($pilihan7 as $pilih) {
                $this->answer->create([
                    "responden_id" => $responden->id,
                    "question_id" => 7,
                    "answer" => $pilih
                ]);
            }
            
            
            return redirect('/')->with('success', "Berhasil Mengikuti survey");
        }
        catch(\Exception $e) {
            dd($e);
            return redirect('/')->with('error', "Gagal Melakukan Survey");
        }
    }
}
