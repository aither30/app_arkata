<div class="flex min-h-screen w-full flex-col items-center justify-center p-6 ">
    <h1 class="text-4xl font-extrabold  text-[#2E7DCC] mb-6">Arkata Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
        @foreach ($chartData as $key => $value)
            <div x-data="{ viewType: 'all' }"
                class="rounded-xl border border-gray-700 bg-gray-900 p-6 shadow-lg flex flex-col justify-center items-center">
                {{-- Title + Selector --}}
                <div class="flex flex-col items-start mb-4 w-full">
                    <h4 class="text-white text-lg font-semibold capitalize tracking-wide mb-2">
                        {{ Str::headline($key) }}
                    </h4>

                    <div class="flex gap-3">
                        <span @click="viewType = 'month'"
                            :class="viewType === 'month' ? 'text-white font-semibold' : 'text-gray-500 font-semibold'"
                            class="cursor-pointer text-sm">
                            Bulan Ini
                        </span>
                        <span class="text-gray-600">/</span>
                        <span @click="viewType = 'all'"
                            :class="viewType === 'all' ? 'text-white font-semibold' : 'text-gray-500 font-semibold'"
                            class="cursor-pointer text-sm">
                            Semua
                        </span>
                    </div>
                </div>

                {{-- Total Angka --}}
                <div class="flex justify-around border-2 border-white rounded-lg w-full p-4 gap-2">
                    {{-- <div class="bg-blue-600 w-full flex rounded-lg "> chart biasa</div> --}}
                    <div>
                        <p class="text-5xl font-bold text-white border-b-2 p-4 bg-gray-900">
                            <span
                                x-text="viewType === 'month' ? {{ $value['totalMonth'] }} : {{ $value['totalAll'] }}"></span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
