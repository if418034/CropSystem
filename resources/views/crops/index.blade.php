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
            <h3>April - Agustus</h3>
            <div class="text text-black">Pada musim kemarau hama tanaman lebih intens jenis serangga seperti kutu daun yang menularkan virus keriting dan bulai. Pada musim kemarau anda juga harus rajin melakukan pengairan.</div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Pupuk Anorganik
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Pupuk Organik
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Waktu
                        </th>
                        <th scope="col" class="px-1 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Cara
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-1 py-4 whitespace-nowrap">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    Urea : 200 kg
                                    <br>
                                    ZA : 150 kg
                                    <br>
                                    TSP/SP-36 : 300 kg
                                    <br>
                                    KCl : 100 kg
                                    <br>
                                    PPC : 2 kg
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                Pupuk Kandang
                                <br>
                                (20 liter)
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                Pupuk buatan dapat diberikan langsung pada waktu tanam dan
                                <br>
                                dicampur dengan pupuk kandang/kompos. Pada daerah curah hujan
                                <br>
                                tinggi, pupuk N dan K diberikan 3 kali yaitu 1/3 bagian dosis
                                <br>
                                pada waktu tanam, 1/3 bagian yang kedua diberikan pada waktu
                                <br>
                                pengguludan pertama (tanaman umur 3 minggu) dan 1/3 bagian yang
                                <br>
                                terakhir pada saat pengguludan yang kedua (tanaman umur 5-6
                                <br>
                                minggu). PPC diberikan sebanyak 4 kali dengan dosis 2,5 cc/l
                                <br>
                                atau 750 cc/600 l setiap kali pemakaian. Penggunaan tahap awal
                                <br>
                                diberikan 14 HST, tahap kedua 30 HST, tahap ketiga 45 HST dan
                                <br>
                                tahap akhir 60 HST
                            </div>
                        </td>
                        <td class="px-1 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                Pemberian pupuk dianjurkan dengan <br>
                                guratan-guratan atau diberikan <br>
                                secara setempat diantara umbi <br>
                                kentang yang akan ditanam. <br>
                                Kemudian umbi bibit tersebut <br>
                                ditutup dengan tanah dengan <br>
                                membuat guludan-guludan dan <br>
                                membentuk parit-parit <br>
                                kecil diantara masing-masing <br>
                                barisan umbi kentang yang <br>
                                telah ditanam.
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h4 class="mt-3">Pemeliharaan</h4>
            <div class="text text-black">
                Penyulaman <br>
                Tanaman yang mati dan lambat tumbuh sebaiknya diganti dengan cara penyulaman. Penyulaman paling lambat <br>
                dilakukan 2-3 minggu setelah tanam. <br>
                <br>
                Penyiangan dan pembubunan <br>
                Selama pertumbuhan, tanaman kentang sangat peka terhadap gulma, karenanya 3 minggu setelah tanam harus segera <br>
                disiangi dengan menggunakan cangkul atau garpu, pada saat yang sama juga dilakukan pembubunan. <br>
                <br>
                Setelah tanaman berumur 5 – 6 minggu, pertanaman disiangi kembali dan guludan ditinggikan, agar tanaman tidak rebah dan menjaga aerasi tanah tetap baik. <br>
                <br>
                <b> Pengendalian organisme pengganggu </b>
                <br>

                Hama <br>
                1. penggerek Umbi : Phytorimae operculella <br>
                <br>
                Gejala : Larva melubangi umbi dan meninggalkan kumpulan kotoran di dekat lubang masuk. Pada daun dan batang <br>
                terdapat lubang-lubang dan liang korok. <br>
                <br>
                Kutu daun (Aphis sp). <br>
                Kutu daun hidup bergrombol dan menyerang daun bagian bawah dengan cara menghisap cairan, sehingga daun <br>
                mengriting/melengkung kemudian layu, akhirnya tanaman mati. <br>
                <br>
                Ulat tanah (Agrotis ipsilon). <br>
                Ulat tanah biasanya menyerang tanaman yang masih muda. Bagian yang dimakan daun pucuk tanaman sehingga <br>
                tanaman roboh. <br>
                <br>
                Pengendalian :
                <br>
                Menanam umbi bibit dengan kedalaman minimum 20 cm kemudian menutupi umbi bibit dengan tanah gembur. <br>
                Melakukan pergiliran tanaman (rotasi), penanaman serempak. <br>
                Penggunaan insektisida efektif.
            </div>
        </div>
    </div>
</div>


@endsection