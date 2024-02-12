@extends('layouts.main')

@section('container')
    <h1 class="text-3xl p-5 font-semibold text-primary">Paket Website</h1>
    <div class="mx-10">
        <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Info!</span> Minimal pembelian paket website 1 Tahun.
            </div>
        </div>
    </div>
    <div class="h-auto grid grid-cols-1 xl:grid-cols-3 gap-5 justify-center mx-5 p-5 mb-20">
        <div class="product">
            <div class="mb-4">
                <div class="w-full p-4 bg-[#89A9DE] sm:p-8">
                    <h5 class="mb-4 text-xl font-medium text-white">Novice</h5>
                    <div class="flex items-baseline text-white">
                        <span class="text-xl font-semibold">Rp.</span>
                        <span class="text-3xl font-extrabold tracking-tight">100.000,00</span>/bulan
                    </div>
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">3 Halaman/menu</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">3 Gb Hosting NVMe</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">Free SSL/HTTPS</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">2 x Revisi</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-xmark text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3 line-through">Akses admin
                                website</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-xmark text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3 line-through">Live
                                Chat</span>
                        </li>
                    </ul>
                    <button class="bg-[#1D3566] p-3 text-white" onclick="buyNow('Paket Novice', 100000, 12)">Buy
                        Now</button>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="mb-4">
                <div class="w-full p-4 bg-[#89A9DE] sm:p-8">
                    <h5 class="mb-4 text-xl font-medium text-white">Expert</h5>
                    <div class="flex items-baseline text-white">
                        <span class="text-xl font-semibold">Rp.</span>
                        <span class="text-3xl font-extrabold tracking-tight">350.000,00</span>/bulan
                    </div>
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">5 Halaman/menu</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">3 Gb Hosting NVMe</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">Free SSL/HTTPS</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">3 x Revisi</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">Akses admin website</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-xmark text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3 line-through">Live
                                Chat</span>
                        </li>
                    </ul>
                    <button class="bg-[#1D3566] p-3 text-white" onclick="buyNow('Paket Expert', 350000, 12)">Buy
                        Now</button>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="mb-4">
                <div class="w-full p-4 bg-[#89A9DE] sm:p-8">
                    <h5 class="mb-4 text-xl font-medium text-white">Master</h5>
                    <div class="flex items-baseline text-white">
                        <span class="text-xl font-semibold">Rp.</span>
                        <span class="text-3xl font-extrabold tracking-tight">559.000,00</span>/bulan
                    </div>
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">8 Halaman/menu</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">5 Gb Hosting NVMe</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">Free SSL/HTTPS</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">3 x Revisi</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">Akses admin website</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-circle-check text-white"></i>
                            <span class="text-base font-normal leading-tight text-white ms-3">Live Chat</span>
                        </li>
                    </ul>
                    <button class="bg-[#1D3566] p-3 text-white" onclick="buyNow('Paket Master', 559000, 12)">Buy
                        Now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-4 flex flex-col justify-center">
        <h1 class="text-5xl font-semibold text-primary text-center">BELI PRODUK LAIN</h1>
        <a href="https://wa.link/ni5ujq" target="_blank">
            <h1 class="bg-[#2CD46B] text-xl md:text-3xl rounded-full p-3 md:p-5 text-white text-center w-auto m-10"><i
                    class="fa-brands fa-whatsapp"></i> +62 838-0526-9250</h1>
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script>
        let cart = [];

        function formatRupiah(amount) {
            return new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0,
            }).format(amount);
        }

        function buyNow(product, price, multiplier) {
            // Mengalikan harga dengan multiplier (12 atau 1 tahun)
            const discountedPrice = price * multiplier;

            const item = {
                product,
                price: discountedPrice,
                quantity: 1
            };

            cart.push(item);

            const message = `${product} - Quantity: 1\nPrice: ${formatRupiah(discountedPrice)}`;
            const whatsappLink = `https://wa.me/6283805269250?text=${encodeURIComponent(message)}`;

            window.open(whatsappLink, '_blank');
        }
    </script>
@endsection
