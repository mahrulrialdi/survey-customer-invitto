import logo from "../../../public/assets/img/LOGO INVITTO BLACK.png"

export default function Header() {
    return (
        <>
            <div className="container flex justify-center">
                <div className="max-w-xl mt-2">
                    <div className="col text-center">
                        <img
                            src={logo}
                            className="p-3"
                            alt="Logo IMM"
                            width="250px"
                        ></img>
                    </div>
                </div>
            </div>
            <div className="container flex justify-center">
                <div className="max-w-xl mt-2">
                    <div className="border-2 shadow-sm p-3 mb-1 bg-white rounded">
                        <div className="border-0 bg-pink-700 rounded py-1 text-center">
                            <h4 className="text-white text-xl font-extrabold">
                                Survey Kepuasan Pelanggan
                            </h4>
                        </div>
                        <div className="mt-3 px-1">
                            <p>
                                Halo couples.. terimakasih telah memilih
                                Invitto untuk menjadi bagian dari
                                hari bahagia, sebagai pembawa kabar
                                pernikahanmu. Kami ingin mendengar pendapatmu!
                                Beritahu kami, terkait pengalamanmu membeli
                                produk Kami ya ☺️
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
