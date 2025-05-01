<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head></x-head>

<body class="bg-white text-[#1b1b18] lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <main class="p-6">
        <x-navbar></x-navbar>
        <x-cardchart :chartData="$chartData" :totalAll="$totalAll" />
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </main>
</body>

</html>
