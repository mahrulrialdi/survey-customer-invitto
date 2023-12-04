<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Survey Kepuasan Pelanggan</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/LOGO INVITA BLACK.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body class="bg-orange-50">
    <div class="container flex justify-center">
        <div class="max-w-xl mt-2">
            <div class="row">
                <div class="col text-center">
                    <img src="{{ asset('assets/img/LOGO INVITA BLACK.png') }}" class="p-3" alt="Logo IMM"
                        width="250px">
                </div>
            </div>
        </div>
    </div>
    <div class="container flex justify-center">
        <div class="max-w-xl mt-2">
            <div class="border-2 shadow-sm p-3 mb-1 bg-white rounded">
                @yield('header')
            </div>
        </div>
    </div>
    <div class="container flex justify-center mt-2 mb-4">
        <div class="max-w-xl mt-2">
            <div class="card shadow-sm p-3 mb-1 bg-body-tertiary rounded">
                <div class="card-content">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container flex justify-center">
            @include('layouts.footer')
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
