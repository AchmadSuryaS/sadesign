@extends('layouts.sidebar')

@section('container')
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-3">
        <a href="{{ route('dashboard') }}">
            <div class="bg-white border border-gray-200 shadow-xl flex p-5">
                <div class="flex justify-center items-center bg-secondary p-5 rounded-2xl">
                    <i class="fa-solid fa-gauge fa-fw text-5xl text-white"></i>
                </div>
                <div class="p-5">
                    <p class="text-lg font-semibold">Dashboard</p>
                    <p class="text-lg text-gray-500">Dasboard</p>
                </div>
            </div>
        </a>
        <a href="{{ route('a-user') }}">
            <div class="bg-white border border-gray-200 shadow-xl flex p-5">
                <div class="flex justify-center items-center bg-secondary p-5 rounded-2xl">
                    <i class="fa-solid fa-user fa-fw text-5xl text-white"></i>
                </div>
                <div class="p-5">
                    <p class="text-lg font-semibold">{{ $counts }}</p>
                    <p class="text-lg text-gray-500">Users</p>
                </div>
            </div>
        </a>
    </div>
    <div class="flex justify-center">
       <a href="https://instagram.com/hi_sseulgi" target="_blank">
        <img src="/assets/sayangku.jpeg" class="w-96 py-5">
       </a>
    </div>
@endsection
