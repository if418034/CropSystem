@extends('layouts/app')

@section('title', 'Dashboard | CropSystem')

@section('container')

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Edit Informasi Cropping
    </h2>
</x-slot>
<div>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="post" action="{{ route('crops.update', $crop->id) }}">
                @csrf
                @method('put')
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="jenisTanah" class="block font-medium text-sm text-gray-700">Jenis Tanah</label>
                        <input type="text" name="jenisTanah" id="jenisTanah" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('jenisTanah', $crop->jenisTanah) }}" />
                        @error('jenisTanah')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="curahHujan" class="block font-medium text-sm text-gray-700">Curah Hujan</label>
                        <input type="text" name="curahHujan" id="curahHujan" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('curahHujan', $crop->curahHujan) }}" />
                        @error('curahHujan')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="iklim" class="block font-medium text-sm text-gray-700">Iklim</label>
                        <input type="text" name="iklim" id="iklim" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('iklim', $crop->iklim) }}" />
                        @error('iklim')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="suhu" class="block font-medium text-sm text-gray-700">Suhu</label>
                        <input type="text" name="suhu" id="suhu" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('suhu', $crop->suhu) }}" />
                        @error('suhu')
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