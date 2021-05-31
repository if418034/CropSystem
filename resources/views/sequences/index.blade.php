@extends('layouts/app')

@section('title', 'Urutan Penanaman | CropSystem')

@section('container')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informasi Urutan Penanaman') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        @if(Auth::check() && Auth::user()->admin == 1)
                            <div class="block mb-8">
                                <a href="{{ url('/sequence/editUrutan') }}"
                                   class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit
                                    Urutan</a>
                            </div>
                        @endif
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
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
                                @foreach($sequences as $sequence)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$sequence->sequence}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$sequence->kategori}}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$sequence->jenisTanaman}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        @if($count>0)
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <div class="block mb-4">
                                    <br>
                                    <a class="text-black font-bold px-8">Tanaman yang Tidak Masuk dalam Urutan</a>
                                </div>

                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nomor
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Jenis Tanaman
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    <?php
                                    $number = 0;
                                    ?>
                                    @foreach($notinsequence as $not)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <?php
                                                $number++;
                                                echo($number);
                                                ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{$not->jenisTanaman}}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
