@extends('layouts/app')

@section('title', 'Data Tanaman | CropSystem')

@section('container')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tambah Data Tananaman baru
    </h2>
</x-slot>

<div>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="post" action="{{ route('datas.store') }}">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="status" class="block font-medium text-sm text-gray-700">Pilih Jenis Perlakuan terhadap tanaman</label>
                        <div class="form-check">
                            <input type="radio" name="status" id="status" class="form-check-input" value="penyemaian">
                            <label class="form-check-label ml-1" for="penyemaian">
                                Penyemaian
                            </label>

                            <input type="radio" name="status" id="status" class="form-check-input ml-4" value="pembibitan">
                            <label class="form-check-label ml-5" for="pembibitan">
                                Pembibitan
                            </label>
                        </div>
                        <div class="form-check">

                        </div>
                    </div>
                    <div class="px-4 py-1 bg-white sm:p-6">
                        <label for="area" class="block font-medium text-sm text-gray-700">Area</label>
                        <select name="area" id="area" class="form-control">
                            <option value="a">Area A</option>
                            <option value="b">Area A</option>
                            <option value="c">Area C</option>
                        </select>
                        @error('area')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="tipe" class="block font-medium text-sm text-gray-700">Tipe tanaman</label>
                        <select name="tipe" id="tipe" class="form-control">
                            <option value="test1">Test 1</option>
                            <option value="test2">Test 2</option>
                            <option value="test3">Test 3</option>
                        </select>
                        @error('area')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-1 bg-white sm:p-6">
                        <label for="varietas" class="block font-medium text-sm text-gray-700">Varietas</label>
                        <select name="varietas" id="varietas" class="form-control">
                            <option value="kentang">Kentang</option>
                            <option value="kacang">Kacang</option>
                            <option value="jagung">Jagung</option>
                        </select>
                        @error('varietas')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="kuantitas" class="block font-medium text-sm text-gray-700">Kuantitas</label>
                        <input type="text" name="kuantitas" id="kuantitas" type="text" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('kuantitas', '') }}" />
                        @error('kuantitas')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-1 bg-white sm:p-6">
                        <label for="harga" class="block font-medium text-sm text-gray-700">Harga per unit</label>
                        <input type="text" name="harga" id="harga" type="text" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('harga', '') }}" />
                        @error('harga')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection