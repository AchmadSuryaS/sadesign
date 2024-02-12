@extends('layouts.main')

@section('container')
    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="assets/sadesign.png" alt=""
                    class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            </div>
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-3xl font-bold leadi sm:text-5xl text-primary">KENAPA PILIH
                    <span class="text-primary">SAD</span><span class="text-secondary">ESIGN</span>
                </h1>
                <p class="mt-6 mb-8 text-lg sm:mb-12">SADESIGN adalah ahli di bidang jasa pembuatan grafis. Dengan tim kreatif yang berpengalaman, kami menawarkan solusi desain yang inovatif dan berkualitas tinggi untuk memenuhi kebutuhan visual bisnis Anda. Dari logo yang mencolok hingga materi pemasaran yang menarik, SADESIGN menempatkan keahlian dalam mewujudkan visi grafis Anda untuk memberikan dampak positif pada merek Anda.
                </p>
                <div
                    class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a href="/about"
                        class="px-8 py-3 text-lg font-semibold rounded bg-primary text-white">Lebih banyak</a>
                </div>
            </div>
        </div>
    </section>
@endsection
