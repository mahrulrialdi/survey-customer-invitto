<?php

namespace App\Http\Controllers;

use App\Models\SurveyCostumer;
use App\Models\SurveyCustomerComplain;
use Illuminate\Http\Request;

class SurveyCostumerController extends Controller
{
    public function index_satisfaction() {
        return view('survey.customer-satisfaction');
    }

    public function index_complain() {
        return view('survey.customer-complain');
    }

    public function survey_satisfaction(Request $request) {
        $data = $request->all();

        SurveyCostumer::create($data);
        return redirect()->route('thank-you');
    }

    public function survey_complain(Request $request) {
        $data = $request->all();

        SurveyCustomerComplain::create($data);
        return redirect()->route('thank-you');
    }
}
