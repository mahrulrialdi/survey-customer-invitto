@extends('layouts.master')
@section('header')
    <div class="border-0 bg-amber-700 rounded py-1 text-center">
        <h4 class="text-white">Survey Kepuasan Pelanggan</h4>
    </div>
    <div class="mt-3">
        <p>Halo couples.. terimakasih telah memilih Invitationery.asia untuk menjadi bagian dari hari
            bahagia,
            sebagai pembawa kabar pernikahanmu. Kami ingin mendengar pendapatmu! Beritahu kami, terkait
            pengalamanmu membeli produk Kami ya ☺️</p>
    </div>
@endsection
@section('content')
    <form action="{{ route('survey_satisfaction') }}" class="form form-vertical" method="POST">
        @csrf
        <div class="form-body">
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 1</span></h6>
                        <i>"Sangat mudah menemukan informasi yang dibutuhkan untuk melakukan
                            pemesanan"<span class="text-red-500">*</span></i>
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
                        <i>"Secara keseluruhan proses pemesanan sangatlah mudah"<span class="text-red-500">*</span></i>
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
                        <i>"Kami sangat puas dengan opsi customize yang di sediakan"<span class="text-red-500">*</span></i>
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
                        <i>"Tim layanan memberikan pengalaman berkomunikasi dengan sangat baik"<span
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
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 5</span></h6>
                        <i>"Tim layanan kami memberikan jawaban yang
                            memuaskan terhadap pertanyaan atau
                            masalah customer"<span class="text-red-500">*</span>
                        </i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_5" id="question_5"
                                value="Setuju" required>
                            <label class="form-check-label" for="question_5">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_5" id="question_5"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_5">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 6</span></h6>
                        <i>
                            "Tim layanan pelanggan sangat responsif terhadap pesan customer"<span
                                class="text-red-500">*</span>
                        </i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_6" id="question_6"
                                value="Setuju" required>
                            <label class="form-check-label" for="question_6">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_6" id="question_6"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_6">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 7</span></h6>
                        <i>
                            "Kami sangat puas dengan kualitas desain undangan yang disuguhkan dari
                            Invitationery"<span class="text-red-500">*</span>
                        </i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_7" id="question_7"
                                value="Setuju" required>
                            <label class="form-check-label" for="question_7">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_7" id="question_7"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_7">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 8</span></h6>
                        <i>"Undangan yang di terima sesuai dengan harapan"<span class="text-red-500">*</span>
                        </i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_8" id="question_8"
                                value="Setuju" required>
                            <label class="form-check-label" for="question_8">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_8" id="question_8"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_8">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 9</span></h6>
                        <i>"Kualitas bahan yang digunakan untuk cetak undangan sesuai dengan harapan
                            customer"<span class="text-red-500">*</span>
                        </i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_9" id="question_9"
                                value="Setuju" required>
                            <label class="form-check-label" for="question_9">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_9" id="question_9"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_9">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 10</span></h6>
                        <i>"Undangan tiba sesuai dengan perkiraan waktu pengiriman"<span class="text-red-500">*</span>
                        </i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_10" id="question_10"
                                value="Setuju" required>
                            <label class="form-check-label" for="question_10">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_10" id="question_10"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_10">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 11</span></h6>
                        <i>"Pengemasan produk yang diterima sesuai dengan harapan"<span class="text-red-500">*</span>
                        </i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_11" id="question_11"
                                value="Setuju" required>
                            <label class="form-check-label" for="question_11">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_11" id="question_11"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_11">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 12</span></h6>
                        <i>"Secara keseluruhan kami sangat puas dengan pengalaman berbelanja di
                            Invitationery.asia"<span class="text-red-500">*</span>
                        </i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_12" id="question_12"
                                value="Setuju" required>
                            <label class="form-check-label" for="question_12">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_12" id="question_12"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_12">
                                Tidak Setuju
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5 border rounded p-2 bg-orange-100">
                <div class="col-8">
                    <div class="form-group">
                        <h6><span class="badge bg-amber-700">Question 14</span></h6>
                        <i>"Kami akan merekomendasikan layanan undangan cetak Invitationery.asia
                            kepada
                            orang lain"<span class="text-red-500">*</span>
                        </i>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_13" id="question_13"
                                value="Setuju" required>
                            <label class="form-check-label" for="question_13">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_13" id="question_13"
                                value="Tidak Setuju" required>
                            <label class="form-check-label" for="question_13">
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
                                <textarea class="form-control" name="question_14" id="question_14" rows="3" required></textarea>
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
