<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Pertanyaan;
use Exception;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    private Pertanyaan $pertanyaan;
    private Answer $answer;

    public function __construct(Pertanyaan $pertanyaan, Answer $answer) {
        $this->pertanyaan = $pertanyaan;
        $this->answer = $answer;
    }

    public function index(Request $request, $id) {
        $pertanyaans = $this->pertanyaan->with('optionAnswer')->get();
        $responden = \App\Models\Responden::find($id);
        return view('question', compact('pertanyaans', 'responden'));
    }

    public function store(Request $request) {
        try {
            foreach ($request->answer as $pertanyaanId => $jawaban) {
                if (is_array($jawaban)) {
                    foreach ($jawaban as $optionId) {
                        $this->answer->create([
                            'pertanyaan_id' => $pertanyaanId,
                            'option_answer_id' => $optionId,
                            'responden_id' => $request->responden_id
                        ]);
                    }
                } else {
                    $this->answer->create([
                        'pertanyaan_id' => $pertanyaanId,
                        'option_answer_id' => $jawaban,
                        'responden_id' => $request->responden_id
                    ]);
                }
            }
            return view('statistik');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
}
