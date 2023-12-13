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
                <div>
                    <input type="checkbox" name="question_1[]" id="question_1[]"
                        value="Proses pemesanan sudah memiliki alur yang baik">
                    <label class="mb-2" for="question_1[]"><span class="ms-1">Proses pemesanan sudah memiliki alur yang
                            baik</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_1[]" id="question_1[]"
                        value="Keterbatasan Informasi pada situs Web">
                    <label class="mb-2" for="question_1[]"><span class="ms-1">Keterbatasan Informasi pada situs
                            Web</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_1[]" id="question_1[]"
                        value="Proses komunikasi yang kurang efektif">
                    <label class="mb-2" for="question_1[]"><span class="ms-1">Proses komunikasi yang kurang
                            efektif</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_1[]" id="question_1[]"
                        value="Pengisian data pemesanan yang rumit">
                    <label class="mb-2" for="question_1[]"><span class="ms-1">Pengisian data pemesanan yang
                            rumit</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_1[]" id="question_1[]" value="Opsi pembayaran perlu di perbanyak">
                    <label class="mb-2" for="question_1[]"><span class="ms-1">Opsi pembayaran perlu di
                            perbanyak</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_1[]" id="question_1[]"
                        value="Keterlambatan dalam pengiriman Invoice">
                    <label class="mb-2" for="question_1[]"><span class="ms-1">Keterlambatan dalam pengiriman
                            Invoice</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_1[]" id="question_1[]"
                        value="Kualitas layanan pelanggan yang perlu di tingkatkan">
                    <label class="mb-2" for="question_1[]"><span class="ms-1">Kualitas layanan pelanggan yang perlu di
                            tingkatkan</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_1[]" id="question_1[]"
                        value="Alur proses pemesanan sudah sangat baik">
                    <label class="mb-2" for="question_1[]"><span class="ms-1">Alur proses pemesanan sudah sangat
                            baik</span></label>
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
                <div>
                    <input type="checkbox" name="question_2[]" id="question_2[]"
                        value="Proses desain sudah memiliki alur yang baik">
                    <label class="mb-2" for="question_2[]"><span class="ms-1">Proses desain sudah memiliki alur yang
                            baik</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_2[]" id="question_2[]"
                        value="Harga penanganan desain terlalu mahal">
                    <label class="mb-2" for="question_2[]"><span class="ms-1">Harga penanganan desain terlalu
                            mahal</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_2[]" id="question_2[]"
                        value="Waktu penanganan desain terlalu lama">
                    <label class="mb-2" for="question_2[]"><span class="ms-1">Waktu penanganan desain terlalu
                            lama</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_2[]" id="question_2[]"
                        value="Kualitas layanan pelanggan yang perlu di tingkatkan">
                    <label class="mb-2" for="question_2[]"><span class="ms-1">Kualitas layanan pelanggan yang perlu di
                            tingkatkan</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_2[]" id="question_2[]"
                        value="Proses desain sudah memiliki alur yang sangat baik">
                    <label class="mb-2" for="question_2[]"><span class="ms-1">Proses desain sudah memiliki alur yang
                            sangat baik</span></label>
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
                <div>
                    <input type="checkbox" name="question_3[]" id="question_3[]"
                        value="Seluruh proses pengiriman sudah baik">
                    <label class="mb-2" for="question_3[]"><span class="ms-1">Seluruh proses pengiriman sudah
                            baik</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_3[]" id="question_3[]" value="Pengiriman Produk terlalu lama">
                    <label class="mb-2" for="question_3[]"><span class="ms-1">Pengiriman Produk terlalu
                            lama</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_3[]" id="question_3[]"
                        value="Status pengiriman yang kurang jelas">
                    <label class="mb-2" for="question_3[]"><span class="ms-1">Status pengiriman yang kurang
                            jelas</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_3[]" id="question_3[]"
                        value="Kualitas pengemasan produk kurang baik">
                    <label class="mb-2" for="question_3[]"><span class="ms-1">Kualitas pengemasan produk kurang
                            baik</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_3[]" id="question_3[]" value="Opsi pengiriman terbatas">
                    <label class="mb-2" for="question_3[]"><span class="ms-1">Opsi pengiriman terbatas</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_3[]" id="question_3[]" value="Paket rusak dalam pengiriman">
                    <label class="mb-2" for="question_3[]"><span class="ms-1">Paket rusak dalam
                            pengiriman</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_3[]" id="question_3[]"
                        value="Jangkauan area pengiriman terbatas">
                    <label class="mb-2" for="question_3[]"><span class="ms-1">Jangkauan area pengiriman
                            terbatas</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_3[]" id="question_3[]"
                        value="Tidak semua barang yang dipesan terkirim">
                    <label class="mb-2" for="question_3[]"><span class="ms-1">Tidak semua barang yang dipesan
                            terkirim</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_3[]" id="question_3[]"
                        value="Tidak semua barang yang dipesan terkirim">
                    <label class="mb-2" for="question_3[]"><span class="ms-1">Seluruh proses pengiriman sangat
                            baik</span></label>
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
                <div>
                    <input type="checkbox" name="question_4[]" id="question_4[]"
                        value="Kami puas terhadap produk yang diterima">
                    <label class="mb-2" for="question_4[]"><span class="ms-1">Kami puas terhadap produk yang
                            diterima</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_4[]" id="question_4[]" value="Harga produk terlalu mahal">
                    <label class="mb-2" for="question_4[]"><span class="ms-1">Harga produk terlalu
                            mahal</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_4[]" id="question_4[]"
                        value="Produk kurang sesuai dengan ekspektasi">
                    <label class="mb-2" for="question_4[]"><span class="ms-1">Produk kurang sesuai dengan
                            ekspektasi</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_4[]" id="question_4[]"
                        value="Kualitas produk kurang memuaskan">
                    <label class="mb-2" for="question_4[]"><span class="ms-1">Kualitas produk kurang
                            memuaskan</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_4[]" id="question_4[]" value="Packing produk kurang memadai">
                    <label class="mb-2" for="question_4[]"><span class="ms-1">Packing produk kurang
                            memadai</span></label>
                </div>
                <div>
                    <input type="checkbox" name="question_4[]" id="question_4[]"
                        value="Kami sangat puas terhadap keseluruhan produk yang kami terima">
                    <label class="mb-2" for="question_4[]"><span class="ms-1">Kami sangat puas terhadap keseluruhan
                            produk yang kami terima</span></label>
                </div>
            </div>
        </div>
        <div class="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
            <div class="mt-2">
                <h6><span class="badge bg-amber-700">Question 5</span></h6>
            </div>
            <div class="italic font-semibold text-amber-700">
                <p>"Berikan saran atau kritik untuk meningkatkan layanan kami"<span class="text-red-500">*</span></p>
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
    </form>
@endsection
