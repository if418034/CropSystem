@extends('layouts/app')

@section('title', 'Tanaman | CropSystem')

@section('container')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Tanaman') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                @if(Auth::check() && Auth::user()->admin == 1)
                    <a href="{{ route('tanamans.create') }}"
                       class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Tambah Tanaman</a>
                @endif
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No.
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kategori Tanaman
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis Tanaman
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kondisi Agroclimatic
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis Pupuk
                                    </th>
                                    @if(Auth::check() && Auth::user()->admin == 1)
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <?php
                                $number = 0;
                                ?>
                                @foreach($tanamans as $tanaman)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <?php
                                            $number++;
                                            echo($number);
                                            ?>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$tanaman->kategori}}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$tanaman->jenisTanaman}}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{$tanaman->kondisiAgroclimatic}}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$tanaman->jenisPupuk}}
                                        </td>
                                        @if(Auth::check() && Auth::user()->admin == 1)
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('tanamans.show', $tanaman->id) }}"
                                                   class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                                <a href="{{ route('tanamans.edit', $tanaman->id) }}"
                                                   class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                                <form class="inline-block"
                                                      action="{{ route('tanamans.destroy', $tanaman->id) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit"
                                                           class="text-red-600 hover:text-red-900 mb-2 mr-2"
                                                           value="Delete">
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
