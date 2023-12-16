@extends('layouts.master')
@section('header')
    <div class="border-0 bg-amber-700 rounded py-1 text-center">
        <h4 class="text-white">Survey Kepuasan Pelanggan</h4>
    </div>
    <div class="mt-3 px-1">
        <p>Halo couples.. terimakasih telah memilih Invitationery.asia untuk menjadi bagian dari hari
            bahagia,
            sebagai pembawa kabar pernikahanmu. Kami ingin mendengar pendapatmu! Beritahu kami, terkait
            pengalamanmu membeli produk Kami ya ☺️</p>
    </div>
@endsection
@section('content')
    <form action="{{ route('survey_satisfaction') }}" class="form form-vertical" method="POST">
        @csrf
        <div class="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
            <div class="mt-2">
                <h6><span class="badge bg-amber-700">Question 1</span></h6>
            </div>
            <div class="italic font-semibold text-amber-700">
                <p>"Hal mana sajakah dibawah ini yang perlu kami tingkatkan terkait pemesanan"<span
                        class="text-red-500">*</span></p>
            </div>
            <div class="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_1[]" id="question_1[]"
                            value="Proses pemesanan sudah memiliki alur yang baik">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_1[]">Proses pemesanan sudah memiliki alur yang
                            baik</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_1[]" id="question_1[]"
                            value="Keterbatasan Informasi pada situs Web">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_1[]">Keterbatasan Informasi pada situs
                            Web</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_1[]" id="question_1[]"
                            value="Proses komunikasi yang kurang efektif">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_1[]">Proses komunikasi yang kurang
                            efektif</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_1[]" id="question_1[]"
                            value="Pengisian data pemesanan yang rumit">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_1[]">Pengisian data pemesanan yang
                            rumit</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_1[]" id="question_1[]"
                            value="Opsi pembayaran perlu di perbanyak">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_1[]">Opsi pembayaran perlu di
                            perbanyak</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_1[]" id="question_1[]"
                            value="Keterlambatan dalam pengiriman Invoice">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_1[]">Keterlambatan dalam pengiriman
                            Invoice</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_1[]" id="question_1[]"
                            value="Kualitas layanan pelanggan yang perlu di tingkatkan">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_1[]">Kualitas layanan pelanggan yang perlu di
                            tingkatkan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_1[]" id="question_1[]"
                            value="Alur proses pemesanan sudah sangat baik">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_1[]">Alur proses pemesanan sudah sangat
                            baik</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
            <div class="mt-2">
                <h6><span class="badge bg-amber-700">Question 2</span></h6>
            </div>
            <div class="italic font-semibold text-amber-700">
                <p>"Hal mana sajakah di bawah ini yang perlu kami tingkatkan terkait proses desain"<span
                        class="text-red-500">*</span></p>
            </div>
            <div class="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_2[]" id="question_2[]"
                            value="Proses desain sudah memiliki alur yang baik">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_2[]">Proses desain sudah memiliki alur yang
                            baik</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_2[]" id="question_2[]"
                            value="Harga penanganan desain terlalu mahal">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_2[]">Harga penanganan desain terlalu
                            mahal</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_2[]" id="question_2[]"
                            value="Waktu penanganan desain terlalu lama">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_2[]">Waktu penanganan desain terlalu
                            lama</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_2[]" id="question_2[]"
                            value="Kualitas layanan pelanggan yang perlu di tingkatkan">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_2[]">Kualitas layanan pelanggan yang perlu di
                            tingkatkan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_2[]" id="question_2[]"
                            value="Proses desain sudah memiliki alur yang sangat baik">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_2[]">Proses desain sudah memiliki alur yang
                            sangat baik</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
            <div class="mt-2">
                <h6><span class="badge bg-amber-700">Question 3</span></h6>
            </div>
            <div class="italic font-semibold text-amber-700">
                <p>"Hal mana sajakah dibawah ini yang perlu kami tingkatkan terkait pengiriman"<span
                        class="text-red-500">*</span></p>
            </div>
            <div class="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_3[]" id="question_3[]"
                            value="Seluruh proses pengiriman sudah baik">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_3[]">Seluruh proses pengiriman sudah
                            baik</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_3[]" id="question_3[]"
                            value="Pengiriman Produk terlalu lama">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_3[]">Pengiriman Produk terlalu
                            lama</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_3[]" id="question_3[]"
                            value="Status pengiriman yang kurang jelas">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_3[]">Status pengiriman yang kurang
                            jelas</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_3[]" id="question_3[]"
                            value="Kualitas pengemasan produk kurang baik">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_3[]">Kualitas pengemasan produk kurang
                            baik</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_3[]" id="question_3[]" value="Opsi pengiriman terbatas">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_3[]">Opsi pengiriman terbatas</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_3[]" id="question_3[]"
                            value="Paket rusak dalam pengiriman">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_3[]">Paket rusak dalam
                            pengiriman</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_3[]" id="question_3[]"
                            value="Jangkauan area pengiriman terbatas">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_3[]">Jangkauan area pengiriman
                            terbatas</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_3[]" id="question_3[]"
                            value="Tidak semua barang yang dipesan terkirim">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_3[]">Tidak semua barang yang dipesan
                            terkirim</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_3[]" id="question_3[]"
                            value="Tidak semua barang yang dipesan terkirim">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_3[]">Seluruh proses pengiriman sangat
                            baik</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
            <div class="mt-2">
                <h6><span class="badge bg-amber-700">Question 4</span></h6>
            </div>
            <div class="italic font-semibold text-amber-700">
                <p>"Hal mana sajakah dibawah ini yang perlu kami tingkatkan terkait Produk"<span
                        class="text-red-500">*</span></p>
            </div>
            <div class="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_4[]" id="question_4[]"
                            value="Kami puas terhadap produk yang diterima">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_4[]">Kami puas terhadap produk yang
                            diterima</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_4[]" id="question_4[]" value="Harga produk terlalu mahal">
                    </div>
                    <div class="col-11 ps-0">

                        <label class="mb-2" for="question_4[]">Harga produk terlalu
                            mahal</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_4[]" id="question_4[]"
                            value="Produk kurang sesuai dengan ekspektasi">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_4[]">Produk kurang sesuai dengan
                            ekspektasi</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_4[]" id="question_4[]"
                            value="Kualitas produk kurang memuaskan">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_4[]">Kualitas produk kurang
                            memuaskan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_4[]" id="question_4[]"
                            value="Packing produk kurang memadai">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_4[]">Packing produk kurang
                            memadai</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" name="question_4[]" id="question_4[]"
                            value="Kami sangat puas terhadap keseluruhan produk yang kami terima">
                    </div>
                    <div class="col-11 ps-0">
                        <label class="mb-2" for="question_4[]">Kami sangat puas terhadap keseluruhan produk yang
                            kami terima</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
            <div class="mt-2">
                <h6><span class="badge bg-amber-700">Question 5</span></h6>
            </div>
            <div class="italic font-semibold text-amber-700">
                <p>"Berikan saran atau kritik untuk meningkatkan layanan kami"<span class="text-red-500">*</span>
                </p>
            </div>
            <div class="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                <textarea class="w-full h-40 mt-2 p-2" type="text" name="question_5" id="question_5">
                    </textarea>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="reset" class="btn btn-light-secondary me-1">Reset</button>
            <button type="submit"
                class="border-0 px-2 bg-amber-800 text-white font-bold hover:bg-amber-900 rounded me-1 mb-1">Kirim
                Jawaban</button>
        </div>
        </div>
    </form>
@endsection
