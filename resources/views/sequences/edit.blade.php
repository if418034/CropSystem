@extends('layouts/app')

@section('title', 'Crops | CropSystem')

@section('container')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Informasi Cropping
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <form action="{{ url('/sequence/simpanUrutan') }}" method="post">
                                @csrf
                                @method('post')
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nomor Urutan
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Kategori Tanaman
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Jenis Tanaman
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($tanamans as $tanaman)
{{--                                        @if($tanaman->sequence > 0)--}}
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input name="id[]" value="{{$tanaman->id}}" hidden></input>

                                                    <input type="number" max="4" min="0" name="sequence[]"
                                                           value="{{$tanaman->sequence}}">

                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{$tanaman->kategori}}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$tanaman->jenisTanaman}}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
{{--                                        @endif--}}
                                    @endforeach
{{--                                    @foreach($tanamans as $tanaman)--}}
{{--                                        @if($tanaman->sequence == null || $tanaman->sequence == 0)--}}
{{--                                            <tr>--}}
{{--                                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                                    <input name="id[]" value="{{$tanaman->id}}" hidden></input>--}}
{{--                                                    <input type="number" max="4" min="0" id="sequence" name="sequences"--}}
{{--                                                           value="{{$tanaman->sequence}}">--}}

{{--                                                </td>--}}
{{--                                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                                    <div class="ml-4">--}}
{{--                                                        <div class="text-sm font-medium text-gray-900">--}}
{{--                                                            {{$tanaman->jenisTanaman}}--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
                                    </tbody>
                                </table>
                                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                        Edit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
