<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Survey Kepuasan Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body class="bg-orange-50">
    <div class="container flex justify-center">
        <div class="max-w-xl mt-2">
            <div class="row">
                <div class="col text-center">
                    <img src="{{ asset('assets/img/LOGO INVITA BLACK.png') }}" class="p-3" alt="Logo IMM" width="250px">
                </div>
            </div>
        </div>
    </div>
    <div class="container flex justify-center">
        <div class="max-w-xl mt-2">
            <div class="border-2 shadow-sm p-3 mb-1 bg-white rounded">
                <div class="border-0 bg-amber-700 rounded py-1 text-center">
                    <h4 class="text-white">Survey Komplain Pelanggan</h4>
                </div>
                <div class="mt-3">
                    <p>Ceritakan pengalamanmu terkait pelayanan komplain Invitationery.Asia</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container flex justify-center mt-2 mb-4">
        <div class="max-w-xl mt-2">
            <div class="card shadow-sm p-3 mb-1 bg-body-tertiary rounded">
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('survey_complain') }}" class="form form-vertical" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row mb-4 border rounded p-2 bg-orange-100">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <h6><span class="badge bg-amber-700">Question 1</span></h6>
                                            <i>"Tim layanan memberikan respond yang sangat baik terhadap keluhan yang di sampaikan"<span class="text-red-500">*</span></i>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-center">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="question_1"
                                                    id="question_1" value="Setuju" required>
                                                <label class="form-check-label" for="question_1">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="question_1"
                                                    id="question_1" value="Tidak Setuju" required>
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
                                            <i>"Tim Invitationery menjelaskan dengan baik langkah-langkah yang diambil terkait komplain yang disampaikan"<span class="text-red-500">*</span></i>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-center">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="question_2"
                                                    id="question_2" value="Setuju" required>
                                                <label class="form-check-label" for="question_2">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="question_2"
                                                    id="question_2" value="Tidak Setuju" required>
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
                                            <i>"Proses penyelesaian komplen di informasikan dengan baik oleh tim Invitationery.asia"<span class="text-red-500">*</span></i>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-center">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="question_3"
                                                    id="question_3" value="Setuju" required>
                                                <label class="form-check-label" for="question_3">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="question_3"
                                                    id="question_3" value="Tidak Setuju" required>
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
                                            <i>"Apakah anda merasa solusi yang kami berikan sesuai dengan keluhan anda"<span class="text-red-500">*</span></i>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-center">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="question_4"
                                                    id="question_4" value="Setuju" required>
                                                <label class="form-check-label" for="question_4">
                                                    Setuju
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="question_4"
                                                    id="question_4" value="Tidak Setuju" required>
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
                                                    Berikan saran atau kritik untuk meningkatkan layanan kami<span class="text-red-500">*</span>
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
                                                    Bagaimana kami dapat meningkatkan proses penanganan keluhan di masa depan<span class="text-red-500">*</span>
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
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        <button type="submit" class="border-0 px-2 bg-amber-800 text-white font-bold hover:bg-amber-900 rounded me-1 mb-1">Kirim Jawaban</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container flex justify-center">
            <div class="max-w-xl mb-4">
                <div class="col">
                    <h6>Copyright @2023 by <span class="border-0 px-2 rounded bg-blue-600 text-white">IMM Dev Team</span></h6>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
