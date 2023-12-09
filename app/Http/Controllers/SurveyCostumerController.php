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
        $data = $request->all();

        SurveyCostumer::create($data);
        return redirect()->route('thank-you');
    }

    // Store hasil form dan redirect ke halaman thank-you
    public function survey_complain(Request $request) {
        $data = $request->all();

        SurveyCostumerComplain::create($data);
        return redirect()->route('thank-you');
    }
}
