@extends('layouts/app')

@section('title', 'Dashboard | CropSystem')

@section('container')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Tanaman
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('tanamans.update', $tanaman->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="jenisTanaman" class="block font-medium text-sm text-gray-700">Jenis Tanaman</label>
                            <input type="text" name="jenisTanaman" id="jenisTanaman" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('jenisTanaman', $tanaman->jenisTanaman) }}" />
                            @error('jenisTanaman')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="kondisiAgroclimatic" class="block font-medium text-sm text-gray-700">Kondisi Agroclimatic</label>
                            <input type="text" name="kondisiAgroclimatic" id="kondisiAgroclimatic" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('kondisiAgroclimatic', $tanaman->kondisiAgroclimatic) }}" />
                            @error('kondisiAgroclimatic')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="jenisPupuk" class="block font-medium text-sm text-gray-700">Jenis Pupuk</label>
                            <input type="text" name="jenisPupuk" id="jenisPupuk" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('jenisPupuk', $tanaman->jenisPupuk) }}" />
                            @error('jenisPupuk')
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
