<?php

namespace App\Http\Controllers;

use App\Models\SurveyCostumer;
use Illuminate\Http\Request;

class SurveyCostumerController extends Controller
{
    public function index() {
        return view('customer-satisfaction');
    }

    public function store(Request $request) {
        $data = $request->all();

        SurveyCostumer::create($data);
        return redirect()->route('thank-you');
    }
}
