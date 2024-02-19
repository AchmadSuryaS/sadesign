@extends('layouts.sidebar')

@section('container')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            @foreach ($users as $user)
                <tbody>
                    <tr class="bg-white border-b text-center">
                        <th class="px-6 py-4 font-medium">
                            {{ $user->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->username }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->role->name }}
                        </td>
                        <td class="px-6 py-4 flex justify-center gap-1">
                            <a href="{{ route('e-user', $user->id) }}">
                                <i class="fa-solid fa-square-pen text-2xl text-secondary"></i>
                            </a>
                            <form action="{{ route('d-user', $user->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah kamu yakin ingin menghapus user?')">
                                    <i class="fa-solid fa-square-xmark text-2xl text-red-500"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        {{ $users->links() }}
    </div>
@endsection
