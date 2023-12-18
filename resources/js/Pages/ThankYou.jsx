import logo from "../../../public/assets/img/LOGO INVITTO BLACK.png";
import Footer from "@/Components/Footer";

function App() {
    return (
        <div className="App">
            <div className="container">
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
                                <h4 className="text-white text-2xl font-extrabold">
                                    Thank You
                                </h4>
                            </div>
                            <div className="mt-3">
                                <p>
                                    Terima kasih couples telah meluangkan waktu
                                    untuk mengisi survey, sehat selalu yaa. See
                                    you 💕
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="absolute bottom-2 left-0 right-0">
                <Footer></Footer>
                </div>
            </div>
        </div>
    );
}

export default App;
