<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.jpeg') }}"> -->
    @vite('resources/css/app.css')
    @stack('style')
    <title>Polling Surabaya</title>
</head>

<body>
    <nav class="border-[#5669CC] bg-[#5669CC] w-full">
        <div class="max-w-screen-3xl flex flex-wrap items-center justify-between mx-auto p-5">
            <div href="#" class="flex items-center">
                <a href="https://www.pens.ac.id" target="_blank">
                    <img src="{{ asset('images/pens.png') }}" class="h-12 mr-3" alt="Logo PENS" />
                </a>
                <a href="https://sainsdata.pens.ac.id" target="_blank">
                    <img src="{{ asset('images/sdt.png') }}" class="h-[45px] ml-2 " alt="Logo SDT" />
                </a>
            </div>
            <h1 class = "text-4xl ">SDT-PENS DATA CORNER</h1>
        </div>
    </nav>

    <div class="mx-auto max-w-screen-xl px-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
    @stack('script')
</body>

</html>