import Header from "@/Components/Header";
import Footer from "@/Components/Footer";
import { useState } from "react";
import { router } from "@inertiajs/react";

function App() {
    const [checkedValues, setValue] = useState({
        question_1: [],
        question_2: [],
        question_3: [],
        question_4: [],
        question_5: "",
    });

    function handleChange(event) {
        const { name, type, value, checked } = event.target;

        setValue((prev) => {
            if (type === "checkbox") {
                if (checked) {
                    return { ...prev, [name]: [...prev[name], value] };
                } else {
                    return {
                        ...prev,
                        [name]: prev[name].filter((item) => item !== value),
                    };
                }
            } else if (type === "text") {
                return { ...prev, [name]: value };
            } else {
                return prev; // No changes for other input types
            }
        });
    }

    function handleSubmit(event) {
        event.preventDefault();
        router.post("/store", checkedValues);
    }

    console.log(checkedValues);
    return (
        <div className="App">
            <Header></Header>
            <div className="container flex justify-center">
                <div className="max-w-xl mt-2">
                    <form onSubmit={handleSubmit}>
                        <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                            <div className="mt-2">
                                <span className="border-0 rounded-full bg-amber-700 py-1 px-2 text-white font-bold">
                                    Question 1
                                </span>
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
                                        <input
                                            type="checkbox"
                                            name="question_1"
                                            id="question_1"
                                            value="Proses pemesanan sudah memiliki alur yang baik"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                        ></input>
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
                                            name="question_1"
                                            id="question_1"
                                            value="Keterbatasan Informasi pada situs Web"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
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
                                            name="question_1"
                                            id="question_1"
                                            value="Proses komunikasi yang kurang efektif"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
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
                                            name="question_1"
                                            id="question_1"
                                            value="Pengisian data pemesanan yang rumit"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
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
                                            name="question_1"
                                            id="question_1"
                                            value="Opsi pembayaran perlu di perbanyak"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
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
                                            name="question_1"
                                            id="question_1"
                                            value="Keterlambatan dalam pengiriman Invoice"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
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
                                            name="question_1"
                                            id="question_1"
                                            value="Kualitas layanan pelanggan yang perlu di tingkatkan"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
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
                                            name="question_1"
                                            id="question_1"
                                            value="Alur proses pemesanan sudah sangat baik"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
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
                        <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                            <div className="mt-2">
                                <span className="border-0 rounded-full bg-amber-700 py-1 px-2 text-white font-bold">
                                    Question 2
                                </span>
                            </div>
                            <div className="italic font-semibold text-amber-700 mt-2 mb-2">
                                <p>
                                    "Hal mana sajakah di bawah ini yang perlu
                                    kami tingkatkan terkait proses desain"
                                    <span className="text-red-500">*</span>
                                </p>
                            </div>
                            <div className="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_2"
                                            id="question_2"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Proses desain sudah memiliki alur yang baik"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Proses desain sudah memiliki alur
                                            yang baik
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_2"
                                            id="question_2"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Harga penanganan desain terlalu mahal"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Harga penanganan desain terlalu
                                            mahal
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_2"
                                            id="question_2"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Waktu penanganan desain terlalu lama"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Waktu penanganan desain terlalu lama
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_2"
                                            id="question_2"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Kualitas layanan pelanggan yang perlu di tingkatkan"
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
                                            name="question_2"
                                            id="question_2"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Proses desain sudah memiliki alur yang sangat baik"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Proses desain sudah memiliki alur
                                            yang sangat baik
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                            <div className="mt-2">
                                <span className="border-0 rounded-full bg-amber-700 py-1 px-2 text-white font-bold">
                                    Question 3
                                </span>
                            </div>
                            <div className="italic font-semibold text-amber-700 mt-2 mb-2">
                                <p>
                                    "Hal mana sajakah dibawah ini yang perlu
                                    kami tingkatkan terkait pengiriman"
                                    <span className="text-red-500">*</span>
                                </p>
                            </div>
                            <div className="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_3"
                                            id="question_3"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Seluruh proses pengiriman sudah baik"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Seluruh proses pengiriman sudah baik
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_3"
                                            id="question_3"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Pengiriman Produk terlalu lama"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Pengiriman Produk terlalu lama
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_3"
                                            id="question_3"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Status pengiriman yang kurang jelas"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Status pengiriman yang kurang jelas
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_3"
                                            id="question_3"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Kualitas pengemasan produk kurang baik"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Kualitas pengemasan produk kurang
                                            baik
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_3"
                                            id="question_3"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Opsi pengiriman terbatas"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Opsi pengiriman terbatas
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_3"
                                            id="question_3"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Paket rusak dalam pengiriman"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Paket rusak dalam pengiriman
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_3"
                                            id="question_3"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Jangkauan area pengiriman terbatas"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Jangkauan area pengiriman terbatas
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_3"
                                            id="question_3"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Tidak semua barang yang dipesan terkirim"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Tidak semua barang yang dipesan
                                            terkirim
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_3"
                                            id="question_3"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Tidak semua barang yang dipesan terkirim"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Seluruh proses pengiriman sangat
                                            baik
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                            <div className="mt-2">
                                <span className="border-0 rounded-full bg-amber-700 py-1 px-2 text-white font-bold">
                                    Question 4
                                </span>
                            </div>
                            <div className="italic font-semibold text-amber-700 mt-2 mb-2">
                                <p>
                                    "Hal mana sajakah dibawah ini yang perlu
                                    kami tingkatkan terkait Produk"
                                    <span className="text-red-500">*</span>
                                </p>
                            </div>
                            <div className="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_4"
                                            id="question_4"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Kami puas terhadap produk yang diterima"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Kami puas terhadap produk yang
                                            diterima
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_4"
                                            id="question_4"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Harga produk terlalu mahal"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Harga produk terlalu mahal
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_4"
                                            id="question_4"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Produk kurang sesuai dengan ekspektasi"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Produk kurang sesuai dengan
                                            ekspektasi
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_4"
                                            id="question_4"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Kualitas produk kurang memuaskan"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Kualitas produk kurang memuaskan
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_4"
                                            id="question_4"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Packing produk kurang memadai"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Packing produk kurang memadai
                                        </label>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-1">
                                        <input
                                            type="checkbox"
                                            name="question_4"
                                            id="question_4"
                                            onChange={handleChange}
                                            className="checkbox checkbox-sm border-white checked:border-orange-700 [--chkbg:theme(colors.amber.700)] [--chkfg:white]"
                                            value="Kami sangat puas terhadap keseluruhan produk yang kami terima"
                                        ></input>
                                    </div>
                                    <div className="col-11 ps-0">
                                        <label className="mb-2">
                                            Kami sangat puas terhadap
                                            keseluruhan produk yang kami terima
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                            <div className="mt-2">
                                <span className="border-0 rounded-full bg-amber-700 py-1 px-2 text-white font-bold">
                                    Question 5
                                </span>
                            </div>
                            <div className="italic font-semibold text-amber-700 mt-2 mb-2">
                                <p>
                                    "Berikan saran atau kritik untuk
                                    meningkatkan layanan kami"
                                    <span className="text-red-500">*</span>
                                </p>
                            </div>
                            <div className="border-0 rounded bg-orange-200 py-2 px-3 mb-2">
                                <input
                                    className="w-full h-40 mt-2 p-2"
                                    type="text"
                                    name="question_5"
                                    id="question_5"
                                    onChange={handleChange}
                                    value={checkedValues.question_5}
                                ></input>
                            </div>
                        </div>
                        {/* <div className="d-flex justify-content-end">
                            <input
                                type="submit"
                                value="submit"
                                className="border-0 px-2 bg-amber-800 text-white font-bold hover:bg-amber-900 rounded me-1 mb-1"
                            >
                                Kirim Jawaban
                            </input>
                        </div> */}
                        <div className="border-0 rounded bg-orange-100 py-2 px-3 mb-4">
                            <div className="flex justify-center">
                                <button
                                    className="btn btn-block btn-warning"
                                    type="submit"
                                >
                                    Kirim Jawaban
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-send-fill"
                                        viewBox="0 0 16 16"
                                    >
                                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <Footer></Footer>
        </div>
    );
}

export default App;
