@extends('layouts/app')

@section('title', 'Hasil Panen | CropSystem')

@section('container')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Edit Hasil Panen
    </h2>
</x-slot>

<div>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="post" action="{{ route('hasilpanens.update', $panen->id) }}">
                @csrf
                @method('put')
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="jenis_tanaman" class="block font-medium text-sm text-gray-700">Jenis Tanaman</label>
                        <input readonly type="text" name="jenis_tanaman" id="jenis_tanaman" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('jenis_tanaman', $panen->jenis_tanaman) }}" />
                        @error('jenis_tanaman')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="berat" class="block font-medium text-sm text-gray-700">Berat</label>
                        <input type="text" name="berat" id="berat" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('berat', $panen->berat) }}" />
                        @error('berat')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="nama_petani" class="block font-medium text-sm text-gray-700">Nama Petani</label>
                        <input type="text" name="nama_petani" id="nama_petani" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('nama_petani', $panen->nama_petani) }}" />
                        @error('nama_petani')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="nomor_wa" class="block font-medium text-sm text-gray-700">Nomor Telepon/WhatsApp</label>
                        <input type="text" name="nomor_wa" id="nomor_wa" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('nomor_wa', $panen->nomor_wa) }}" />
                        @error('nomor_wa')
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
