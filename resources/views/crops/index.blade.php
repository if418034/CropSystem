@extends('layouts/app')

@section('title', 'Crops | CropSystem')

@section('container')

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Informasi Cropping') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="block mb-8">
            <a href="{{ route('crops.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Tambah Informasi Cropping</a>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No.
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis Tanah
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Curah Hujan
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Iklim
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Suhu
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php
                                $number = 0;
                                ?>
                                @foreach($crops as $crop)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php
                                        $number++;
                                        echo ($number);
                                        ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$crop->jenisTanah}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{$crop->curahHujan}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{$crop->iklim}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{$crop->suhu}} &#176;
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                        <a href="{{ route('crops.show', $crop->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                        <a href="{{ route('crops.edit', $crop->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                        <form class="inline-block" action="{{ route('crops.destroy', $crop->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 ml-2">
            <h3>Informasi Cropping</h3>
            <div class="text text-black">Pertanian ditentukan oleh jenis tanah dan parameter iklim yang menentukan pengaturan agro-ekologi keseluruhan untuk
                makanan dan kesesuaian tanaman atau serangkaian tanaman untuk budidaya.

                <img src="../../img/map.png" class="img-fluid rounded mx-auto d-block mt-4" alt="Responsive image">

            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card mt-5">
                        <img class="card-img-top" src="../../img/tanah.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-black">Kondisi Tanah</h5>
                            <p class="card-text text-black">Kondisi Tanah mencakup kelembapan, suhu, dan konduktivitas listrik (EC) di berbagai kedalaman. <br>
                                Kelembaban: <br>
                                Pengukuran nilai kadar air volumetrik (VWC). Nilai kelembaban memiliki akurasi +/- 1% pada kisaran 0-50% VWC. <br>
                                <br>
                                Suhu: <br>
                                Suhu diukur dengan akurasi +/- 0,5 ° C (maks) dan rentang pengoperasian -10 ° C hingga + 70 ° C. <br>
                                <br>
                                Konduktivitas Listrik (EC): <br>
                                Pengukuran dalam decisiemens / m, dengan rentang operasi 0-5 decisiemens / m (curah), mewakili tingkat salinitas <br>
                                tanah, yang dapat digunakan untuk mengelola rezim salinitas tanaman.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card mt-5">
                        <img class="card-img-top" src="../../img/cuaca.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-black">Kondisi Cuaca</h5>
                            <p class="card-text text-black">Informasi cuaca meliputi suhu udara, kelembaban, kecepatan angin, evapotranspirasi (ET), curah hujan, suhu min dan maks, dan banyak lagi. <br>
                                Ramalan satu minggu disajikan dan semua data dapat diekspor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card mt-5">
                        <img class="card-img-top" src="../../img/tanam.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-black">Pola Tanam</h5>
                            <p class="card-text text-black">
                                1. Tanam Tunggal atau Monokultur: <br>
                                Dalam sistem ini, hanya satu tanaman yang ditanam di lahan pertanian dari tahun ke tahun. <br>
                                <br>
                                2. Penanaman Ganda: <br>
                                Dalam sistem ini, petani menanam dua atau lebih tanaman di lahan pertanian dalam satu tahun kalender dengan praktik manajemen input yang intensif. Ini mencakup pemotongan tumpang sari, pemangkasan campuran dan pemangkasan berurutan. <br>
                                <br>
                                3. Tumpang sari: <br>
                                Dalam sistem ini, petani menanam dua atau lebih tanaman secara bersamaan di lahan yang sama dalam satu tahun kalender.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="card mt-5">
                        <img class="card-img-top" src="../../img/peta.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-black">Peta Topografi</h5>
                            <p class="card-text text-black">Peta topografi adalah salah satu jenis peta yang mempunyai ciri-ciri khusus yang memperlihatkan keadaan bentuk, penyebaran roman muka bumi dan dimensinya dengan ditandai dengan adanya skala besar dan lebih detail. Sebuah peta topografi adalah representasi grafis secara rinci dan akurat mengenai keadaan alam di suatu daratan. Topografi berdampak besar pada aliran air dan nutrisi di tanah dan di lapangan.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card mt-5">
                        <img class="card-img-top" src="../../img/pemetaan.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-black">Pemetaan Tanah</h5>
                            <p class="card-text text-black">Pemetaan tanah digital adalah pembuatan dan pengkayaan sistem informasi tanah yang melibatkan kegiatan survei lapangan, kegiatan laboratorium dan metode numerik untuk mendapatkan informasi tanah yang terus menerus, baik yang spasial maupun yang non spasial. Jenis dan tekstur tanah sangat penting untuk perhitungan tingkat kelembaban yang tepat, sistem irigasi, sifat hidrolik dan bahan organik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection