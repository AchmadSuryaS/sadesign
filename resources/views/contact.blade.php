@extends('layouts.main')

@section('container')
    <div class="p-5">
        <h1 class="text-3xl text-primary font-semibold">Kontak</h1>
    </div>
    <div class="flex justify-center my-10">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0689472968766!2d106.85967817441045!3d-6.254647061237252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2e5672a5c0b%3A0xbb10b96bbc53e0e5!2sSTIE%20TUNAS%20NUSANTARA!5e0!3m2!1sid!2sid!4v1706681508921!5m2!1sid!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="mb-4 flex flex-col justify-center">
        <h1 class="text-5xl font-semibold text-primary text-center">Whatsapp</h1>
        <a href="https://wa.link/ni5ujq" target="_blank">
            <h1 class="bg-[#2CD46B] text-xl md:text-3xl rounded-full p-3 md:p-5 text-white text-center w-auto m-10"><i
                    class="fa-brands fa-whatsapp"></i> +62 838-0526-9250</h1>
        </a>
    </div>
@endsection
