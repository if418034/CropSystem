@extends('layouts/app')

@section('title', 'Comments | CropSystem')

@section('container')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Edit Informasi Komentar
    </h2>
</x-slot>

<div>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="post" action="{{ route('comments.update', $comment->id) }}">
                @csrf
                @method('put')
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('email', $comment->email) }}" />
                        @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="nama" class="block font-medium text-sm text-gray-700">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('nama', $comment->nama) }}" />
                        @error('nama')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="komentar" class="block font-medium text-sm text-gray-700">Komentar</label>
                        <input type="text" name="komentar" id="komentar" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('komentar', $comment->komentar) }}" />
                        @error('komentar')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Edit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection