<?php

namespace App\Http\Controllers;

use App\Models\SurveyCostumer;
use App\Models\SurveyCostumerComplain;
use Illuminate\Http\Request;

class SurveyCostumerController extends Controller
{
    // View Survey Kepuasan
    public function index_satisfaction() {
        return view('survey.customer-satisfaction');
    }

    // View Survey Komplain
    public function index_complain() {
        return view('survey.customer-complain');
    }

    // Store hasil form dan redirect ke halaman thank-you
    public function survey_satisfaction(Request $request) {
        $request->validate([
            'question_5' => 'required|string',
            // Tambahkan validasi lain jika diperlukan
        ]);

        $survey = new SurveyCostumer();

        $survey->question_1 = json_encode($request->input('question_1'));
        $survey->question_2 = json_encode($request->input('question_2'));
        $survey->question_3 = json_encode($request->input('question_3'));
        $survey->question_4 = json_encode($request->input('question_4'));
        $survey->question_5 = $request->input('question_5');


        $survey->save();

        return redirect()->route('thank-you');
    }

    // Store hasil form dan redirect ke halaman thank-you
    public function survey_complain(Request $request) {
        $data = $request->all();

        SurveyCostumerComplain::create($data);
        return redirect()->route('thank-you');
    }
}
