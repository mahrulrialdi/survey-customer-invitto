@extends('layouts.master')
@section('header')
    <div class="border-0 bg-amber-700 rounded py-1 text-center">
        <h4 class="text-white">Survey Komplain Pelanggan</h4>
    </div>
    <div class="mt-3">
        <p>Ceritakan pengalamanmu terkait pelayanan komplain Invitationery.Asia</p>
    </div>
@endsection
@section('content')
    <form action="{{ route('survey_complain') }}" class="form form-vertical" method="POST">
        @csrf
        <div class="form-body">
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 1</span></h6>
                        <i>"Tim layanan memberikan respond yang sangat baik terhadap keluhan yang di
                            sampaikan"<span class="text-red-500">*</span></i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_1" id="question_1" value="Setuju"
                                required>
                            <label class="form-check-label" for="question_1">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_1" id="question_1"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_1">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 2</span></h6>
                        <i>"Tim Invitationery menjelaskan dengan baik langkah-langkah yang diambil
                            terkait komplain yang disampaikan"<span class="text-red-500">*</span></i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_2" id="question_2" value="Setuju"
                                required>
                            <label class="form-check-label" for="question_2">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_2" id="question_2"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_2">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 3</span></h6>
                        <i>"Proses penyelesaian komplen di informasikan dengan baik oleh tim
                            Invitationery.asia"<span class="text-red-500">*</span></i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_3" id="question_3" value="Setuju"
                                required>
                            <label class="form-check-label" for="question_3">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_3" id="question_3"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_3">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 4</span></h6>
                        <i>"Apakah anda merasa solusi yang kami berikan sesuai dengan keluhan anda"<span
                                class="text-red-500">*</span></i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_4" id="question_4" value="Setuju"
                                required>
                            <label class="form-check-label" for="question_4">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_4" id="question_4"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_4">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6>
                                Berikan saran atau kritik untuk meningkatkan layanan kami<span
                                    class="text-red-500">*</span>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group with-title mb-3">
                                <textarea class="form-control" name="question_5" id="question_5" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6>
                                Bagaimana kami dapat meningkatkan proses penanganan keluhan di masa
                                depan<span class="text-red-500">*</span>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group with-title mb-3">
                                <textarea class="form-control" name="question_6" id="question_6" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    <button type="submit"
                        class="border-0 px-2 bg-amber-800 text-white font-bold hover:bg-amber-900 rounded me-1 mb-1">Kirim
                        Jawaban</button>
                </div>
            </div>
        </div>
    </form>
@endsection
