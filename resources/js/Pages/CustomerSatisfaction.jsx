import React from "react";
import Header from "@/Components/Header";
import Footer from "@/Components/Footer";
import { useState } from "react";
import { Checkbox } from "@nextui-org/react";

function App() {
    const [checkedValues, setValue] = useState([]);

    function handleChange(event) {
        const { value, checked } = event.target;

        if (checked) {
            setValue((pre) => [...pre, value]);
        } else {
            setValue((pre) => {
                return [...pre.filter((skill) => skill === value)];
            });
        }
    }
    console.log(checkedValues);
    return (
        <div className="App">
            <Header></Header>
            <div className="container flex justify-center">
                <div className="max-w-xl mt-2">
                    <form className="form form-vertical">
                        <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                            <div className="mt-2">
                                <h6>
                                    <span className="badge bg-amber-700">
                                        Question 1
                                    </span>
                                </h6>
                            </div>
                            <div className="italic font-semibold text-amber-700 mt-2 mb-2">
                                <p>
                                    "Hal mana sajakah dibawah ini yang perlu
                                    kami tingkatkan terkait pemesanan"
                                    <span className="text-red-500">*</span>
                                </p>
                            </div>
                            <div className="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                                <div className="row">
                                    <div className="col-1">
                                        <Checkbox
                                        defaultSelected
                                            name="question_1[]"
                                            value="Proses pemesanan sudah memiliki alur yang baik"
                                            onChange={handleChange}
                                            color="warning"
                                        ></Checkbox>
                                        {/* <input
                                            type="checkbox"
                                            name="question_1[]"
                                            id="question_1[]"
                                            value="Proses pemesanan sudah memiliki alur yang baik"
                                            onChange={handleChange}
                                        ></input> */}
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Proses pemesanan sudah memiliki alur
                                            yang baik
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_1[]"
                                            id="question_1[]"
                                            value="Keterbatasan Informasi pada situs Web"
                                            onChange={handleChange}
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Keterbatasan Informasi pada situs
                                            Web
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_1[]"
                                            id="question_1[]"
                                            value="Proses komunikasi yang kurang efektif"
                                            onChange={handleChange}
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Proses komunikasi yang kurang
                                            efektif
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_1[]"
                                            id="question_1[]"
                                            value="Pengisian data pemesanan yang rumit"
                                            onChange={handleChange}
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Pengisian data pemesanan yang rumit
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_1[]"
                                            id="question_1[]"
                                            value="Opsi pembayaran perlu di perbanyak"
                                            onChange={handleChange}
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Opsi pembayaran perlu di perbanyak
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_1[]"
                                            id="question_1[]"
                                            value="Keterlambatan dalam pengiriman Invoice"
                                            onChange={handleChange}
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Keterlambatan dalam pengiriman
                                            Invoice
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_1[]"
                                            id="question_1[]"
                                            value="Kualitas layanan pelanggan yang perlu di tingkatkan"
                                            onChange={handleChange}
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Kualitas layanan pelanggan yang
                                            perlu di tingkatkan
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_1[]"
                                            id="question_1[]"
                                            value="Alur proses pemesanan sudah sangat baik"
                                            onChange={handleChange}
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Alur proses pemesanan sudah sangat
                                            baik
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/* <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                    <div className="mt-2">
                        <h6>
                            <span className="badge bg-amber-700">Question 2</span>
                        </h6>
                    </div>
                    <div className="italic font-semibold text-amber-700">
                        <p>
                            "Hal mana sajakah di bawah ini yang perlu kami
                            tingkatkan terkait proses desain"
                            <span className="text-red-500">*</span>
                        </p>
                    </div>
                    <div className="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_2[]"
                                    id="question_2[]"
                                    value="Proses desain sudah memiliki alur yang baik"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_2[]">
                                    Proses desain sudah memiliki alur yang baik
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_2[]"
                                    id="question_2[]"
                                    value="Harga penanganan desain terlalu mahal"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_2[]">
                                    Harga penanganan desain terlalu mahal
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_2[]"
                                    id="question_2[]"
                                    value="Waktu penanganan desain terlalu lama"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_2[]">
                                    Waktu penanganan desain terlalu lama
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_2[]"
                                    id="question_2[]"
                                    value="Kualitas layanan pelanggan yang perlu di tingkatkan"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_2[]">
                                    Kualitas layanan pelanggan yang perlu di
                                    tingkatkan
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_2[]"
                                    id="question_2[]"
                                    value="Proses desain sudah memiliki alur yang sangat baik"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_2[]">
                                    Proses desain sudah memiliki alur yang
                                    sangat baik
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                    <div className="mt-2">
                        <h6>
                            <span className="badge bg-amber-700">Question 3</span>
                        </h6>
                    </div>
                    <div className="italic font-semibold text-amber-700">
                        <p>
                            "Hal mana sajakah dibawah ini yang perlu kami
                            tingkatkan terkait pengiriman"
                            <span className="text-red-500">*</span>
                        </p>
                    </div>
                    <div className="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_3[]"
                                    id="question_3[]"
                                    value="Seluruh proses pengiriman sudah baik"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_3[]">
                                    Seluruh proses pengiriman sudah baik
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_3[]"
                                    id="question_3[]"
                                    value="Pengiriman Produk terlalu lama"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_3[]">
                                    Pengiriman Produk terlalu lama
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_3[]"
                                    id="question_3[]"
                                    value="Status pengiriman yang kurang jelas"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_3[]">
                                    Status pengiriman yang kurang jelas
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_3[]"
                                    id="question_3[]"
                                    value="Kualitas pengemasan produk kurang baik"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_3[]">
                                    Kualitas pengemasan produk kurang baik
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_3[]"
                                    id="question_3[]"
                                    value="Opsi pengiriman terbatas"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_3[]">
                                    Opsi pengiriman terbatas
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_3[]"
                                    id="question_3[]"
                                    value="Paket rusak dalam pengiriman"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_3[]">
                                    Paket rusak dalam pengiriman
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_3[]"
                                    id="question_3[]"
                                    value="Jangkauan area pengiriman terbatas"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_3[]">
                                    Jangkauan area pengiriman terbatas
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_3[]"
                                    id="question_3[]"
                                    value="Tidak semua barang yang dipesan terkirim"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_3[]">
                                    Tidak semua barang yang dipesan terkirim
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_3[]"
                                    id="question_3[]"
                                    value="Tidak semua barang yang dipesan terkirim"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_3[]">
                                    Seluruh proses pengiriman sangat baik
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                    <div className="mt-2">
                        <h6>
                            <span className="badge bg-amber-700">Question 4</span>
                        </h6>
                    </div>
                    <div className="italic font-semibold text-amber-700">
                        <p>
                            "Hal mana sajakah dibawah ini yang perlu kami
                            tingkatkan terkait Produk"
                            <span className="text-red-500">*</span>
                        </p>
                    </div>
                    <div className="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_4[]"
                                    id="question_4[]"
                                    value="Kami puas terhadap produk yang diterima"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_4[]">
                                    Kami puas terhadap produk yang diterima
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_4[]"
                                    id="question_4[]"
                                    value="Harga produk terlalu mahal"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_4[]">
                                    Harga produk terlalu mahal
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_4[]"
                                    id="question_4[]"
                                    value="Produk kurang sesuai dengan ekspektasi"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_4[]">
                                    Produk kurang sesuai dengan ekspektasi
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_4[]"
                                    id="question_4[]"
                                    value="Kualitas produk kurang memuaskan"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_4[]">
                                    Kualitas produk kurang memuaskan
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_4[]"
                                    id="question_4[]"
                                    value="Packing produk kurang memadai"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_4[]">
                                    Packing produk kurang memadai
                                </label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-1">
                                <input
                                    type="checkbox"
                                    name="question_4[]"
                                    id="question_4[]"
                                    value="Kami sangat puas terhadap keseluruhan produk yang kami terima"
                                ></input>
                            </div>
                            <div className="col-11 ps-0">
                                <label className="mb-2" for="question_4[]">
                                    Kami sangat puas terhadap keseluruhan produk
                                    yang kami terima
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                    <div className="mt-2">
                        <h6>
                            <span className="badge bg-amber-700">Question 5</span>
                        </h6>
                    </div>
                    <div className="italic font-semibold text-amber-700">
                        <p>
                            "Berikan saran atau kritik untuk meningkatkan
                            layanan kami"<span className="text-red-500">*</span>
                        </p>
                    </div>
                    <div className="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                        <textarea
                            className="w-full h-40 mt-2 p-2"
                            type="text"
                            name="question_5"
                            id="question_5"
                        ></textarea>
                    </div>
                </div>
                <div className="d-flex justify-content-end">
                    <input
                        type="submit"
                        value="submit"
                        className="border-0 px-2 bg-amber-800 text-white font-bold hover:bg-amber-900 rounded me-1 mb-1"
                    >
                        Kirim Jawaban
                    </input>
                </div> */}
                    </form>
                </div>
            </div>
            <Footer></Footer>
        </div>
    );
}

export default App;
