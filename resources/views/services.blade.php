@extends('layouts.main')

@section('container')
    <section class="max-w-screen-lg mx-auto">

        {{-- Website Package --}}
        <section class="my-10">
            <h1 class="text-center text-5xl mb-10 font-bold text-primary">Website Package</h1>
            <div class="h-auto grid grid-cols-1 xl:grid-cols-3 gap-5 justify-center mx-5 p-5 mb-20">
                <div class="product">
                    <div class="mb-4">
                        <div class="w-full p-4 bg-[#89A9DE] sm:p-8">
                            <h5 class="mb-4 text-xl font-medium text-white">Paket UMKM</h5>
                            <ul role="list" class="space-y-5">
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">3 Pages/menus</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">2x Revision</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">10+ Themes to choose
                                        from</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">Free Optimization &
                                        Digital Marketing Consultation</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-xmark text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3 line-through">Website
                                        admin
                                        access</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-xmark text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3 line-through">Live
                                        Chat</span>
                                </li>
                            </ul>
                            <div class="flex items-baseline text-white py-5">
                                <span class="text-xl font-semibold">Rp.</span>
                                <span class="text-3xl font-extrabold tracking-tight">300.000,00</span>
                            </div>
                            <button class="bg-[#1D3566] p-3 text-white">Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Poster Package --}}
        <section class="my-10">
            <h1 class="text-center text-5xl mb-10 font-bold text-primary">Poster Package</h1>
            <div class="h-auto grid grid-cols-1 xl:grid-cols-3 gap-5 justify-center mx-5 p-5 mb-20">
                <div class="product">
                    <div class="mb-4">
                        <div class="w-full p-4 bg-[#89A9DE] sm:p-8">
                            <h5 class="mb-4 text-xl font-medium text-white">Paket Hemat</h5>
                            <ul role="list" class="space-y-5">
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">1 Choice of poster concepts</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">Fast Process 1-2 Days</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">3x Revision</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">File HD (JPG|PNG|PDF)</span>
                                </li>
                            </ul>
                            <div class="flex items-baseline text-white py-5">
                                <span class="text-xl font-semibold">Rp.</span>
                                <span class="text-3xl font-extrabold tracking-tight">199.000,00</span>
                            </div>
                            <button class="bg-[#1D3566] p-3 text-white">Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Name Card Package --}}
        <section class="my-10">
            <h1 class="text-center text-5xl mb-10 font-bold text-primary">Name Card Package</h1>
            <div class="h-auto grid grid-cols-1 xl:grid-cols-3 gap-5 justify-center mx-5 p-5 mb-20">
                <div class="product">
                    <div class="mb-4">
                        <div class="w-full p-4 bg-[#89A9DE] sm:p-8">
                            <h5 class="mb-4 text-xl font-medium text-white">Paket Individu</h5>
                            <ul role="list" class="space-y-5">
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">1 Choice of name card concepts</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">Fast Process 1 Days</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">Bisa Revisi Hingga 3x</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">File HD (JPG|PNG|PDF)</span>
                                </li>
                            </ul>
                            <div class="flex items-baseline text-white py-5">
                                <span class="text-xl font-semibold">Rp.</span>
                                <span class="text-3xl font-extrabold tracking-tight">100.000,00</span>
                            </div>
                            <button class="bg-[#1D3566] p-3 text-white">Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ID Card Package --}}
        <section class="my-10">
            <h1 class="text-center text-5xl mb-10 font-bold text-primary">ID Card Package</h1>
            <div class="h-auto grid grid-cols-1 xl:grid-cols-3 gap-5 justify-center mx-5 p-5 mb-20">
                <div class="product">
                    <div class="mb-4">
                        <div class="w-full p-4 bg-[#89A9DE] sm:p-8">
                            <h5 class="mb-4 text-xl font-medium text-white">Paket Individu</h5>
                            <ul role="list" class="space-y-5">
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">1 Choice of name card concepts</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">Fast Process 1-2 Days</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">Bisa Revisi Hingga 3x</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">Free Custome Lanyard</span>
                                </li>
                            </ul>
                            <div class="flex items-baseline text-white py-5">
                                <span class="text-xl font-semibold">Rp.</span>
                                <span class="text-3xl font-extrabold tracking-tight">119.000,00</span>
                            </div>
                            <button class="bg-[#1D3566] p-3 text-white">Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         {{-- Social Media (Instagram) Package --}}
         <section class="my-10">
            <h1 class="text-center text-5xl mb-10 font-bold text-primary">Social Media Package (Instagram)</h1>
            <div class="h-auto grid grid-cols-1 xl:grid-cols-3 gap-5 justify-center mx-5 p-5 mb-20">
                <div class="product">
                    <div class="mb-4">
                        <div class="w-full p-4 bg-[#89A9DE] sm:p-8">
                            <h5 class="mb-4 text-xl font-medium text-white">Paket Individu</h5>
                            <ul role="list" class="space-y-5">
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">12 Feed Designs</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">2 Story Design</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">Carousel Posts</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="text-base font-normal leading-tight text-white ms-3">Creative Design</span>
                                </li>
                            </ul>
                            <div class="flex items-baseline text-white py-5">
                                <span class="text-xl font-semibold">Rp.</span>
                                <span class="text-3xl font-extrabold tracking-tight">149.000,00</span>
                            </div>
                            <button class="bg-[#1D3566] p-3 text-white">Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </section>
@endsection
