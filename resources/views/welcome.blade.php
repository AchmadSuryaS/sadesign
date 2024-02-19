@extends('layouts.main')

@section('container')
    <section class="py-24 bg-white">
        <div class="w-full md:text-center max-w-screen-lg mx-auto p-5">
            <h1
                class="mb-8 text-4xl font-extrabold leading-none tracking-normal text-primary md:text-6xl md:tracking-tight">
                Designing Dream Into Reality
            </h1>
            <p class="px-0 mb-8 text-lg text-gray-600 md:text-xl lg:px-24">
                Start gaining the traction you've always wanted with our next-level templates and designs. Crafted to
                help you tell your story.
            </p>
            <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
                <a href="{{ route('services') }}"
                    class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg text-primary border border-primary hover:bg-primary hover:text-white rounded-full sm:w-auto sm:mb-0">
                    Services

                </a>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg border bg-primary text-white rounded-full sm:w-auto sm:mb-0">
                    Contact
                </a>
            </div>
        </div>

        <div class="w-full mt-20 text-center max-w-screen-lg mx-auto">
            <div class="relative z-0 w-full mt-8">
                <div class="relative overflow-hidden">
                    <img src="/assets/map.png">
                </div>
            </div>
        </div>

        <section class="bg-primary max-w-screen-2xl mx-auto">
            <div class="container flex flex-col items-center px-4 py-16 text-center max-w-screen-lg mx-auto">
                <h1 class="text-4xl font-bold text-white">
                    Ready to make a design?
                </h1>
                <p class="px-8 mt-8 mb-12 text-white">If you have special preferences or would like to add certain details,
                    please let us know! Contact us immediately, let's collaborate to create a special design according to
                    your needs.</p>
                <div class="flex flex-wrap justify-center">
                    <a href="https://wa.wizard.id/aae987" target="_blank">
                        <button class="px-8 py-3 m-2 text-lg font-semibold rounded bg-white text-primary">
                            Consultation
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <div class="container flex flex-col justify-center p-5 sm:py-12 lg:py-24 lg:flex-row lg:justify-between max-w-screen-lg mx-auto">
            <div class="flex items-center justify-center p-5 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="assets/sadesign.png" alt=""
                    class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            </div>
            <div class="flex flex-col justify-center p-5 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-5xl font-bold  sm:text-6xl text-secondary font-poppins">
                    Why Choose <span class="text-primary">SADESIGN</span>
                </h1>
                <p class="mt-6 mb-8 sm:mb-12 font-poppins">
                    Sadesign is an expert in the field of graphic creation services. With an experienced
                    creative team, we offer innovative and high-quality design solutions to meet your business's visual
                    needs.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 max-w-screen-lg mx-auto">
            <div class="px-4 py-8 mx-auto text-center lg:px-6 h-auto">
                <figure class="max-w-screen-md mx-auto border border-primary p-5 rounded-2xl">
                    <svg class="h-8 mx-auto mb-3 text-primary dark:text-gray-600" viewBox="0 0 24 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                            fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-lg font-medium text-secondary">The best Design Service I have experienced in years.
                            Because
                            apart from being fast and safe, the customer support is also extraordinary and can help when
                            there
                            are difficulties.</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3">
                        <img class="w-6 h-6 rounded-full"
                            src="https://www.washingtonpost.com/resizer/Ezp98tKJbXwq7IPkWOVfg59VrLk=/arc-anglerfish-washpost-prod-washpost/public/M2MDQKWBQMXMXNGCKGRYRATD6Q.JPG"
                            alt="profile picture">
                        <div class="flex items-center divide-x-2 divide-secondary">
                            <div class="pr-3 font-medium text-secondary">Shou Zi Chew</div>
                            <div class="pl-3 text-sm font-light text-secondary">CEO at Tiktok</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="px-4 py-8 mx-auto text-center  lg:px-6 h-auto">
                <figure class="max-w-screen-md mx-auto border border-primary p-5 rounded-2xl">
                    <svg class="h-8 mx-auto mb-3 text-primary dark:text-gray-600" viewBox="0 0 24 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                            fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-lg font-medium text-secondary">
                            Fantastic service, quality & varied products, competitive prices, fast delivery time, responsive
                            and helpful support. The flow makes it very easy even for lay people.
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3">
                        <img class="w-6 h-6 rounded-full"
                            src="https://img.inews.co.id/media/600/files/inews_new/2019/07/22/Nadiem.jpg"
                            alt="profile picture">
                        <div class="flex items-center divide-x-2 divide-secondary">
                            <div class="pr-3 font-medium text-secondary">Nadiem Makarim</div>
                            <div class="pl-3 text-sm font-light text-secondary">Founder at Gojek</div>
                        </div>
                    </figcaption>
                </figure>
            </div>

        </div>

    </section>
@endsection
