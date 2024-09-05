<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Animasi Wildan</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div id="loader" class="loading-spinner">
        <div class="animate-spin rounded-full h-32 w-32 border-t-4 border-blue-500"></div>
    </div>

    <div id="content" class="hidden">
        <h1 class="text-4xl text-center mt-10 animate__animated animate__fadeIn">Selamat Datang di Laravel 10 Wildan!</h1>
        <p class="text-center mt-5 animate__animated animate__fadeIn animate__delay-1s">
            Halaman ini memuat dengan animasi yang halus Wildan.
        </p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hide the loader and show content after loading
            setTimeout(function() {
                document.getElementById('loader').classList.add('hidden');
                document.getElementById('content').classList.remove('hidden');
            }, 2000); // 2 seconds delay for the demo
        });
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<img src="path-to-image.jpg" alt="Gambar" loading="lazy" class="rounded-lg shadow-lg">

