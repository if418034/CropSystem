@extends('layouts/app')

@section('title', 'Detail Tanaman | CropSystem')

@section('container')
    <div class="container-fluid">

        <!-- Content Row -->

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Telah di Tanam
                                Selama
                            </div>
                            @foreach($date as $dates)
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($dates ->pembibitan <= $today && $today < $dates ->panen )
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{(strtotime($today)-strtotime($dates->pembibitan))/ 86400}} Hari</div>
                                    @endif
                                </td>
                            @endforeach
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <nav>
            <div class="nav nav-tabs ml-4" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                   aria-controls="nav-home" aria-selected="true">Tentang Tanaman</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                   aria-controls="nav-profile" aria-selected="false">Jadwal Penanaman</a>
                <a class="nav-item nav-link" id="nav-method-tab" data-toggle="tab" href="#nav-method" role="tab"
                   aria-controls="nav-method" aria-selected="false">Cara Penanaman</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                            <tr>
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

                                            </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($tanamans as $tanaman)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$tanaman->kategori}}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{$tanaman->jenisTanaman}}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                        {{$tanaman->kondisiAgroclimatic}}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                        {{$tanaman->jenisPupuk}}
                                                    </td>
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
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider mr-5">
                                                    Varietas Tanaman
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider mr-5">
                                                    Waktu Pembibitan
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider mr-5">
                                                    Waktu Penyemaian
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider mr-5">
                                                    Waktu Panen
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($jadwals as $jadwal)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{$jadwal->jenis_tanaman}}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        {{$jadwal->pembibitan}}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        {{$jadwal->penyemaian}}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        {{$jadwal->panen}}
                                                    </td>
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
            </div>
            @foreach($tanamans as $tanaman)
                @if($tanaman->kategori == 'Daun-Daunan')
                    <div class="tab-pane fade" id="nav-method" role="tabpanel" aria-labelledby="nav-method-tab">
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200">

                                                    <tbody class="bg-white divide-y divide-gray-200">
                                                    <h5>Persiapan Lahan, Persemaian<br></h5>
                                                    Lahan untuk pertanaman daun-daunan perlu diolah lebih dahulu dengan dicangkul sedalam 20–30 cm supaya gembur. Setelah itu dibuat bedengan dengan arah membujur dari Barat ke Timur, untuk mendapatkan cahaya penuh. Lebar bedengan 1 m, sedangkan panjang bedengan dapat dibuat tergantung ukuran/bentuk lahan. Setelah diratakan, bedengan diberi pupuk kandang kuda atau ayam dengan dosis 10 ton/ha atau 1 kg/10 m2 bila kondisi tanahnya kurang subur (kandungan bahan organiknya rendah). Lahan yang kaya bahan organik tidak perlu diberikan pupuk kandang lagi. Selanjutnya, pupuk buatan diberikan dengan dosis  N 120 kg, P2O5 90 kg dan K2O 50 kg per hektar atau setara  dengan Urea 30 g, TSP 20 g dan KCl 10 g tiap m2  luas bedengan. Pupuk tersebut disebar rata dan diaduk pada bedengan, kemudian permukaannya diratakan. <br>
                                                    <h5><br>Penanaman</h5>
                                                    Penanaman benih daun-daunan dapat dilakukan dengan tiga cara, yaitu menyebar biji langsung pada bedengan, menyebar langsung pada larikan/barisan, dan melalui persemaian lebih dahulu.<br>

                                                    •	Biji disebar langsung secara merata di atas permukaan bedengan kemudian ditutup tipis dengan tanah (tebalnya kurang lebih 1 – 2 cm).<br>
                                                    •	Biji dapat juga disebarkan pada larikan/barisan dengan jarak antar barisan 10 – 15 cm, kemudian ditutup kembali dengan lapisan tipis tanah.<br>
                                                    •	Benih disemai, kemudian setelah tumbuh (kurang dari 10 hari), bibit dibumbun dan dipelihara selama kurang lebih 3 minggu sampai siap dipindah ke lapangan. Jarak tanam pada sistem ini adalah 50 cm x 30 cm.<br>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($tanaman->kategori == 'Umbi-Umbian')
                        <div class="tab-pane fade" id="nav-method" role="tabpanel" aria-labelledby="nav-method-tab">
                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                    <div class="flex flex-col">
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                    <table class="min-w-full divide-y divide-gray-200">
                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                        1.	Cangkul tanah agar menjadi gembur dan biarkan kurang lebih 3 hari agar terpapar sinar matahari.<br>
                                                        2.	Berikan pupuk kompos pada lahan kemudian cangkul agar merata dalam tanah serta diamkan selama 7 hari<br>
                                                        3.	Buatlah bedengan dengan tinggi 30 cm, dan lebar 70 cam menghadap ke timur-barat agar mendapat pasokan sinar matahari yang maksimal<br>
                                                        4.	Jarak bedengan 40 cm<br>
                                                        5.	Buatlah lubang tanam di atas bedengan dengan jarak antar lubang tanam kira-kira 20 cm hingga 25 cm.<br>
                                                        6.	Selanjutnya tanamlah umbi kentang yang telah bertunas kurang lebih 2 cm, kemudian tutup kembali dengan tanah setebal 5 cm.<br>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
            @endforeach
        </div>


@endsection
