@extends('layouts.sidebar')

@section('container')
    <section class="flex mx-auto justify-center items-center">
        <div class="my-14 bg-primary rounded-xl shadow-sm w-full mx-10 ">
            <div class="p-5 text-center text-2xl text-white font-bold">
                Update User
            </div>
            <form action="{{ route('u-user', $user->id) }}" method="POST" class="mx-auto p-5">
                @csrf
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-white">
                        Name</label>
                    <input type="text" name="name"
                        class="bg-white text-primary text-sm font-semibold rounded-lg block w-full p-2.5" value="{{ $user->name }}" required>
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-white">
                        Email</label>
                    <input type="email" name="email"
                        class="bg-white text-primary text-sm font-semibold rounded-lg block w-full p-2.5" value="{{ $user->email }}" required>
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-white">
                        Username</label>
                    <input type="text" name="username"
                        class="bg-white text-primary text-sm font-semibold rounded-lg block w-full p-2.5" value="{{ $user->username }}" required>
                </div>
                <div class="flex items-start mb-5">
                    <label for="remember" class="ms-2 text-sm font-medium text-secondary"><a
                            href="" class="text-white hover:underline">UPDATE PASSWORD</a></label>
                </div>
                <button type="submit"
                    class="text-primary bg-white hover:bg-secondary font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Update</button>
            </form>
        </div>
    </section>
@endsection
